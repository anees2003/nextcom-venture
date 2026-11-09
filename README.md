# nextcom-venture

PHP version of the site that started as an HTTrack mirror of `nextcomautomation.com`.
Design and page structure are unchanged; the content is now served by PHP templates so it can be
rebranded from one config file. See `AUDIT.md` (what was found) and `PLAN.md` (what is done and what is next).

## Requirements

- PHP 8.1 or newer (no framework, no Composer packages)
- Apache with `mod_rewrite` (the root `.htaccess` is included), or any server that sends unknown URLs to `index.php`

## Run locally

```bash
php -S localhost:8000 index.php
```

Then open http://localhost:8000.

## Layout

```
index.php, .htaccess   router and Apache rules (the project root is the web root)
assets/, images/, uploads/, favicon.png   public files
config/brand.php   brand name, contact details, social links, tracking IDs (single source of truth)
config/routes.php  page routes with title, description and active nav item
config/redirects.php  old *.html URLs -> clean URLs (301)
templates/layout/  head, header, footer (+ modal and shared scripts)
templates/partials/  JSON-LD, analytics, chat widget, blog pagination
templates/page-head/, templates/page-scripts/   per-page <head> extras and scripts
pages/             one file per page: the page body only
data/blogs.php     blog index; post bodies in data/blogs/<slug>.php
src/helpers.php    brand(), url(), asset(), site_url(), render() ...
docs/MISSING-ASSETS.md   files the original mirror failed to download
```

## Deploying (cPanel / shared hosting)

1. Upload the **contents of this folder** into `public_html` (or a sub-folder such as `public_html/site`).
2. Make sure `.htaccess` was uploaded too (it is a hidden file; enable "show hidden files" in File Manager).
3. Choose PHP 8.1 or newer in cPanel (MultiPHP Manager).
4. Set `site_url` in `config/brand.php` to the real domain.

`config/`, `data/`, `pages/`, `src/`, `templates/`, `docs/` and the `.md` files are blocked from the browser by `.htaccess`.
Nginx: `try_files $uri /index.php?$query_string;` and deny those folders.

## Things to know

- **Forms are not wired yet.** `/save_contact/*` and `/save-comment` answer `503` with a JSON message until Phase 4.
  They no longer post to the old owner's server.
- **Tracking is off.** Google Analytics, Meta Pixel, site verification and the Zoho chat widget IDs belonged to
  the previous owner and are empty in `config/brand.php`. Add your own there.
- Tested with PHP's built-in server at the web root. The `.htaccess` rules and sub-folder installs were not tested on real Apache.
