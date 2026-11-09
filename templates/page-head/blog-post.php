<link rel="stylesheet" type="text/css" href="<?= asset('assets/css/blogs_listing.css') ?>">
<?php
$article = [
    '@context' => 'https://schema.org/',
    '@type' => 'Article',
    'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => site_url('blogs/' . $post['slug'])],
    'headline' => html_entity_decode(strip_tags($post['title']), ENT_QUOTES, 'UTF-8'),
    'description' => '',
    'image' => ['@type' => 'ImageObject', 'url' => site_url($post['image'])],
    'author' => ['@type' => 'Person', 'name' => 'admin'],
    'publisher' => [
        '@type' => 'Organization',
        'name' => brand('name'),
        'logo' => ['@type' => 'ImageObject', 'url' => site_url('uploads/images/logo/0299883001710222475-pd-department.png')],
    ],
    'datePublished' => $post['published'],
    'dateModified' => $post['modified'],
];
?>
<script type="application/ld+json"><?= json_encode($article, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?></script>
