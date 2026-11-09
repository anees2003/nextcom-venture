<?php
// Tracking is configured in config/brand.php. Nothing loads while the lists are empty.
$gaIds = array_filter((array) brand('ga_ids'));
$pixelIds = array_filter((array) brand('meta_pixel_ids'));
if ($v = brand('facebook_domain_verification')): ?>
<meta name="facebook-domain-verification" content="<?= e($v) ?>" />
<?php endif;
if ($v = brand('google_site_verification')): ?>
<meta name="google-site-verification" content="<?= e($v) ?>" />
<?php endif;
if ($gaIds): $first = reset($gaIds); ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=<?= e($first) ?>"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
<?php foreach ($gaIds as $id): ?>
    gtag('config', <?= json_encode($id) ?>);
<?php endforeach; ?>
</script>
<?php endif;
if ($pixelIds): ?>
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,document,'script','https://connect.facebook.net/en_US/fbevents.js');
<?php foreach ($pixelIds as $id): ?>
fbq('init', <?= json_encode($id) ?>);
<?php endforeach; ?>
fbq('track', 'PageView');
</script>
<?php foreach ($pixelIds as $id): ?>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?= e($id) ?>&amp;ev=PageView&amp;noscript=1" alt=""></noscript>
<?php endforeach; endif; ?>
