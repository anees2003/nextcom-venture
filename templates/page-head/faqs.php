<link rel="stylesheet" type="text/css" href="<?= asset('assets/css/about_page.css') ?>">
<link rel="stylesheet" type="text/css" href="<?= asset('assets/css/policy_and_term_page.css') ?>">
<style type="text/css">

.faq-main-div .faq-hh {
    text-align: center;
    position: relative;
    margin-bottom: 50px;
}

.faq-main-div .faq-hh h1 {
    background: -webkit-linear-gradient(90deg, #000000 0%, #F27302 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 80px;
    font-weight: 700;
    font-family: 'Poppin' !important;
    margin-bottom: 20px;
    padding-bottom: 10px;
    position: relative;
    z-index: 1;
    display: inline-block;
}

.faq-main-div .faq-hh h1:before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 5px;
    background: linear-gradient(90deg, #F27302 0%, #000 100%);
}

.faq-main-div .faq-p1 p {
    text-align: center;
    z-index: 1;
    font-size: 18px;
    font-weight: 500;
    color: #000;
    position: relative;
}

.faq-main-div .faq-p1 {
    margin-bottom: 30px;
}

button.accordion-button {
    color: #282828;
    font-size: 20px;
    font-weight: 400;
    line-height: normal;
    letter-spacing: 0.99px;
    background: #FFF;
    box-shadow: 0px 4px 20px 0px rgba(0, 0, 0, 0.12);
}

.accordion-item {
    margin-bottom: 20px;
}
button.accordion-button:after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    transform: rotate(0deg);
}
.faq-all button.accordion-button.accordion-button:not(.collapsed) {
    box-shadow: none !important;
    background: var(--btn-color);
}

.faq-all button.accordion-button.accordion-button {
    color: #000 !important;
    position: relative;
    font-size: 18px;
    font-weight: 600;
    border: 1px solid #cccccc96;
}

.faq-all button.accordion-button.accordion-button:not(.collapsed):after {
    content: '';
    filter: brightness(0);
}

.faq-all button.accordion-button.accordion-button:focus {
    box-shadow: none !important;
}

section.refund-policy-banner {
    padding: 60px 0px;
    text-align: center;
    position: relative;
    z-index: 1;
}

section.refund-policy-banner .deflt-h {
    text-align: center;
}

section.refund-policy-banner .deflt-h h1 {
    color: #fff;
    font-size: 70px;
    font-weight: 700;
    margin: 0;
}

@media (max-width: 767px) {
    .logo-sec.main-header {
        padding-bottom: 0px !important;
    }
    .bannermain.innerbanner {
        margin-top: 80px;
    }

    .faq-all button.accordion-button.accordion-button {
        font-size: 12px !important;
        padding: 10px !important;
    }

    button.accordion-button:after {
    }

    .accordion-body {
        font-size: 12px !important;
        padding: 10px !important;
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
    .faq-all button.accordion-button.accordion-button {
        font-size: 14px !important;
        padding: 10px !important;
    }

    button.accordion-button:after {
    }

    .accordion-body {
        font-size: 14px !important;
        padding: 10px !important;
    }
}
</style>
