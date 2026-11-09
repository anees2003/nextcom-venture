<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="<?= asset('favicon.png') ?>">
    <meta name="csrf-token" content="<?= e(csrf_token()) ?>">
    <meta http-equiv="pragma" content="no-cache" />
    <title><?= $page['title'] ?></title>
    <meta name="description" content="<?= $page['description'] ?>">
    <?php include ROOT . '/templates/partials/jsonld-organization.php'; ?>
    <link rel="canonical" href="<?= e(canonical_url($page['canonical'] ?? $route)) ?>" />
    <link rel="stylesheet" type="text/css" href="<?= asset('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset('assets/css/style_new.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset('assets/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset('assets/css/aos.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset('assets/css/fancybox.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset('assets/css/intlTelInput.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset('assets/css/head.css') ?>">
    <style>
        img {
            max-width: 100%;
            height: auto;
        }
        .quick-contact {
            /*height: 620px;*/
        }

        label.agree span {
            /*font-size: 11px;*/
            font-size: 9px;
        }

        .agree {
            display: inline-flex;
        }

        .agree input[type="checkbox"] {
            margin-right: 10px !important;
        }

        @media (max-width: 767px) {
            .quick-contact {
                /*height: 430px;*/
            }
        }

        @media (min-width: 767px) and (max-width: 992px) {
            .quick-contact {
                /*height: 470px;*/
            }
        }

        @media (min-width: 992px) and (max-width: 1100px) {
            .quick-contact {
                /*height: 670px;*/
                padding: 20px 20px;
            }
        }

    </style>
    <?php include ROOT . '/templates/partials/analytics.php'; ?>
    <?php if (!empty($page['head'])) { include ROOT . '/templates/page-head/' . $page['page'] . '.php'; } ?>
</head>
