<link rel="stylesheet" type="text/css" href="<?= asset('assets/css/about_page.css') ?>">
<link rel="stylesheet" type="text/css" href="<?= asset('assets/css/affiliate_page.css') ?>">
<link rel="stylesheet" type="text/css" href="<?= asset('assets/css/amazon_wholesale_fba_page.css') ?>">
<link rel="stylesheet" type="text/css" href="<?= asset('assets/css/shopify_private_label_page.css') ?>">
<style>
        .tabs-mega-menu h2:before {
            background: linear-gradient(270deg, #264006 0%, #ffffff 100%) !important;
        }

        .services-main-services .services-parent h3:before {
            background: linear-gradient(270deg, #264006 0%, #ffffff 100%) !important;
        }

        section.private-pkg-details .all-pkg-main-div .private-pkg-div ul li {
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            margin: 10px 0px;
            line-height: 25px;
            color: #fff;
            font-size: 16px;
            font-weight: 500;
            margin: 8px 0px;
            line-height: 20px;
        }

        section.private-pkg-details .all-pkg-main-div .private-pkg-div ul li.pkg-pricee span {
            display: inline-block;
            position: relative;
            z-index: 1;
            padding: 10px 10px;
            border-radius: 15px;
            width: 230px;
            /* background: linear-gradient(80deg, #000000 0%, #FF7800 100%); */
            margin-bottom: 0px;
        }

        .pkg-btn-btn.amazon-pkg-btnn .btn-bnnr a.btn1-main {
            border-radius: 50px;
            color: #fff;
            font-size: 18px;
            background: linear-gradient(10deg, #3F1D00 0%, #FF7800 90%);
            padding: 10px 30px;
        }

        @media only screen and (min-width: 999px) and (max-width: 2400px) {

            section.private-pkg-details {
                display: block;
            }

            section.private-pkg-details-mbl {
                display: none;
            }
        }

        @media only screen and (max-width: 999px) {
            section.private-pkg-details {
                display: none;
            }

            .abt-banner-caption .text23 {
                max-width: 70%;
            }

            section.private-pkg-details-mbl {
                display: block;
            }

            section.private-pkg-details .all-pkg-main-div .private-premium {
                margin-top: -48px;
            }

            section.private-pkg-details .all-pkg-main-div .private-pkg-div ul li.pkg-pricee span {
                padding: 5px 5px !important;
            }

            .pkg-btn-btn.amazon-pkg-btnn .btn-bnnr {
                text-align: left;
                padding-left: 50px;
            }

            .pkg-btn-btn.amazon-pkg-btnn .btn-bnnr a.btn1-main {
                padding: 5px 8px !important;
                font-size: 12px !important;
            }

            .pkg-btn-btn.amazon-pkg-btnn .btn-bnnr {
                width: unset;
                text-align: center;
                padding-left: 0;
            }
        }
    </style>
