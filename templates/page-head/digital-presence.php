<link rel="stylesheet" type="text/css" href="<?= asset('assets/css/about_page.css') ?>">
<link rel="stylesheet" type="text/css" href="<?= asset('assets/css/virtual_assistant_page.css') ?>">
<style type="text/css">

.logo-sec .header-top {
    background: linear-gradient(110deg, #111B06 0%, #7DA649 85%) !important;
}

.main-header li.nav-item a.nav-link:after {
    background: #90D13D !important;
}

.main-header li.nav-item.services-inner-page .mega-menu-service-main-box {
    background: linear-gradient(180deg,#90D13D,#000) !important;
}

.tabs-mega-menu h2:before, .services-main-services .services-parent h3:before {
    background: linear-gradient(270deg, #90D13D, #fff) !important;
}

.abt-banner-caption .text23 {
    font-size: 16px;
}

.virtual-assis-proc .defalt-heading h1 span {
    color: #90D13D;
}

section.virtual-assist-section1 {
    padding: 50px 0px 120px;
    position: relative;
    background-image: url('<?= asset('images/shopify-how-page2.png') ?>');
    background-size: 100% 100% !important;
    background-position: center center !important;
    background-repeat: no-repeat !important;
    text-align: center;
}

.virtual-assis-proc .defalt-heading h1 {
    margin-bottom: 20px;
}

.virtual-assis-proc .defalt-heading p {
    font-size: 16px;
    margin-bottom: 60px;
    font-weight: 500;
}

.digital-presence-process {
    text-align: center;
    position: relative;
}

.digital-presence-proc-img {
    max-width: 35%;
    margin: 0 auto;
    height: 120px;
    text-align: center;
    position: relative;
}

.digital-presence-proc-title h4 {
    color: #332C2C;
    font-weight: 700;
    font-size: 20px;
}

.virtual-assist-pkg-h.all-default-ccontent .defalt-heading h2 {
    margin: 0;
    text-align: center;
}

.virtual-assist-pkg-h.all-default-ccontent .deflt-p p {
    text-align: center;
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 80px;
}

.virtual-assist-pkg-level .pkg-type-h:before {
    background: #312D2D;
}

.virtual-assist-pkg-level.pkg-mid-level {
    background: linear-gradient(180deg, #528313 0%, #000 100%);
}

.virtual-assist-pkg-level .pkg-type-h span {
    background: linear-gradient(180deg, #528313 20%, #000 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.pkg-price-nd-btn {
    background: linear-gradient(180deg, #528313 0%, #000 100%);
}

.virtual-assist-pkg-level.pkg-expert-level {
    background: linear-gradient(0deg, #528313 0%, #000 100%);
}

.virtual-assist-pkg-level.pkg-expert-level .pkg-price-nd-btn {
    background: linear-gradient(0deg, #528313 0%, #000 100%);
}

.virtual-assist-pkg-level.pkg-expert-level .pkg-price-nd-btn .virtual-assist-btn.btn-bnnr a.btn1-main {
    background: linear-gradient(0deg, #528313 0%, #000 100%);
}

.pkg-price-nd-btn .virtual-assist-btn.btn-bnnr a.btn1-main {
    background: linear-gradient(180deg, #528313 0%, #000 100%);
}

section.virtual-assist-pkg {
    padding-bottom: 120px;
    margin-bottom: 50px;
}
section.digital-presence-folio {
    position: relative;
    z-index: 1;
    padding: 50px 0px;
}

section.digital-presence-folio:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    width: 100%;
    height: 75%;
    background: linear-gradient(270deg, #528313 0%, #000 100%);
    box-shadow: rgb(0 0 0 / 12%) 0px 75px 40px 10px;
}

.Portfolio-heading-bg.all-default-ccontent {
    text-align: center;
}

.Portfolio-heading-bg.all-default-ccontent .defalt-heading h2 {
    text-transform: capitalize;
    color: #fff;
}

.owl-carousel-digital-folio .owl-nav {
    display: flex !important;
    justify-content: space-between;
    position: relative;
    z-index: 1;
}

.owl-carousel-digital-folio .owl-nav .owl-prev {
    font-size: 0;
    background-image: url(<?= asset('images/digital-presence-arrow.png') ?>);
    width: 50px;
    height: 25px;
    background-repeat: no-repeat;
    background-size: 100% 100% !important;
    transform: rotate(180deg);
    position: absolute;
    left: -6%;
    bottom: 200px;
    background-position: center center;
}

.owl-carousel-digital-folio .owl-nav .owl-next {
    font-size: 0;
    background-image: url(<?= asset('images/digital-presence-arrow.png') ?>);
    width: 50px;
    height: 25px;
    background-repeat: no-repeat;
    background-size: 100% 100% !important;
    transform: rotate(0deg);
    position: absolute;
    right: -6%;
    bottom: 200px;
    background-position: center center;
}

@media (max-width: 767px) {
    .logo-sec.main-header {
        padding-bottom: 0px !important;
    }
    .bannermain.innerbanner {
        margin-top: 80px;
    }

    section.virtual-assistant-banner {
        background-size: 300% 100% !important;
    }

    .virtual-assis-proc .defalt-heading h1 {
        margin-bottom: 20px !important;
    }

    .virtual-assis-proc .defalt-heading p {
        font-size: 12px !important;
        margin-bottom: 20px !important;
    }

    .digital-presence-proc-img {
        max-width: 50% !important;
        height: 70px !important;
    }

    .digital-presence-proc-title h4 {
        font-size: 14px !important;
        margin: 10px 0px 30px !important;
    }

    section.virtual-assist-section1 {
        background-size: cover !important;
    }

    .owl-carousel-digital-folio .owl-nav .owl-next, .owl-carousel-digital-folio .owl-nav .owl-prev {
        display: none !important;
    }

    .owl-carousel-digital-folio .owl-dots {
        display: flex !important;
        justify-content: center;
        position: relative;
        bottom: -10px !important;
    }

    .owl-carousel-digital-folio .owl-dots .owl-dot {
        height: 10px;
        width: 10px;
        background: #000;
        margin: 5px;
        border-radius: 100%;
    }

    section.digital-presence-folio {
        padding: 30px 0px !important;
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
    section.virtual-assistant-banner {
        background-size: 100% 100% !important;
    }

    .virtual-assis-proc .defalt-heading h1 {
        margin-bottom: 20px !important;
    }

    .virtual-assis-proc .defalt-heading p {
        font-size: 14px !important;
        margin-bottom: 20px !important;
    }

    .digital-presence-proc-img {
        max-width: 50% !important;
        height: 70px !important;
    }

    .digital-presence-proc-title h4 {
        font-size: 14px !important;
        margin: 30px 0px 30px !important;
    }

    section.virtual-assist-section1 {
        /*background-size: cover !important;*/
    }

    .owl-carousel-digital-folio .owl-nav .owl-next, .owl-carousel-digital-folio .owl-nav .owl-prev {
        display: none !important;
    }

    .owl-carousel-digital-folio .owl-dots {
        display: flex !important;
        justify-content: center;
        position: relative;
        bottom: -10px !important;
    }

    .owl-carousel-digital-folio .owl-dots .owl-dot {
        height: 20px;
        width: 20px;
        background: #000;
        margin: 5px;
        border-radius: 100%;
    }

    section.digital-presence-folio {
        padding: 30px 0px !important;
    }
    section.virtual-assistant-banner .abt-banner-caption .abt-text3 {
        font-size: 30px !important;
    }
}

</style>
