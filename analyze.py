from bs4 import BeautifulSoup
import os

with open('index.html', 'r', encoding='utf-8') as f:
    soup = BeautifulSoup(f.read(), 'html.parser')

css_files = [link.get('href') for link in soup.find_all('link', rel='stylesheet')]
js_files = [script.get('src') for script in soup.find_all('script') if script.get('src')]
images = [img.get('src') for img in soup.find_all('img') if img.get('src')]

print(f"Total CSS files: {len(css_files)}")
for css in css_files[:5]: print(f" - {css}")
print(f"Total JS files: {len(js_files)}")
for js in js_files[:5]: print(f" - {js}")
print(f"Total Images: {len(images)}")
