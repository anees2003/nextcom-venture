<link rel="stylesheet" type="text/css" href="<?= asset('assets/css/about_page.css') ?>">
<style type="text/css">
section.about-section {
    padding-top: 50px;
}
body .all-default-ccontent.abttt .deflt-p p{
    display: block;
}
.logo-sec.main-header {
    /*padding-bottom: 20px;*/
}
@media (max-width: 767px) {
    .logo-sec.main-header {
        padding-bottom: 0px !important;
    }
    .bannermain.innerbanner {
        margin-top: 80px;
    }

    .about-section .about-image {
        display: block !important;
    }
    .about-image.abt-img1 {
        padding-right: 0px;
    }
    .abt-banner-caption .abt-text3 {
        text-align: left;
    }
}

@media (min-width: 767px) and (max-width: 992px) {
    .logo-sec.main-header {
        padding-bottom: 0px !important;
    }
        .bannermain.innerbanner {
        margin-top: 100px;
        height: auto !important;
    }
    .about-section .about-image {
        display: block !important;
    }
    .abt-banner-caption .abt-text3 {
        text-align: left;
    }
}
</style>
