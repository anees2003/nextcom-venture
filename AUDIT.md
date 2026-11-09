# Site Audit

Static audit of the repository contents (grep and Python scripts over HTML, CSS and JS). The site was not rendered in a browser, page copy was not proofread, and live-server headers (HSTS, CSP) were not checked. CVE numbers below are from memory and were not confirmed with a scanner.

## 1. What the repo is

- A **HTTrack mirror of `www.nextcomautomation.com`**, not source code.
- 415 files, about 49 MB: 34 top-level HTML pages, 15 blog posts, 29 CSS, 9 JS, 207 PNG, 71 JPG, 13 TTF, 1 MP4.
- No backend, no `package.json`, no build step, no `.gitignore`. The form endpoint (`/save_contact/*`) lives on the original server and is **not** in this repo.
- Stack on the front end: Bootstrap 5.0.2, jQuery 3.3.1, jQuery UI 1.11.2, Owl Carousel 2.2.1, AOS, Fancybox 3.5.7, intl-tel-input 17.0.8.

## 2. Findings by severity

### High

| # | Finding | Where | Fix |
|---|---|---|---|
| H1 | Forms post with a **relative** URL (`/save_contact/1`) in JS while the HTML `action` is an absolute URL to the old domain. Forms break on any other host. | about 33 pages, inline `$.ajax` blocks | Replace with one PHP endpoint and one shared JS file |
| H2 | **4 pages are "Not Found" error pages** saved as content (6970 bytes, `<title>Not Found</title>`) | `schedule-meeting.html`, `signals/iwl.html`, `signals/iwl0fc5.html`, `blogs/the-power-of-e-commerce-the-power-of-2-step-dropshipping-on-amazon.html` | Delete; rebuild a real schedule page if needed |
| H3 | **Outdated libraries with known CVEs**: jQuery 3.3.1 (CVE-2019-11358, CVE-2020-11022/11023), jQuery UI 1.11.2 (CVE-2016-7103, CVE-2021-41182/3/4, CVE-2022-31160), plus old Bootstrap, Owl Carousel and intl-tel-input | `assets/js/*` | Upgrade (jQuery 3.7.x, jQuery UI 1.13.3+, Bootstrap 5.3.x) |
| H4 | Form error handler writes server-supplied strings into the DOM with `innerHTML` (captcha HTML via `str_arr[1]`) | `about-us.html:1897-1912` and the same block on other pages | Use `textContent`, or return captcha as an image URL |

### Medium

| # | Finding | Detail |
|---|---|---|
| M1 | Duplicate tracking | Every page loads **2 GA4 IDs** (`G-9S8NL2P0ML`, `G-2GYHJGG6ZL`) and **2 Meta Pixel IDs** (`678543464346715`, `24480735708254364`). Events are double counted. |
| M2 | No cookie consent | No consent banner or consent mode, while GA and Meta Pixel fire on load. GDPR/UK/CCPA exposure. |
| M3 | Broken local references | 9 missing files. `/images/phone11.png` is referenced by 25 pages. Others: `assets/css/about_page.css`, `partners2.jpg` to `partners5.jpg`, `hj-logo.PNG`, `ninge-logo.png`, `fancy-hair.png`. |
| M4 | Wrong canonical | `<link rel="canonical" href="index.html">` is relative (HTTrack rewrite). Must be an absolute URL. |
| M5 | Headings | 10 pages have no `<h1>` (account-reinstatement, blogs listing x6, contact-us, our-story, success-story). `etsy-store` has 2, `youtube-automation` has 3. |
| M6 | Image alt text | 1,191 `<img>` tags have no `alt` attribute, many more have empty alt. Most are header/footer images repeated on every page (about 23 per page). |
| M7 | Zoom disabled | `maximum-scale=1` in the viewport tag blocks pinch zoom. Viewport tag is also duplicated on `index.html`. |

### Low

| # | Finding | Detail |
|---|---|---|
| L1 | `rel="noopener"` missing on 94 of 255 `target="_blank"` links | Modern browsers imply it, so low risk |
| L2 | 141 of 192 external scripts have no SRI | Mostly GTM and Facebook, where SRI is not practical |
| L3 | No `robots.txt`, `sitemap.xml`, `favicon.ico`, Open Graph or Twitter tags | `favicon.png` exists |
| L4 | HTTrack artefacts | `Mirrored from ... by HTTrack` comment in 47 files; hash suffixes in names (`blogs2679.html`, `style_new2a9d.css`) |
| L5 | Duplicate CSS | 2 CSS files are byte-identical; `our_story_pagedb03.css` and `our_story_pagef42a.css` both exist |
| L6 | Empty README | No setup or deployment notes |

### Checked and fine

- **No secrets found** (API keys, passwords). The `token` seen in pages is the public Cloudflare Insights beacon token.
- Forms include a CSRF field (3 occurrences on `about-us.html`). Whether the server validates it cannot be verified from this repo.
- All pages have `<title>`, meta description and `lang="en"`, except the 4 error pages.
- No inline `on*=` event handlers, no iframes.

## 3. Performance

- 10 images over 500 KB (largest: 2 MB blog PNG). One 5.7 MB video: `images/tradewheel01397.mp4`.
- Each page is about 160-185 KB of HTML with **38-42 inline `<script>` blocks** repeated on every page.
- 29 separate CSS files (684 KB) and 9 JS files (564 KB), mostly not minified or bundled.
- Fonts are TTF only (no WOFF2).
- 8 service pages are near duplicates of each other (160-185 KB each) and are good candidates for one shared template.

## 4. Contact and brand data embedded in the pages

Everything below is hard-coded in every page and must be replaced when rebranding (see `PLAN.md`):

- Brand name "Nextcom Automation" (91 times in `index.html` alone; 50 files mention "nextcom").
- Email `info@nextcomautomation.com` (47 pages), WhatsApp/phone `+19495229313` (99 occurrences).
- Social links: Facebook profile id `61557717309422`, Instagram `nextcomautomation`, LinkedIn `nextcom-automation`, YouTube links, Trustpilot and Sitejabber review pages.
- Analytics IDs listed in M1.

## 5. Recommended order of work

1. Remove the 4 error pages and HTTrack comments.
2. Fix missing assets (`phone11.png` first).
3. Replace the 3 form scripts with one shared, safe JS file and a PHP endpoint.
4. Fix canonical, H1, alt text, viewport.
5. Upgrade libraries.
6. Consolidate tracking and add a consent banner.
7. Compress images and bundle CSS/JS.

## 6. Corrections and extra findings from the migration (Nov 2026)

Found while doing Phases 1-2 (see `PLAN.md`):

- **M3 correction.** Of the "9 missing files", `phone11.png`, `partners2-5.jpg`, `hj-logo.PNG`, `ninge-logo.png` and `fancy-hair.png` were false positives (root-absolute paths or HTML comments). `about_page.css` existed under a hashed name. The real problem is bigger: **25 files that should be images were saved as the site's "Not Found" HTML page** (HTTrack failed to download them). 23 are still referenced by CSS. Full list: `docs/MISSING-ASSETS.md`.
- **Blog banner lost.** All 14 blog posts pointed their banner `<img>` at `images/BlogsBanner.html` (a failed download).
- **A 34 KB modal was hidden after the footer** (`contactSupplierModal`) and repeated on every page.
- **Meta Pixel loader** pointed to a local copy of `fbevents.js` (HTTrack rewrite), so the pixel never loaded from Meta in the mirror.
- **Forms posted to the live domain** (`https://www.nextcomautomation.com/save_contact/N`), so any data typed into a copy of the site would go to the original owner's server. The new site points forms at its own endpoint.
- **Blog meta descriptions** contained escaped `<p>` tags in all 14 posts (shown literally in search results). Stripped.
- **Three different phone numbers**: header/WhatsApp `+1 (949) 522 9313`, footer `tel:` link `13024129375`, JSON-LD `+1 312 680 3651`. All three are now separate keys in `config/brand.php` so they can be made consistent.
- **Footer review badges** carry the previous owner's Trustpilot business-unit ID (`data-businessunit-id`). Phase 3.
- **Broken markup** such as `<a href ="terms-and-services.html">` (space before `=`) appeared about 60 times and did not match normal link rewriting.
- **Size**: the blog "Featured Articles" sidebar embedded the full text of three articles on every post; it is now generated from data.

