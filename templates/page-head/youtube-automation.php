<link rel="stylesheet" type="text/css" href="<?= asset('assets/css/about_page.css') ?>">
<link rel="stylesheet" type="text/css" href="<?= asset('assets/css/affiliate_page.css') ?>">
<link rel="stylesheet" type="text/css" href="<?= asset('assets/css/amazon_wholesale_fba_page.css') ?>">
<link rel="stylesheet" type="text/css" href="<?= asset('assets/css/tiktok_shop_automation_page.css') ?>">
<style>
        .logo-sec .header-top {
            padding: 10px 0;
            text-align: center;
            background: linear-gradient(60.93deg, #FD0000 28.91%, #B40202 87.63%) !important;
            color: #fff
        }

        /*.main-header li.nav-item.services-inner-page .mega-menu-service-main-box {*/
        /*    position: absolute;*/
        /*    left: -22%;*/
        /*    top: 40px;*/
        /*    box-shadow: 0 2.424vw 4.242vw 0 rgb(0 0 0/25%);*/
        /*    border-radius: 35px;*/
        /*    padding: 40px;*/
        /*    width: 150%;*/
        /*    background: linear-gradient(60.93deg, #FD0000 28.91%, #180202 87.63%) !important;*/
        /*    opacity: 0;*/
        /*    visibility: hidden;*/
        /*    transition: .5s*/
        /*}*/

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
            font-size: 1.2em;
            font-weight: bold;
        }

        .icon-img {
            width: 25px;
            height: 25px;
            object-fit: contain;
        }

        x-youtube-automation.nextcom-automation {
            display: block;
            width: 100%;
            /* Set the width to full */
            height: auto;
            /* Maintain aspect ratio */
        }

        .abt-banner-caption .abt-text3 {
            font-size: 30px;
            font-weight: 500;
        }

        .abt-banner-caption .abt-text3 span {
            color: #FD0000 !important;
            font-size: 60px;
            font-weight: 700;
        }

        .about-banner-section {
            padding: 100px 0px 250px !important;
        }

        .fba-section1 .defalt-heading h1 {
            color: #FD0000 !important;
            text-align: left !important;
            margin: 0 !important;
        }

        .fba-section1 .defalt-heading h1 span {
            display: block;
            color: #3D3C3C !important;
            margin: 0px
        }

        .step-card {
            background: transparent !important;
            border: 0 !important;
            box-shadow: none !important;
            text-align: center;
        }

        .step-card p {
            color: #fff !important;
        }

        .step-card h4 {
            color: #fff !important;
        }

        .step-card .step-img {
            height: 220px;
            position: relative;
            z-index: 1;
        }

        .step-card .step-img img.img-fluid {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
        }

        .affiliate-all-txt h2 span {
            color: #FD0000 !important;
            display: block;
            font-size: 150px;
        }

        .brand-hunting-section h2 {
            color: #212529 !important;
            font-size: 50px;
            font-weight: 700;

        }

        .brand-hunting-section h2 span {
            color: #FD0000 !important;
        }

        section.fba-business-setup {
            background: linear-gradient(60.93deg, #FD0000 28.91%, #B40202 87.63%)
        }

        .business-setup-fba-div h4 {
            color: #fff !important;
        }

        .single-profit-div .profit-split span {
            background: linear-gradient(180deg, #A3A3A3 0%, #3A3A3A 100%);
            color: #fff !important;
            border-radius: 5px !important;
        }

        .single-profit-div.profit-div1 {
            width: 55% !important;

        }

        .business-profit-fba-div {
            justify-content: start;
        }

        .business-profit-fba-div::before {
            width: 100% !important;
            right: auto !important;
        }

        .affiliate-easy-steps.all-default-content .defalt-heading h1 {
            text-align: center !important;
        }

        .affiliate-easy-steps.all-default-content .defalt-heading h1 span {
            display: inline;
        }

        .img-fluid {
            transition: transform 0.3s ease-in-out;
        }

        .img-fluid:hover {
            transform: scale(1.1);
        }

        .affiliate-what-section.affiliate-all-txt .what-do-text p.payoff_ytb {
            font-size: 18px !important;
            font-weight: 500 !important;
            margin-bottom: 30px !important;
            color: #35455A !important;
        }

        section.affiliate-easy-steps-section.fba-section1.bg-gradn {
            background: linear-gradient(45deg, #fd0000, #b40202);
            margin-bottom: 50px;
        }

        .uppercase {
            text-transform: uppercase;
        }

        .business-setup-fba-div h4 {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .business-setup-fba-div ul {
            list-style-type: disc;
            padding-left: 20px;
        }

        .business-setup-fba-div ul li {
            font-size: 16px;
            margin-bottom: 8px;
        }

        .profit-split {
            font-size: 16px;
            font-weight: 600;
            color: #333;
        }

        .profit-billed h3 {
            font-size: 28px;
            font-weight: bold;
            margin: 10px 0;
            color: #000;
        }

        .profit-billed span {
            font-size: 14px;
            color: #666;
        }

        .profit-btn .btn-bnnr {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        .profit-btn .btn-bnnr:hover {
            background-color: #0056b3;
        }

        .profit-other-text p {
            font-size: 14px;
            color: #777;
            margin-top: 20px;
        }

        @media (min-width: 1100px) and (max-width: 1650px) {
            body .about-banner-section {
                padding: 70px 30px 70px !important;
            }
        }

        p.text-muted {
            color: #35455A !important;
            font-size: 18px !important;
            font-weight: 400 !important;
            margin-bottom: 30px !important;
        }

        .private-pkg-div {
            text-align: center;
            color: #ffffff;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 20.33px;
            line-height: 35px;
            /* or 172% */
            text-align: center;

            color: #FFFFFF;
        }

        section.private-pkg-details .all-pkg-main-div .private-premium h4:before {
            /* background: linear-gradient(90deg, #000000 0%, #DA2448 90%); */
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            z-index: -1;
            border-radius: 20px;
            background: linear-gradient(90deg, #272727 70.5%, #706666 100%) !important;
            height: 124%;
            width: 100%;
            font-size: 25px !important;
        }

        section.private-pkg-details {
            position: relative;
            padding: 0 !important;
            background: transparent !important;
            z-index: 1;
        }

        section.private-pkg-details .all-pkg-main-div {
            background: linear-gradient(60.93deg, #B40202 19.78%, #FD0000 49.79%, #B40202 87.63%) !important;
        }

        section.private-pkg-details .all-pkg-main-div .private-pkg-div ul li.pkg-pricee span:before {
            content: '';
            position: absolute;
            top: 0;
            left: 3px !important;
            margin: auto;
            z-index: -1;
            border-radius: 15px;
            height: 90% !important;
            width: 95% !important;
            background: linear-gradient(90deg, #706666 0%, #272727 15.5%, #272727 75.5%, #706666 100%) !important;
        }

        .private-pkg-div.private-premium-center .expertise-btn.btn-bnnr a.btn1-main {
            background: linear-gradient(90deg, #FFFFFF 0%, #999999 100%) !important;
        }

        @media (max-width: 767px) {
            .abt-banner-caption .abt-text3 span {
                font-size: 20px !important;
                line-height: 20px !important;
            }

            section.fba-banner-section.about-banner-section.bannermain.innerbanner {
                padding: 30px 0px !important;
                background-repeat: no-repeat !important;
                background-size: Cover !important;
            }

            .fba-section1 .defalt-heading h1 {
                font-size: 20px !important;
            }

            .list-with-icons h4 {
                font-size: 12px !important;
                line-height: 22px !important;
                text-align: left;
            }

            .sign-up-img.text-center img {
               display:none;
            }

            .affiliate-what-bg .what-do-heading h2 {
                font-size: 20px !important;
                padding: 10px !important;
            }

            .affiliate-easy-steps.all-default-content h3 {
                font-size: 20px !important;
                line-height: 20px !important;
            }

            .affiliate-easy-steps.all-default-content h1 {
                font-size: 20px !important;
                line-height: 20px !important;
            }

            section.affiliate-easy-steps-section.fba-section1.bg-gradn {
                margin-bottom: 20px;
            }

            .section-roadmap.text-center.mb-5 {
                margin: 20px 0px !important;
            }

            .section-what-we-can-do-for-you.text-center.mb-5 img {
                max-width: 60%;
                margin: auto;
            }

            .section-what-we-can-do-for-you.text-center.mb-5 {
                margin: 20px 0px !important;
            }

            .brand-hunting-section h2 {
                font-size: 20px !important;
            }

            p.text-muted {
                font-size: 12px !important;
            }

            .brand-hunting-section.border-bottom .row.justify-content-between.justify-content-between.align-items-center.section-block.mb-5.my-4.py-3 {
                margin: 10px 0px !important;
                padding: 0px !important;
            }

            .brand-hunting-section.border-bottom .row.justify-content-between.justify-content-between.align-items-center.section-block.mb-5.my-4.py-3 img {
                max-width: 100% !important;
                margin: auto !important;
            }

            .cust-cust .inner-testimonial .testi-user {
                padding: 20px 0px;
            }

            section.youtube-paggggg {
                padding: 10px 0px;
                position: relative;
            }

            section.youtube-paggggg h2 span {
                font-size: 20px !important;
                line-height: 20px !important;
            }

            section.youtube-paggggg p {
                font-size: 12px !important;
                line-height: 20px !important;
            }

            section.youtube-paggggg .row.section-block.mb-5.my-5 {
                margin: 10px 0px !important;

            }
            .main-testi-wrapper, .partners-section {
                padding: 0px !important;
            }
        }
        @media (min-width: 767px) and (max-width: 992px) {
            .abt-banner-caption .abt-text3 {
                font-size: 25px !important;
            }
            .abt-banner-caption .abt-text3 span {
                font-size: 25px !important;
                line-height: 20px !important;
            }
            section.fba-banner-section.about-banner-section.bannermain.innerbanner {
                padding: 30px 0px !important;
            }
            .fba-section1 .defalt-heading h1 {
                font-size: 20px !important;
            }
            .list-with-icons h4 {
                font-size: 12px !important;
                line-height: 22px !important;
                text-align: left;
            }
            .sign-up-img.text-center img {
               max-width: 55%;
            }
            .affiliate-what-bg .what-do-heading h2 {
                font-size: 20px !important;
                padding: 10px !important;
            }
            .affiliate-easy-steps.all-default-content h3 {
                font-size: 20px !important;
                line-height: 20px !important;
            }
            .affiliate-easy-steps.all-default-content h1 {
                font-size: 20px !important;
                line-height: 20px !important;
            }
            section.affiliate-easy-steps-section.fba-section1.bg-gradn {
                margin-bottom: 20px;
            }
            .section-roadmap.text-center.mb-5 {
                margin: 20px 0px !important;
            }
            .section-what-we-can-do-for-you.text-center.mb-5 img {
                max-width: 60%;
                margin: auto;
            }
            .section-what-we-can-do-for-you.text-center.mb-5 {
                margin: 20px 0px !important;
            }
            .brand-hunting-section h2 {
                font-size: 20px !important;
            }
            p.text-muted {
                font-size: 12px !important;
            }
            .brand-hunting-section.border-bottom .row.justify-content-between.justify-content-between.align-items-center.section-block.mb-5.my-4.py-3 {
                margin: 10px 0px !important;
                padding: 0px !important;
            }
            .brand-hunting-section.border-bottom .row.justify-content-between.justify-content-between.align-items-center.section-block.mb-5.my-4.py-3 img {
                max-width: 100% !important;
                margin: auto !important;
            }
            .cust-cust .inner-testimonial .testi-user {
                padding: 20px 0px;
            }
            section.youtube-paggggg {
                padding: 10px 0px;
                position: relative;
            }
            section.youtube-paggggg h2 span {
                font-size: 20px !important;
                line-height: 20px !important;
            }
            section.youtube-paggggg p {
                font-size: 12px !important;
                line-height: 20px !important;
            }
            section.youtube-paggggg .row.section-block.mb-5.my-5 {
                margin: 10px 0px !important;

            }
            .main-testi-wrapper, .partners-section {
                padding: 0px !important;
            }
        }
    </style>
