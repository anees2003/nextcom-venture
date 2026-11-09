# Assets lost in the HTTrack mirror

HTTrack could not download these files and saved the site's "Not Found" HTML page under the image's name instead. They were removed from the repo (they were not images). Where a stylesheet still refers to one, the browser gets a 404 for that background and the element shows no image.

To restore the original look, add the real files (same name, real extension, e.g. `images/02.png`) and update the `url()` in the CSS listed below.

| Lost file | Still referenced by |
|---|---|
| `assets/css/images/ui-bg_flat_55_999999_40x100.html` | jquery-ui.css |
| `assets/css/images/ui-bg_flat_75_aaaaaa_40x100.html` | jquery-ui.css |
| `assets/css/images/ui-bg_glass_45_0078ae_1x400.html` | jquery-ui.css |
| `assets/css/images/ui-bg_glass_55_f8da4e_1x400.html` | jquery-ui.css |
| `assets/css/images/ui-bg_glass_75_79c9ec_1x400.html` | jquery-ui.css |
| `assets/css/images/ui-bg_gloss-wave_45_e14f1c_500x100.html` | jquery-ui.css |
| `assets/css/images/ui-bg_gloss-wave_50_6eac2c_500x100.html` | jquery-ui.css |
| `assets/css/images/ui-bg_gloss-wave_75_2191c0_500x100.html` | jquery-ui.css |
| `assets/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.html` | jquery-ui.css |
| `assets/css/owl.video.play.html` | owl.carousel.min.css |
| `images/02.html` | style_new.css |
| `images/03.html` | style_new.css |
| `images/BlogsBanner.html` | nothing (unused) |
| `images/a1.html` | style_new.css |
| `images/a2.html` | style_new.css |
| `images/abcdef.html` | style_new.css |
| `images/about-top.html` | style_new.css |
| `images/banner-prod-bg.html` | style_new.css |
| `images/bitmap1.html` | style_new.css |
| `images/bitmap2.html` | style_new.css |
| `images/bitmap3.html` | style_new.css |
| `images/discover-bg.html` | style_new.css |
| `images/etsy-arrow.html` | nothing (unused) |
| `images/fram1.html` | style_new.css |
| `images/pngwing.html` | style_new.css |

Also missing, but only referenced inside CSS comments or not at all: `images/our-story-content-bg.png`.

The blog post banner (`images/BlogsBanner`) was lost the same way. `templates/blog-post.php` has a TODO where the `<img>` goes.
