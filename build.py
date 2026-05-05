import os
import shutil
import re
from bs4 import BeautifulSoup
from urllib.parse import urlparse

BASE_DIR = os.getcwd()
PUBLIC_DIR = os.path.join(BASE_DIR, 'public')
ASSETS_DIR = os.path.join(PUBLIC_DIR, 'assets')
INCLUDES_DIR = os.path.join(BASE_DIR, 'includes')

def is_local(url):
    return not bool(urlparse(url).netloc) and not url.startswith('http') and not url.startswith('//')

def copy_asset(src_path, dest_dir, asset_type):
    # Handle query parameters
    clean_src = src_path.split('?')[0].split('#')[0]
    local_path = os.path.join(BASE_DIR, clean_src)
    
    if os.path.exists(local_path) and os.path.isfile(local_path):
        filename = os.path.basename(clean_src)
        dest_path = os.path.join(dest_dir, filename)
        
        # Handle collision
        counter = 1
        name, ext = os.path.splitext(filename)
        while os.path.exists(dest_path) and not os.path.samefile(local_path, dest_path):
            filename = f"{name}_{counter}{ext}"
            dest_path = os.path.join(dest_dir, filename)
            counter += 1
            
        shutil.copy2(local_path, dest_path)
        return f"assets/{asset_type}/{filename}"
    return src_path

def process_html():
    with open('index.html', 'r', encoding='utf-8') as f:
        html = f.read()

    soup = BeautifulSoup(html, 'html.parser')

    # Process CSS
    for link in soup.find_all('link', rel='stylesheet'):
        href = link.get('href')
        if href and is_local(href):
            new_href = copy_asset(href, os.path.join(ASSETS_DIR, 'css'), 'css')
            link['href'] = new_href

    # Process JS
    for script in soup.find_all('script'):
        src = script.get('src')
        if src and is_local(src):
            new_src = copy_asset(src, os.path.join(ASSETS_DIR, 'js'), 'js')
            script['src'] = new_src

    # Process Images
    for img in soup.find_all('img'):
        src = img.get('src')
        if src and is_local(src):
            new_src = copy_asset(src, os.path.join(ASSETS_DIR, 'images'), 'images')
            img['src'] = new_src
            
    # Process inline background images roughly
    for tag in soup.find_all(style=True):
        style = tag['style']
        if 'background-image' in style or 'background' in style:
            # find url(...)
            urls = re.findall(r'url\([\'"]?(.*?)[\'"]?\)', style)
            for u in urls:
                if is_local(u):
                    new_u = copy_asset(u, os.path.join(ASSETS_DIR, 'images'), 'images')
                    style = style.replace(u, new_u)
            tag['style'] = style

    # Clean WP Bloat
    for tag in soup.find_all('style', id=re.compile(r'^wp-.*')):
        tag.decompose()
    for tag in soup.find_all('link', rel='https://api.w.org/'):
        tag.decompose()
    for tag in soup.find_all('meta', attrs={'name': 'generator'}):
        tag.decompose()
    for tag in soup.find_all('link', rel='alternate', type='application/json'):
        tag.decompose()
    for tag in soup.find_all('link', rel='alternate', type='application/json+oembed'):
        tag.decompose()
    for tag in soup.find_all('link', rel='alternate', type='text/xml+oembed'):
        tag.decompose()
    for tag in soup.find_all('link', rel='EditURI'):
        tag.decompose()

    # Now we split the soup string
    # BeautifulSoup's prettify or str() can sometimes mangle things, but it's okay for this.
    final_html = str(soup)
    
    # Let's find splitting points manually via regex or string matching to keep exact formatting
    
    # 1. Header up to <nav class="panel-menu"
    nav_start = final_html.find('<nav class="panel-menu" id="mobile-menu">')
    # Or fallback to body
    if nav_start == -1:
        nav_start = final_html.find('<body')
        if nav_start != -1:
            nav_start = final_html.find('>', nav_start) + 1
            
    header_html = final_html[:nav_start]
    
    # 2. Navbar: from nav_start to end of <header class="page-header...">
    # First find <header class="page-header
    header_tag_start = final_html.find('<header class="page-header')
    header_tag_end = final_html.find('</header>', header_tag_start) + len('</header>')
    
    navbar_html = final_html[nav_start:header_tag_end]
    
    # 3. Content: from end of navbar to start of <div class="page-footer
    footer_start = final_html.find('<div class="page-footer')
    content_html = final_html[header_tag_end:footer_start]
    
    # 4. Footer: from footer_start to end
    footer_html = final_html[footer_start:]

    # Write to files
    with open(os.path.join(INCLUDES_DIR, 'header.php'), 'w', encoding='utf-8') as f:
        f.write(header_html)
        
    with open(os.path.join(INCLUDES_DIR, 'navbar.php'), 'w', encoding='utf-8') as f:
        f.write(navbar_html)
        
    with open(os.path.join(INCLUDES_DIR, 'footer.php'), 'w', encoding='utf-8') as f:
        f.write(footer_html)

    index_php = f"""<?php require_once '../includes/header.php'; ?>
<?php require_once '../includes/navbar.php'; ?>

{content_html}

<?php require_once '../includes/footer.php'; ?>
"""
    with open(os.path.join(PUBLIC_DIR, 'index.php'), 'w', encoding='utf-8') as f:
        f.write(index_php)
        
    print("Migration successful.")

if __name__ == '__main__':
    process_html()
