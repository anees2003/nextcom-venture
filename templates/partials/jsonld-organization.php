<?php
$org = [
    '@context' => 'https://schema.org',
    '@type' => 'Organization',
    'name' => brand('name'),
    'url' => site_url(''),
    'logo' => site_url('images/logo.svg'),
    'email' => brand('email'),
    'contactPoint' => [
        '@type' => 'ContactPoint',
        'telephone' => brand('phone_schema'),
        'contactType' => 'Customer Support',
        'areaServed' => brand('address.country'),
        'availableLanguage' => 'English',
    ],
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => brand('address.street'),
        'addressLocality' => brand('address.locality'),
        'addressRegion' => brand('address.region'),
        'postalCode' => brand('address.postal_code'),
        'addressCountry' => brand('address.country'),
    ],
    'sameAs' => array_values(array_filter([brand('facebook'), brand('linkedin'), brand('instagram')])),
];
?>
<script type="application/ld+json"><?= json_encode($org, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?></script>
