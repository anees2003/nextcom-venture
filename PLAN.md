# Plan: Convert to PHP and Rebrand

**Goal:** Turn the static mirror into a maintainable PHP site with a new brand (name, colors, contact info, logos, text), keeping the **current design and page structure the same**.

**Out of scope:** redesign, new layouts, framework migration, CMS.

---

## 0. Before we start: content and rights

The text, photos, logos, testimonials, "success stories", client/partner logos and review badges (Trustpilot, Sitejabber) in this mirror belong to the original site owner. Reusing the **layout and structure** is the plan. Before launch, all of the following must be **your own or properly licensed**:

- Page copy and blog posts (rewrite or replace)
- Photos, banners, illustrations, icons, video (`tradewheel01397.mp4`)
- Client/partner logos and testimonials (only show real ones you have permission for)
- Review badges and star ratings (remove unless they are your own real reviews)
- Legal pages (privacy policy, terms, refund policy), which must match your real business

Replacing these is a task in Phase 3.

## 1. Inputs needed from you (brand kit)

| Item | Needed |
|---|---|
| Brand name (short + legal) | |
| Tagline | |
| Logo files (SVG/PNG, light + dark), favicon | |
| Primary, secondary, accent colors (hex) | |
| Text and heading colors, button color | |
| Font choice (or keep Poppins) | |
| Contact: email, phone, WhatsApp, address, business hours | |
| Social profile URLs | |
| Domain name, hosting type (shared cPanel / VPS), PHP version | |
| Where form submissions should go (email address, SMTP details, or database) | |
| Analytics IDs (one GA4, one Meta Pixel) | |
| Final page list (keep all 34 or drop some) | |
| Own content: page text, images, testimonials | |

## 2. Target structure

Plain PHP 8.2+, no framework, so it runs on cheap shared hosting.

```
/
├── public/                  # web root
│   ├── index.php            # front controller / router
│   ├── .htaccess            # clean URLs, security headers, caching
│   ├── assets/              # css, js, fonts, images (moved from mirror)
│   ├── robots.txt
│   └── sitemap.php          # generated sitemap
├── config/
│   ├── brand.php            # SINGLE SOURCE for name, contact, social, analytics
│   └── routes.php           # url => page file, title, description
├── templates/
│   ├── layout/head.php      # <head>, meta, canonical, OG tags
│   ├── layout/header.php    # logo + navbar
│   ├── layout/footer.php    # footer, popup inquiry form, scripts
│   └── partials/            # contact form, testimonials, CTA sections
├── pages/                   # one file per page (body only)
│   ├── home.php, about-us.php, contact-us.php, ...
│   └── blogs/               # blog posts
├── data/blogs.php           # blog index (title, slug, date, image, excerpt)
├── src/
│   ├── forms/ContactController.php   # validation, CSRF, mail
│   └── helpers.php                   # e(), url(), asset(), brand()
└── storage/                 # logs, rate limit files (not web accessible)
```

**Key idea:** `config/brand.php` holds every brand value once. Pages call `brand('name')`, `brand('email')`, so a future rebrand is one file edit.

## 3. Phases

### Phase 1: Clean the mirror (small)
- [ ] Delete the 4 "Not Found" pages and the empty `signals/` folder
- [ ] Strip `Mirrored from ... HTTrack` comments from all 47 files
- [ ] Rename hashed files (`blogs2679.html` to `blogs-page-2`, `style_new2a9d.css` to `style.css`) and fix references
- [ ] Fix or remove the 9 missing asset references (`phone11.png` first)
- [ ] Remove duplicate CSS files; remove the old domain's absolute URLs (141 links) in favour of relative/PHP `url()` helper

### Phase 2: PHP skeleton (medium)
- [ ] Create folder structure above and `.htaccess` for clean URLs (`/about-us` instead of `about-us.html`)
- [ ] Extract the shared **head, header/navbar, footer, inquiry popup** (identical across pages) into `templates/layout/*`
- [ ] Move each page body into `pages/*.php`; register routes in `config/routes.php`
- [ ] Merge the 8 near-duplicate service pages where possible into one template with per-page data
- [ ] Build blog listing from `data/blogs.php` with pagination (replaces the 6 static `blogs*.html` pages) and a single blog post template for the 15 posts
- [ ] 404 page that returns a real 404 status
- [ ] `301` redirects from old `.html` URLs to new clean URLs

### Phase 3: Rebrand (medium to large)
**Colors.** The current palette is concentrated in a few values: green `#90d13d` (41 uses), orange `#ff7800` / `#f27302` / `#F47C12` (button color), text `#35455A`, headings `#393737`, plus Bootstrap defaults.
- [ ] Introduce CSS variables in `:root` (`--brand-primary`, `--brand-accent`, `--btn-color`, `--txt-color`, `--h-color`) and replace hard-coded hex values with them
- [ ] Set the new palette in one place; check contrast (WCAG AA) on buttons and text
- [ ] Recolor images that carry the old palette (banners, icons, SVG logos)

**Name and contact.**
- [ ] Replace "Nextcom Automation" / "nextcom" (about 107 places in the homepage alone, 50 files) with `brand('name')`
- [ ] Replace email, phone, WhatsApp links, address and hours with `brand()` values
- [ ] Replace social links; remove Trustpilot/Sitejabber links unless you own those profiles
- [ ] New logo (header, footer, popup, `f-logo.svg`, `demo-call-logo.png`), favicon, Open Graph image
- [ ] Update `<title>`, meta descriptions, canonical, OG and JSON-LD to the new brand and domain

**Content.**
- [ ] Rewrite or replace page copy, blog posts, FAQs, testimonials, partner logos, stats and legal pages (see section 0)

### Phase 4: Forms (medium)
- [ ] One endpoint `POST /contact` replacing `/save_contact/1,2,4,5`. Forms in use: popup inquiry (1), main contact (2), affiliate (5). Form 4's purpose still has to be confirmed.
- [ ] Server-side validation, CSRF token, honeypot and rate limit; replace the image captcha with a simple server-checked one or reCAPTCHA/hCaptcha/Turnstile
- [ ] Send via SMTP (PHPMailer) and/or store in a database table (MySQL/SQLite)
- [ ] One shared `forms.js`: replaces the repeated inline `$.ajax` blocks; shows errors with `textContent`, never `innerHTML`
- [ ] Phone input: enable the intl-tel-input utils script (currently commented out)

### Phase 5: Quality and performance (medium)
- [ ] Upgrade jQuery 3.7.x, jQuery UI 1.13.3+ (or drop it), Bootstrap 5.3.x, current Owl/Fancybox/intl-tel-input
- [ ] One GA4 ID and one Meta Pixel ID, loaded **after** cookie consent; add a consent banner
- [ ] Fix H1 on every page (exactly one), add real `alt` text, remove `maximum-scale=1`
- [ ] Compress images to WebP/optimised JPG (10 files are over 500 KB), compress or host the 5.7 MB video elsewhere, fonts to WOFF2
- [ ] Bundle and minify CSS/JS; long cache headers with versioned filenames
- [ ] `robots.txt`, dynamic `sitemap.xml`, favicon set, OG/Twitter tags
- [ ] `rel="noopener noreferrer"` on all `target="_blank"` links

### Phase 6: Security and launch (small to medium)
- [ ] Security headers in `.htaccess`/server config: CSP, X-Content-Type-Options, Referrer-Policy, HSTS
- [ ] Output escaping helper `e()` used for all dynamic values; no raw user input in HTML
- [ ] Keep config and SMTP credentials outside the web root (`.env` not committed; add `.gitignore`)
- [ ] Test: all routes return 200, old URLs 301, no broken links/images (scripted check), forms deliver mail, mobile layout matches the original, Lighthouse run
- [ ] Deploy to staging, review with you, then switch DNS and submit the sitemap

## 4. Page map (34 pages, 15 blog posts)

Kept as-is in structure: home, about-us, our-story, contact-us, faqs, success-story, affiliate, digital-presence, etsy-store, facebook-marketplace-management, tiktok-shop-automation, youtube-automation, virtual-assistant, walmart-management, account-reinstatement, amazon (2-step-dropshipping-automation, private-label, private, wholesale, wholesale-fba), shopify (dropshipping, dropshipping-2, private-label, private), privacy-policy, refund-policy, terms-and-services, blogs listing (6 pages) and 15 blog posts.

Dropped: `schedule-meeting`, `signals/iwl*`, and the "2-step-dropshipping-on-amazon" blog stub (all Not Found pages).

## 5. Risks

| Risk | Mitigation |
|---|---|
| Rebranded copy of existing text, images or testimonials | Section 0: replace with own or licensed material before launch |
| Hash-named assets and many one-off CSS files make a clean recolor tedious | Do the variable extraction first (Phase 3) and review visually page by page |
| Original form logic (captcha, validation messages) is not in the repo | Rebuild from the HTML/JS we have; confirm field names per form |
| Hosting unknown | Plan targets shared hosting (Apache + `.htaccess`); Nginx config can be added |
| SEO loss from URL changes | 301 map from every old URL |

## 6. Suggested order and milestones

1. **M1**: Phase 1 + 2, so the site renders from PHP templates, same look and old brand.
2. **M2**: Phase 3 colors and brand config, so the new brand is visible everywhere (placeholder copy).
3. **M3**: Phase 4 forms working end to end.
4. **M4**: Phase 5 + 6 and own content in place, then staging review and launch.

Next step: send the brand kit from section 1 (even partial). Phases 1 and 2 can start immediately without it.
