<link rel="stylesheet" type="text/css" href="<?= asset('assets/css/about_page.css') ?>">
<link rel="stylesheet" type="text/css" href="<?= asset('assets/css/affiliate_page.css') ?>">
<link rel="stylesheet" type="text/css" href="<?= asset('assets/css/amazon_wholesale_fba_page.css') ?>">
<style>
        .abt-banner-caption .abt-text3 {
            text-align: left;
        }

        /* Style for List with Icons */
        .list-with-icons {
            list-style-type: none;
            padding-left: 0;
        }

        .list-with-icons li {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .list-with-icons h4 {
            margin-left: 15px;
            font-size: 16px;
            font-weight: 500;
        }

        .icon-img {
            width: 25px;
            height: 25px;
            object-fit: contain;
        }

        .affiliate-easy-steps.all-default-content .defalt-heading h1 {
            text-align: center !important;
        }

        .affiliate-easy-steps.all-default-content .defalt-heading h1 span {
            display: inline;
        }

        .abt-banner-caption .abt-text3 {
            color: #3D3C3C !important;
        }

        .abt-banner-caption .abt-text3 span {
            color: #3D3C3C !important;
            font-size: 70px !important;
        }

        .abt-banner-caption h2.abt-text3.abt-text22 {
            color: #fff !important;
            font-weight: 500;
            font-size: 100px !important;
        }

        .abt-banner-caption .text23 {
            font-style: italic !important;
            margin: 19px 0px !important;
        }

        .fba-banner-section .abt-banner-caption ul li {
            color: #fff !important;
        }

        .affiliate-caption-btn.amazon-fba a.btn1-main {
            background: #fff !important;
            color: #3D3C3C !important;
        }

        .fba-section1 .defalt-heading h1 {
            text-align: left !important;
            margin: 0 !important;
        }

        .fba-section1 .defalt-heading h1 span {
            display: block !important;
        }

        .affiliate-what-section.affiliate-all-txt .what-do-text p {
            font-size: 16px !important;
            color: #2D2D2D !important;
            font-weight: 400;
            margin-bottom: 10px
        }

        section.affiliate-easy-steps-section.fba-section1 .affiliate-easy-steps.all-default-content .defalt-heading h1 span {
            display: inline-block !important;
            color: #fff !important;
        }

        .bg-gradn {
            background: linear-gradient(79.23deg, #FB5719 26.6%, #FF5616 88.74%) !important;
        }

        section.affiliate-easy-steps-section.fba-section1.bg-gradn .fba-step-all p {
            color: #fff !important;
        }

        .fba-brand-hunting.fba-brand .sign-up-content {
            text-align: right !important;
        }

        .affiliate-all-txt h2 span {
            font-size: 90px;
            font-weight: 600;

        }

        .heading {
            text-align: left;
        }

        .affiliate-all-txt h2 {
            font-size: 60px !important;
            color: #3D3C3C;
            font-weight: 800 !important;

        }

        .fba-product-listing.fba-product.bg-gradn .sign-up-content h2 span {
            color: #fff !important;
        }

        .fba-product-listing.fba-product.bg-gradn p {
            color: #fff !important;
        }

        /* .fba-order-management.fba-order .sign-up-content {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            text-align: end;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        } */

        .fba-packages-have.fba-packages .sign-up-content span {
            font-size: 60px !important;
            font-weight: 800 !important;
        }

        .business-profit-fba-div {
            justify-content: center !important;
        }

        .fba-brand-hunting,
        .fba-product-listing,
        .fba-order-management {
            padding: 40px 0;
            position: relative;
            overflow: hidden;
            /* To allow animation effects */
        }

        .sign-up-content {
            transition: transform 0.3s ease, opacity 0.3s ease;
            opacity: 0;
            /* Start with hidden content */
            transform: translateY(20px);
            /* Start slightly lower */

        }

        .sign-up-content.visible {
            opacity: 1;
            /* Show content */
            transform: translateY(0);
            /* Move to original position */
        }

        .sign-up-img img {
            transition: transform 0.3s ease;
        }

        .sign-up-img img:hover {
            transform: scale(1.05);
            /* Zoom effect on hover */
        }

        h2 span {
            color: #d14;
            /* Accent color for span */
        }

        p {
            margin: 20px 0;
        }

        .container {
            max-width: 1200px;
            /* Limit max width for professional look */
        }

        .gradient-text {
            background: linear-gradient(180deg, #FE5517 -16.8%, #FE5A1C 18.45%, #FE6A29 62.99%, #FE843E 112.32%, #FE9048 131.75%);
            -webkit-background-clip: text;
            /* Apply background clip to text */
            color: transparent;
            /* Make text color transparent to show gradient */
            display: inline-block;
            /* Required for proper gradient application */
            font-size: 2rem;
            /* Optional: Adjust font size */
            font-weight: bold;
            /* Optional: Make text bold */
        }

        .fba-order-management.fba-order {
            padding: 100px 0px;
        }

        .abt-banner-caption ul {
            padding: 0;
        }

        .sign-up-content.visible h2 span.gradient-text.heading {
            text-align: left !important;

        }

        .sign-up-content.visible.left {
            padding-left: 150px;
        }

        .sign-up-content.visible.right {
            padding-right: 150px;
        }

        section.fba-business-setup {
            padding-top: 20px;
            padding-bottom: 87px;
            padding-left: 60px;
            padding-right: 60px;
        }

        .row.py-5.alg {
            padding-bottom: 20px;
            padding-top: 20px;
            padding-left: 30px;
            padding-right: 30px;
        }

        .business-profit-fba-div::before {
            width: 100% !important;
            right: auto !important;

        }

        .single-profit-div.profit-div1 {
            width: 53% !important;
        }

        .single-profit-div {
            width: 54% !important;
            text-align: center;
        }

        .profit-other-text {
            padding-left: 60px;
            padding-top: 20px;
        }

        section.fba-business-setup {
            background: linear-gradient(48.62deg, #FE5517 0.4%, #FE6927 40.13%, #FE8E46 99.6%, #FE8E46 99.6%) !important;

        }

        .business-setup-fba-div h4 {
            font-size: 25px;
            font-weight: 700;
            font-family: 'Poppin' !important;
            color: #ffffff !important;
            margin-bottom: 50px;
        }

        .fba-step-all h4.fba-arrow1 {
            background-size: 100% 100% !important;
            background-repeat: no-repeat !important;
            background-position: center !important;
            color: black !important;
        }

        @media (max-width: 767px){
            .abt-banner-caption .abt-text3 span {
                font-size: 20px !important;
            }
            .abt-banner-caption h2.abt-text3.abt-text22 {
                font-size: 20px !important;
            }
            .fba-banner-section .abt-banner-caption ul li {
                font-size: 12px;
            }
            .list-with-icons h4 {
                font-size: 12px;
                text-align: left;
            }
            .sign-up-img.text-center img {
                display: none;
            }
            .affiliate-what-bg .what-do-heading h2 {
                font-size: 20px !important;
                padding: 10px !important;
            }
            .affiliate-what-section.affiliate-all-txt .what-do-text p {
                font-size: 12px !important;
            }
            .fba-step-all h4 {
                padding: 10px !important;
            }
            .fba-order-management.fba-order {
                padding: 10px 0px;
            }
            .affiliate-all-txt h2 span {
                font-size: 20px !important;
            }
            .affiliate-all-txt h2 {
                font-size: 20px !important;
            }
            .fba-packages-have.fba-packages .sign-up-content span {
                font-size: 20px !important;
            }
            section.fba-business-setup {
                padding: 10px 0px !important;
            }
            .profit-other-text {
                padding: 20px !important;
            }
        }
        @media (min-width: 767px) and (max-width: 992px) {
            .business-setup-fba-div.business-fba-center-div:after {
                height: auto !important;
                width: 30px !important;
                opacity: 1 !important;
            }
            .abt-banner-caption .abt-text3 {
                font-size: 30px !important;
            }
            .abt-banner-caption .abt-text3 span {
                font-size: 40px !important;
            }
            .abt-banner-caption h2.abt-text3.abt-text22 {
                font-size: 30px !important;
            }
            .list-with-icons h4 {
                font-size: 14px;
            }
            .sign-up-content.visible h2 span.gradient-text.heading {
                font-size: 20px !important;
            }
            .affiliate-all-txt h2 {
                font-size: 20px !important;
            }
            .affiliate-all-txt h2 span {
                font-size: 20px !important;
            }
            .fba-packages-have.fba-packages .sign-up-content span {
                font-size: 20px !important;
            }
            .fba-section1 .defalt-heading h1 span {
                display: inline-block !important;
                margin-right: 6px;
                margin-left: 0;
            }
            .sign-up-img.text-center img {
                max-width: 55%;
                height: auto !important;
            }
        }

    </style>
