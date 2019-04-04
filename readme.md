# What it does and how it works

1. Creates landing pages based on content in templates files / sub folders. 
2. Coded to gain a consisent 100/100 with https://developers.google.com/speed/pagespeed/insights/
3. Schemia for NAP and Review Stars
4. Dynamic routing for landing pages
5. Randomized content on landing pages
7. Location specific google map in sidebar
8. Generates sitemaps
9. No CSS or JavaScript frameworks used.

# Usage 
1. Create .htacess file and paste this inside.
```
RewriteEngine On
RewriteBase /
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f

RewriteRule ^(.+)$ index.php [QSA,L]
```
2. Fill out the config.php file
3. Edit line 105 in action_sitemap.php to contain the correct locations
4. Run action_sitemap.php
5. Run index.php

# Template Recomendations

1. Do not place any scripts or style sheets in the header.
2. Minify and paste your CSS in the head. 
3. Minify and paste JavaScript in the footer. Unless you have a reason to use jQuery, do not use it. In most cases it's uneeded bloat that will slow down the load time.
4. Use small, highly optimized files in the .jpeg or .svg format if possible.
5. Use GEO tags on images for SEO
