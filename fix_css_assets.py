import os
import shutil
import re
from urllib.parse import urlparse

BASE_DIR = os.getcwd()
PUBLIC_DIR = os.path.join(BASE_DIR, 'public')
ASSETS_DIR = os.path.join(PUBLIC_DIR, 'assets')
CSS_DIR = os.path.join(ASSETS_DIR, 'css')

# Create fonts directory
os.makedirs(os.path.join(ASSETS_DIR, 'fonts'), exist_ok=True)

# We need to know the original paths of the CSS files to resolve relative URLs.
# Let's map current css filenames to their original paths.
# We can find them by searching the original index.html
with open('index.html', 'r', encoding='utf-8') as f:
    original_html = f.read()

import bs4
soup = bs4.BeautifulSoup(original_html, 'html.parser')
css_map = {}
for link in soup.find_all('link', rel='stylesheet'):
    href = link.get('href')
    if href and not href.startswith('http') and not href.startswith('//'):
        clean_href = href.split('?')[0].split('#')[0]
        filename = os.path.basename(clean_href)
        css_map[filename] = os.path.join(BASE_DIR, clean_href)

def is_local(url):
    if url.startswith('data:'): return False
    return not bool(urlparse(url).netloc) and not url.startswith('http') and not url.startswith('//')

def process_css_file(css_file):
    filepath = os.path.join(CSS_DIR, css_file)
    with open(filepath, 'r', encoding='utf-8', errors='ignore') as f:
        content = f.read()
    
    # We don't have the exact original path for all CSS files if there were duplicates renamed,
    # but let's try to match them.
    # Actually, we can just search the entire tree for the requested file.
    
    def replace_url(match):
        url = match.group(1).strip('\'"')
        if not is_local(url):
            return match.group(0)
            
        clean_url = url.split('?')[0].split('#')[0]
        
        # Determine if it's a font or image based on extension
        ext = os.path.splitext(clean_url)[1].lower()
        if ext in ['.woff', '.woff2', '.ttf', '.eot', '.svg', '.otf']:
            target_type = 'fonts'
        elif ext in ['.png', '.jpg', '.jpeg', '.gif', '.webp', '.ico']:
            target_type = 'images'
        else:
            return match.group(0) # Unknown type, skip
            
        # Try to find this file in the original source
        # We know the original CSS path if it's in css_map
        orig_css_path = css_map.get(css_file)
        src_path = None
        if orig_css_path:
            orig_dir = os.path.dirname(orig_css_path)
            potential_path = os.path.normpath(os.path.join(orig_dir, clean_url))
            if os.path.exists(potential_path) and os.path.isfile(potential_path):
                src_path = potential_path
                
        # If not found via relative path, let's just search the whole directory tree for the filename
        if not src_path:
            filename = os.path.basename(clean_url)
            for r, d, files in os.walk(BASE_DIR):
                if 'public' in r.split(os.sep): continue # skip public dir
                if filename in files:
                    src_path = os.path.join(r, filename)
                    break
                    
        if src_path:
            filename = os.path.basename(src_path)
            dest_dir = os.path.join(ASSETS_DIR, target_type)
            dest_path = os.path.join(dest_dir, filename)
            
            # Handle collision
            counter = 1
            name, ext = os.path.splitext(filename)
            while os.path.exists(dest_path) and not os.path.samefile(src_path, dest_path):
                filename = f"{name}_{counter}{ext}"
                dest_path = os.path.join(dest_dir, filename)
                counter += 1
                
            shutil.copy2(src_path, dest_path)
            
            # Return new relative URL for CSS (CSS is in assets/css, target is in assets/images or assets/fonts)
            new_url = f"../{target_type}/{filename}"
            # preserve query/hash
            suffix = url[len(clean_url):]
            return f"url('{new_url}{suffix}')"
            
        return match.group(0)

    # find all url(...)
    new_content = re.sub(r'url\((.*?)\)', replace_url, content)
    
    if new_content != content:
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(new_content)
        print(f"Updated {css_file}")

for css_file in os.listdir(CSS_DIR):
    if css_file.endswith('.css'):
        process_css_file(css_file)
