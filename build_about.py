import os
import shutil
import re
from bs4 import BeautifulSoup
from urllib.parse import urlparse

BASE_DIR = os.getcwd()
PUBLIC_DIR = os.path.join(BASE_DIR, 'public')
ASSETS_DIR = os.path.join(PUBLIC_DIR, 'assets')
ABOUT_DIR = os.path.join(BASE_DIR, 'about-us')

def is_local(url):
    return not bool(urlparse(url).netloc) and not url.startswith('http') and not url.startswith('//') and not url.startswith('data:')

def copy_asset(src_path, dest_dir, asset_type):
    clean_src = src_path.split('?')[0].split('#')[0]
    # In about-us/index.html, src might be "../../smartdata.tonytemplates.com/..." or "../wp-content/..."
    # If we resolve it against about-us/ directory
    local_path = os.path.normpath(os.path.join(ABOUT_DIR, clean_src))
    
    if os.path.exists(local_path) and os.path.isfile(local_path):
        filename = os.path.basename(clean_src)
        dest_path = os.path.join(dest_dir, filename)
        
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
    with open(os.path.join(ABOUT_DIR, 'index.html'), 'r', encoding='utf-8', errors='ignore') as f:
        html = f.read()

    soup = BeautifulSoup(html, 'html.parser')

    # We only care about replacing image paths in the content block for about-us.php
    for img in soup.find_all('img'):
        src = img.get('src')
        if src and is_local(src):
            new_src = copy_asset(src, os.path.join(ASSETS_DIR, 'images'), 'images')
            img['src'] = new_src
            
    # Inline background images
    for tag in soup.find_all(style=True):
        style = tag['style']
        if 'background-image' in style or 'background' in style:
            urls = re.findall(r'url\([\'"]?(.*?)[\'"]?\)', style)
            for u in urls:
                if is_local(u):
                    new_u = copy_asset(u, os.path.join(ASSETS_DIR, 'images'), 'images')
                    style = style.replace(u, new_u)
            tag['style'] = style

    final_html = str(soup)
    
    header_tag_start = final_html.find('<header class="page-header')
    header_tag_end = final_html.find('</header>', header_tag_start) + len('</header>')
    
    footer_start = final_html.find('<div class="page-footer')
    
    content_html = final_html[header_tag_end:footer_start]

    about_php = f"""<?php require_once '../includes/header.php'; ?>
<?php require_once '../includes/navbar.php'; ?>

{content_html}

<?php require_once '../includes/footer.php'; ?>
"""
    with open(os.path.join(PUBLIC_DIR, 'about-us.php'), 'w', encoding='utf-8') as f:
        f.write(about_php)
        
    print("About Us migration successful.")

if __name__ == '__main__':
    process_html()
