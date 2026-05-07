<!DOCTYPE html>
<html lang="en-GB">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="assets/images/Auto-Shine-logo.png" rel="shortcut icon" type="image/png">
    <link rel="apple-touch-icon" href="assets/images/Auto-Shine-logo.png">

    <!-- SEO & Social Media -->
    <meta name="author" content="Autoshine Pvt Ltd">
    <link rel="canonical" href="https://autoshine.lk<?php echo $_SERVER['REQUEST_URI']; ?>">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Autoshine">
    <meta property="og:url" content="https://autoshine.lk<?php echo $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:title"
        content="<?php echo isset($page_title) ? $page_title . " | Autoshine" : "Autoshine – Vehicle Repair & Maintenance Services"; ?>">
    <meta property="og:description"
        content="<?php echo isset($page_description) ? $page_description : 'Autoshine provides professional vehicle repair, mechanical repairs, auto detailing, and maintenance services in Nugegoda, Sri Lanka.'; ?>">
    <meta property="og:image" content="https://autoshine.lk/assets/images/slide1.jpg">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title"
        content="<?php echo isset($page_title) ? $page_title . " | Autoshine" : "Autoshine – Vehicle Repair & Maintenance Services"; ?>">
    <meta name="twitter:description"
        content="<?php echo isset($page_description) ? $page_description : 'Autoshine provides professional vehicle repair, mechanical repairs, auto detailing, and maintenance services in Nugegoda, Sri Lanka.'; ?>">
    <meta name="twitter:image" content="https://autoshine.lk/assets/images/slide1.jpg">

    <title>
        <?php echo isset($page_title) ? $page_title . " | Autoshine" : "Autoshine – Vehicle Repair & Maintenance Services"; ?>
    </title>
    <meta name="description"
        content="<?php echo isset($page_description) ? $page_description : 'Autoshine provides professional vehicle repair, mechanical repairs, auto detailing, and maintenance services in Nugegoda, Sri Lanka.'; ?>">
    <meta content="max-image-preview:large" name="robots">
    <!-- Theme Support CSS -->
    <!-- Plugin CSS -->
    <style id="classic-theme-styles-inline-css" type="text/css">
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>

    <!-- Plugin CSS -->
    <!-- Plugin CSS -->

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CPoppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin,cyrillic-ext,latin-ext,cyrillic,greek-ext,greek,vietnamese"
        rel="stylesheet">

    <!-- Elementor CSS -->
    <link href="assets/css/elementor-frontend.min.css" id="elementor-frontend-css" rel="stylesheet" type="text/css" />
    <link href="assets/css/elementor-kit.css" id="elementor-post-2476-css" rel="stylesheet" type="text/css" />
    <link href="assets/css/elementor-widget-heading.min.css" id="widget-heading-css" rel="stylesheet" type="text/css" />
    <link href="assets/css/elementor-home.css" id="elementor-post-56-css" rel="stylesheet" type="text/css" />

    <!-- Theme Core Plugins -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-css" rel="stylesheet" type="text/css" />
    <link href="assets/css/bootstrap-submenu.css" id="bootstrap-submenu-css" rel="stylesheet" type="text/css" />
    <link href="assets/css/animate.min.css" id="animate-css" rel="stylesheet" type="text/css" />
    <link href="assets/css/slick.css" id="slick-css" rel="stylesheet" type="text/css" />
    <link href="assets/css/bootstrap-datetimepicker.css" id="bootstrap-datetimepicker-css" rel="stylesheet"
        type="text/css" />
    <link href="assets/css/style.css" id="iconfont-style-css" rel="stylesheet" type="text/css" />
    <link href="assets/css/magnific-popup.css" id="magnific-popup-css" rel="stylesheet" type="text/css" />
    <link href="assets/css/jquery.scrolling-tabs.css" id="scrolling-tabs-css" rel="stylesheet" type="text/css" />
    <link href="assets/css/twentytwenty.css" id="twentytwenty-css" rel="stylesheet" type="text/css" />
    <link href="assets/css/perfect-scrollbar.css" id="perfect-scrollbar-css" rel="stylesheet" type="text/css" />
    <link href="assets/css/nouislider.css" id="nouislider-css" rel="stylesheet" type="text/css" />

    <!-- Main Theme Stylesheet -->
    <link href="assets/css/theme-main.css" id="car-repair-services-style-css" rel="stylesheet" type="text/css" />

    <!-- Site-wide styles -->
    <style>
        /* ── Header & background ── */
        header .header-row {
            background: rgba(0, 0, 0, 0) url("assets/images/grey-bg.png") repeat scroll 0 0;
        }

        body.home header.page-header {
            position: absolute;
            background: none;
        }

        body:not(.home) {
            background: url(assets/images/header-photo-bg.jpg) no-repeat center 0;
        }

        @media (max-width: 991px) {
            #pageTitle {
                background: url(assets/images/header-photo-bg.jpg) repeat 0;
                background-size: cover;
            }
        }

        /* ── Transitions & Focus ── */
        a,
        .btn,
        button,
        .service,
        .box01,
        .card01,
        input,
        textarea {
            transition: all 0.3s ease-in-out;
        }

        input:focus,
        textarea:focus {
            border-color: #fede00 !important;
            box-shadow: 0 0 0 2px rgba(254, 222, 0, 0.2) !important;
            outline: none;
        }

        /* ── Inner page: offset below fixed navbar ── */
        body:not(.home) #pageTitle {
            padding-top: 54px !important;
            padding-bottom: 4px !important;
        }

        body:not(.home) #pageContent {
            padding-top: 0;
        }

        @media (min-width: 992px) {
            body:not(.home) #pageTitle {
                padding-top: 60px !important;
            }
        }

        @media (max-width: 767px) {
            body:not(.home) #pageTitle {
                padding-top: 46px !important;
            }
        }

        /* ── Page title bar ── */
        .page-title-wrapper h1 {
            font-size: 24px !important;
            font-weight: 700;
            margin: 0;
            line-height: 1.2;
            color: #fff;
            text-align: left !important;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .page-title-wrapper .breadcrumbs {
            display: none;
        }

        @media (max-width: 767px) {
            .page-title-wrapper h1 {
                font-size: 18px !important;
            }
        }

        /* ── Typography ── */
        body {
            font-size: 15px;
            line-height: 1.7;
            color: #444;
        }

        h2,
        h4,
        h5 {
            color: #000;
        }

        h6.subtitle {
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }

        p {
            margin-bottom: 14px;
        }

        /* ── Section spacing ── */
        section {
            display: block;
        }

        .block {
            padding: 60px 0;
        }

        @media (max-width: 767px) {
            .block {
                padding: 40px 0;
            }
        }

        /* ── Card Hover Polish ── */
        .service:hover,
        .box01:hover,
        .card01:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        }

        /* ── Full-width layout: zero out Elementor wrapper padding ── */
        #primary .elementor-section,
        #primary .elementor-container,
        #primary .elementor-column,
        #primary .elementor-widget-wrap {
            padding-left: 0 !important;
            padding-right: 0 !important;
            margin-left: 0 !important;
            margin-right: 0 !important;
        }

        /* ── Buttons & inputs ── */
        .btn,
        .elementor-button,
        .input-custom,
        .service,
        .services-block .image {
            border-radius: 5px !important;
        }

        .btn-invert:before,
        .btn-invert:after {
            background-color: #2c2c2c !important;
        }

        .filters-row .page-numbers .current {
            background-color: transparent !important;
            color: #fede00;
        }

        /* ── Navbar phone number ── */
        .header-phone {
            text-align: right;
            padding-right: 8px;
        }

        .header-phone .phone-number,
        .header-phone .phone-number a {
            font-size: 13px !important;
            color: #fff !important;
            opacity: 0.9;
            letter-spacing: 0.5px;
            font-weight: 500;
        }

        .header-phone .phone-number a:hover {
            color: #fede00 !important;
            opacity: 1;
        }

        /* ── Service Page UI Refinements ── */
        .service-nav {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .service-nav li {
            margin-bottom: 2px;
        }

        .service-nav li a {
            display: block;
            padding: 12px 20px;
            background: #f8f8f8;
            color: #333;
            border-radius: 6px;
            font-weight: 500;
            text-decoration: none;
            border-left: 4px solid transparent;
            transition: all 0.2s ease;
        }

        .service-nav li a:hover,
        .service-nav li.active a {
            background: #fff;
            border-left-color: #fede00;
            color: #000;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .service-nav li.active a {
            font-weight: 700;
        }

        .info-hours-card {
            background: #1a1a1a;
            color: #fff;
            padding: 25px;
            border-radius: 12px;
            margin-top: 30px;
        }

        .info-hours-card__title {
            color: #fede00 !important;
            font-size: 18px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .hours-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .hours-list li {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 14px;
        }

        .hours-list li:last-child {
            border: none;
        }

        .hours-list .time {
            font-weight: 600;
            color: #ddd;
        }

        .service-single h2 {
            font-size: 32px;
            font-weight: 800;
            margin-bottom: 25px;
            color: #111;
        }

        .service-content p {
            font-size: 16px;
            line-height: 1.8;
            color: #555;
        }

        .marker-list-sm li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 10px;
            list-style: none;
        }

        .marker-list-sm li:before {
            content: "\e911";
            font-family: "autoshine" !important;
            position: absolute;
            left: 0;
            color: #fede00;
            font-size: 12px;
        }

        .text-icon-sm {
            display: block;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            border: 1px solid #eee;
            transition: all 0.3s ease;
            text-decoration: none !important;
            height: 100%;
            margin-top: 20px;
        }

        .text-icon-sm:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            border-color: #fede00;
        }

        .text-icon-sm .icon-wrapper {
            font-size: 40px;
            color: #fede00;
            margin-bottom: 15px;
        }

        .text-icon-sm .title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #111;
        }

        .text-icon-sm p {
            font-size: 14px;
            color: #777;
            margin: 0;
            line-height: 1.5;
        }

        @media (min-width: 992px) {
            .sticky-sidebar {
                position: sticky;
                top: 100px;
            }
        }

        /* ── Dark Full-Width Navigation Bar ── */
        .page-header,
        .navbar#slide-nav {
            background: #111 !important;
            width: 100% !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05) !important;
        }

        .px-lg-5 {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        .header-top-bar {
            background: #000 !important;
            padding: 6px 15px;
            font-size: 12px;
            color: #888 !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05) !important;
        }

        .top-info-list {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .top-info-list i {
            color: #fede00 !important;
            margin-right: 5px;
        }

        .header-row-unified {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }

        .logo-main {
            max-height: 45px !important;
            width: auto;
            transition: all 0.3s ease;
        }

        .navbar-nav {
            list-style: none;
            padding: 0;
            margin: 0 !important;
            display: flex !important;
            gap: 25px;
            flex-direction: row !important;
        }

        .navbar-nav li {
            padding: 0 !important;
            margin: 0 !important;
        }

        .navbar-nav li a {
            color: #fff !important;
            font-weight: 600 !important;
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: 0.5px;
            text-decoration: none !important;
            transition: all 0.3s;
            position: relative;
            padding: 10px 0 !important;
            display: block;
        }

        .navbar-nav li a:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background: #fede00;
            transition: width 0.3s;
        }

        .navbar-nav li a:hover:after,
        .navbar-nav li.current-menu-item a:after {
            width: 100%;
        }

        .navbar-nav li.current-menu-item a,
        .panel-menu li.current-menu-item>a {
            color: #fede00 !important;
        }

        .appointment-btn {
            background: #fede00 !important;
            color: #000 !important;
            padding: 10px 22px !important;
            border-radius: 50px !important;
            font-weight: 700 !important;
            font-size: 13px !important;
            text-decoration: none !important;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 15px rgba(254, 222, 0, 0.2);
            white-space: nowrap;
        }

        .appointment-btn:hover {
            background: #fff !important;
            color: #000 !important;
            transform: translateY(-2px);
        }

        /* Sticky Dark Header */
        .page-header.is-sticky {
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            width: 100% !important;
            background: #111 !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3) !important;
            animation: slideDown 0.4s ease;
            border-bottom: 2px solid #fede00 !important;
        }

        .page-header.is-sticky .header-top-bar {
            display: none !important;
        }

        .page-header.is-sticky .header-row-unified {
            padding: 5px 20px !important;
        }

        .page-header.is-sticky .logo-main {
            max-height: 32px !important;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
            }

            to {
                transform: translateY(0);
            }
        }

        @media (max-width: 991px) {
            .header-row-unified {
                padding: 10px 15px !important;
            }

            .logo-main {
                max-height: 35px !important;
            }

            .main-menu-wrapper {
                display: none !important;
            }

            .navbar-toggle i {
                color: #fff !important;
                font-size: 24px !important;
            }
        }
    </style>

    <script id="jquery-core-js" src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script id="jquery-migrate-js" src="assets/js/jquery-migrate.min.js" type="text/javascript"></script>

    <!-- Google tag (gtag.js) snippet added by Site Kit -->
    <script async="" id="google_gtagjs-js" src="https://www.googletagmanager.com/gtag/js?id=G-41T33R2NWG"
        type="text/javascript"></script>
    <script id="google_gtagjs-js-after" type="text/javascript">
        window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); }
        gtag("set", "linker", { "domains": ["autoshine.lk"] });
        gtag("js", new Date());
        gtag("set", "developer_id.dZTNiMT", true);
        gtag("config", "G-41T33R2NWG");
    </script>

    <style>
        /* ── Dark Full-Width Navigation Bar ── */
        .page-header,
        .navbar#slide-nav,
        .navbar#slide-nav .container-fluid,
        .navbar#slide-nav #slidemenu,
        .header-row-unified {
            background: #111 !important;
            background-color: #111 !important;
            width: 100% !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05) !important;
        }

        .px-lg-5 {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        .header-top-bar,
        .header-top-bar .container-fluid {
            background: #000 !important;
            background-color: #000 !important;
            padding: 6px 15px;
            font-size: 12px;
            color: #888 !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05) !important;
        }

        .top-info-list {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .top-info-list i {
            color: #fede00 !important;
            margin-right: 5px;
        }

        .whatsapp-top {
            display: inline-flex;
            align-items: center;
        }

        .whatsapp-top svg {
            margin-right: 5px;
            vertical-align: middle;
        }

        .header-row-unified {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }

        .logo-main {
            max-height: 45px !important;
            width: auto;
            transition: all 0.3s ease;
        }

        .navbar-nav {
            list-style: none;
            padding: 0;
            margin: 0 !important;
            display: flex !important;
            gap: 25px;
            flex-direction: row !important;
        }

        .navbar-nav li {
            padding: 0 !important;
            margin: 0 !important;
        }

        .navbar-nav li a {
            color: #fff !important;
            font-weight: 600 !important;
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: 0.5px;
            text-decoration: none !important;
            transition: all 0.3s;
            position: relative;
            padding: 10px 0 !important;
            display: block;
        }

        .navbar-nav li a:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background: #fede00;
            transition: width 0.3s;
        }

        .navbar-nav li a:hover:after,
        .navbar-nav li.current-menu-item a:after {
            width: 100%;
        }

        .navbar-nav li.current-menu-item a {
            color: #fede00 !important;
        }

        .appointment-btn {
            background: #fede00 !important;
            color: #000 !important;
            padding: 10px 22px !important;
            border-radius: 50px !important;
            font-weight: 700 !important;
            font-size: 13px !important;
            text-decoration: none !important;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 15px rgba(254, 222, 0, 0.2);
            white-space: nowrap;
        }

        .appointment-btn:hover {
            background: #fff !important;
            color: #000 !important;
            transform: translateY(-2px);
        }

        /* Sticky Dark Header */
        .page-header.is-sticky {
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            width: 100% !important;
            background: #111 !important;
            background-color: #111 !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3) !important;
            animation: slideDown 0.4s ease;
            border-bottom: 2px solid #fede00 !important;
        }

        .page-header.is-sticky .header-top-bar {
            display: none !important;
        }

        .page-header.is-sticky .header-row-unified {
            padding: 5px 20px !important;
        }

        .page-header.is-sticky .logo-main {
            max-height: 32px !important;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
            }

            to {
                transform: translateY(0);
            }
        }

        /* ── Hero Glassmorphism ── */
        .slide-content .vert>.container {
            background: rgba(0, 0, 0, 0.45);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            padding: 40px 60px !important;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            max-width: 700px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
            display: inline-block;
        }

        .slide-content h4 {
            color: #fede00 !important;
            font-size: 18px !important;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .slide-content h3 {
            color: #fff !important;
            font-size: 64px !important;
            line-height: 1.1;
            margin-bottom: 20px;
            font-weight: 800;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .slide-content p {
            color: #eee !important;
            font-size: 18px !important;
            font-weight: 400;
            margin: 0;
        }

        .slide-content.center .vert>.container {
            text-align: center;
            margin: 0 auto;
        }

        .slide-content.left .vert>.container {
            text-align: left;
            margin: 0;
        }

        @media (max-width: 767px) {
            .slide-content .vert>.container {
                padding: 25px 30px !important;
                max-width: 90%;
            }

            .slide-content h3 {
                font-size: 32px !important;
            }

            .slide-content h4 {
                font-size: 14px !important;
            }
        }

        /* ── Scroll Reveal ── */
        .reveal-effect {
            opacity: 0;
            transform: translateY(30px) scale(0.98);
            transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            visibility: hidden;
        }

        .reveal-effect.active {
            opacity: 1;
            transform: translateY(0) scale(1);
            visibility: visible;
        }

        /* ── Custom Luxury Scrollbar ── */
        html {
            scroll-behavior: smooth;
        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #111;
        }

        ::-webkit-scrollbar-thumb {
            background: #444;
            border-radius: 10px;
            border: 2px solid #111;
            transition: all 0.3s ease;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #fede00;
        }

        /* Firefox Support */
        /* ── Enhanced Original Testimonials ── */
        .testimonials-carousel .item__img {
            width: 100px !important;
            height: 100px !important;
            border: 3px solid #fede00 !important;
            border-radius: 50% !important;
            padding: 0 !important;
            background: #fff !important;
            margin: 0 auto 20px !important;
            overflow: hidden !important;
            display: flex !important;
            align-items: center;
            justify-content: center;
        }

        .testimonials-carousel .item__img img {
            width: 100% !important;
            height: 100% !important;
            object-fit: cover !important;
            border-radius: 50% !important;
        }

        .testimonials-carousel .item__description p {
            font-size: 20px !important;
            line-height: 1.6 !important;
            color: #eee !important;
            /* Lighter color since the BG is dark */
            font-weight: 300 !important;
            font-style: italic !important;
            max-width: 800px;
            margin: 0 auto 20px !important;
        }

        .testimonials-carousel .item__autor {
            font-size: 18px !important;
            color: #fff !important;
            font-weight: 600 !important;
        }

        .testimonials-carousel .item__autor .color {
            color: #fede00 !important;
        }

        /* Add a subtle gold quote mark */
        .testimonials-carousel .item__description:before {
            content: "“";
            font-size: 60px;
            color: #fede00;
            line-height: 1;
            opacity: 0.3;
            display: block;
            margin-bottom: -15px;
        }

        /* ── Compact Testimonial Section ── */
        #testimonials .block {
            padding: 40px 0 !important;
        }

        .section-blog__color02 .section__text-background {
            display: none !important;
        }

        /* Remove background text to save space */
        .testimonials-carousel .item__description p {
            font-size: 18px !important;
            margin-bottom: 10px !important;
        }

        /* ── Midnight Dark Footer ── */
        .page-footer {
            background: #0a0a0a !important;
            color: #888 !important;
        }

        .footer-content {
            background: #0a0a0a !important;
            border-top: 1px solid rgba(255, 255, 255, 0.05) !important;
            padding: 80px 0 50px !important;
        }

        .footer-bottom {
            background: #000 !important;
            padding: 25px 0 !important;
            border-top: 1px solid rgba(255, 255, 255, 0.05) !important;
        }

        .footer-content h4,
        .footer-content h5 {
            color: #fff !important;
            font-weight: 700 !important;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 25px !important;
        }

        .footer-content a {
            color: #888 !important;
            transition: all 0.3s;
            text-decoration: none !important;
        }

        .footer-content a:hover {
            color: #fede00 !important;
        }

        /* ── Full Width Map with Floating Glass Card ── */
        .footer-map-section {
            position: relative;
            width: 100%;
            background: #0a0a0a;
            overflow: hidden;
            border-top: 0 !important;
            margin-bottom: 0 !important;
            line-height: 0 !important;
            padding: 0 !important;
        }

        .footer-map-container iframe {
            width: 100%;
            height: 400px !important;
            border: 0 !important;
            filter: grayscale(1) invert(0.92) contrast(1.2) brightness(0.9);
            display: block;
        }

        .map-overlay-container {
            position: absolute;
            top: 65%;
            left: 5%;
            transform: translateY(-50%);
            z-index: 10;
            pointer-events: none;
            width: auto;
        }

        .map-glass-card {
            pointer-events: auto;
            background: rgba(10, 10, 10, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            padding: 30px 40px !important;
            border-radius: 30px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            width: 420px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.5);
            color: #fff !important;
        }

        .map-glass-card h4 {
            color: #fff !important;
            font-size: 20px !important;
            margin-bottom: 20px !important;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .footer-contact-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .contact-item {
            display: flex;
            gap: 12px;
            align-items: flex-start;
            color: #ccc !important;
            font-size: 14px;
            line-height: 1.4;
        }

        .contact-item i {
            color: #fede00 !important;
            font-size: 16px;
            margin-top: 2px;
        }

        .contact-item a {
            color: #ccc !important;
            text-decoration: none !important;
            transition: all 0.3s;
        }

        .contact-item a:hover {
            color: #fede00 !important;
        }

        .footer-bottom {
            background: #000 !important;
            padding: 20px 0 !important;
            border-top: 0 !important;
            position: relative;
            z-index: 20;
        }

        .social-links-footer {
            display: flex;
            gap: 15px;
            justify-content: flex-end;
        }

        .social-links-footer a {
            width: 40px;
            height: 40px;
            background: #111;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            color: #fff !important;
            transition: all 0.3s;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .social-links-footer a:hover {
            background: #fede00;
            color: #000 !important;
            transform: translateY(-3px);
            border-color: #fede00;
        }

        .copyright {
            font-size: 13px;
            color: #666;
        }

        .copyright a {
            color: #fede00 !important;
        }

        /* ── Interactive Price Cards ── */
        .slick-list {
            padding: 20px 0 !important;
        }

        /* Give room for scale and shadows */
        .promo01 {
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1) !important;
            border-radius: 20px !important;
            margin: 10px !important;
            /* Spacing between cards */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05) !important;
        }

        .promo01:hover {
            transform: translateY(-10px) scale(1.03) !important;
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.15) !important;
            z-index: 5;
        }

        .promo01 .btn {
            transition: all 0.3s ease !important;
        }

        .promo01:hover .btn {
            background: #fede00 !important;
            color: #000 !important;
            box-shadow: 0 0 20px rgba(254, 222, 0, 0.6) !important;
            transform: scale(1.05);
        }

        .promo01-header {
            transition: background 0.3s ease;
        }

        .promo01:hover .promo01-header {
            background: #111 !important;
        }

        .promo01:hover .promo01-header .text-02 {
            color: #fede00 !important;
        }

        /* ── Premium Glass Sections ── */
        .promo-01 {
            background: rgba(10, 10, 10, 0.7) !important;
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-radius: 25px !important;
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            padding: 30px !important;
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.2) !important;
        }

        .promo-01__title .text-01 {
            color: #fede00 !important;
        }

        .promo-01__title .text-02 {
            color: #fff !important;
        }

        .promo-01__description {
            color: #ccc !important;
        }

        /* What We Do Glass Captions */
        #what-we-do .service .caption {
            background: rgba(10, 10, 10, 0.6) !important;
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.4s ease;
        }

        #what-we-do .service:hover .caption {
            background: rgba(254, 222, 0, 0.85) !important;
            backdrop-filter: blur(5px);
        }

        #what-we-do .service:hover .caption h3,
        #what-we-do .service:hover .caption .text {
            color: #000 !important;
        }

        /* Guarantee Box Glass */
        .box01 {
            background: rgba(255, 255, 255, 0.03) !important;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.08) !important;
            border-radius: 20px !important;
            padding: 30px !important;
            height: 100%;
            transition: all 0.3s ease;
        }

        .box01:hover {
            background: rgba(255, 255, 255, 0.08) !important;
            transform: translateY(-5px);
            border-color: #fede00 !important;
        }

        .box01__icon i {
            color: #fede00 !important;
        }

        .box01__title {
            color: #fff !important;
            font-weight: 700 !important;
        }

        .box01 p {
            color: #aaa !important;
        }

        /* Why Choose Us Glass */
        .text-icon {
            background: rgba(255, 255, 255, 0.03) !important;
            backdrop-filter: blur(10px);
            padding: 40px 20px !important;
            border-radius: 20px !important;
            border: 1px solid rgba(255, 255, 255, 0.05) !important;
            transition: all 0.3s ease;
        }

        .text-icon:hover,
        .text-icon.active {
            background: rgba(254, 222, 0, 0.05) !important;
            border-color: #fede00 !important;
        }

        .text-icon .title {
            color: #fff !important;
        }

        .text-icon .text {
            color: #999 !important;
        }

        @media (max-width: 991px) {
            .footer-map-section {
                display: flex;
                flex-direction: column;
            }

            .map-overlay-container {
                position: relative;
                top: 0;
                left: 0;
                transform: none;
                padding: 0;
            }

            .map-glass-card {
                width: 100% !important;
                border-radius: 0;
                margin: 0;
                backdrop-filter: none;
                background: #0a0a0a;
                padding: 30px 20px !important;
            }

            .footer-map-container iframe {
                height: 350px !important;
            }

            .social-links-footer {
                justify-content: center;
                margin-top: 20px;
            }

            .copyright {
                text-align: center;
            }
        }

        .header-actions {
            display: flex !important;
            align-items: center !important;
            visibility: visible !important;
            gap: 20px !important;
        }

        /* ── Global Mobile Optimization ── */
        @media (max-width: 767px) {

            /* General Spacing & Cleanup */
            .block {
                padding-top: 30px !important;
                padding-bottom: 30px !important;
            }

            .section-title,
            .block-title {
                margin-bottom: 20px !important;
            }

            h2 {
                font-size: 24px !important;
                line-height: 1.1 !important;
                margin-bottom: 10px !important;
            }

            h3 {
                font-size: 20px !important;
            }

            /* Remove Decorative Clutter */
            .section__text-background,
            .title-separator,
            .divider-sm,
            .divider-md,
            .divider-lg,
            .services__text-background {
                display: none !important;
            }

            /* Minimalist Navbar & Visibility Fix */
            .header-top,
            .header-top-bar,
            .top-info-list {
                display: none !important;
            }

            /* Force header to fixed position IMMEDIATELY - no relative positioning on mobile */
            header.page-header,
            .page-header {
                background: #111 !important;
                position: fixed !important;
                top: 0 !important;
                left: 0 !important;
                right: 0 !important;
                width: 100% !important;
                z-index: 9999 !important;
                margin: 0 !important;
                padding: 0 !important;
                border-bottom: 1px solid rgba(255, 255, 255, 0.05) !important;
                /* Remove any transform/animation that could offset position */
                transform: none !important;
            }




            /* Reset body/html to no top margin, then add padding equal to header height */
            html {
                margin-top: 0 !important;
                padding-top: 0 !important;
            }

            body {
                margin-top: 0 !important;
                padding-top: 58px !important;
            }

            /* HOME PAGE: header is position:absolute (overlays slider), so no body offset needed */
            body.home {
                padding-top: 0 !important;
            }

            /* Ensure nothing before the header creates a gap */
            body>*:first-child {
                margin-top: 0 !important;
            }

            #loader-wrapper {
                position: fixed !important;
            }

            .header-row-unified {
                display: flex !important;
                justify-content: space-between !important;
                align-items: center !important;
                width: 100% !important;
                padding: 8px 15px !important;
                flex-wrap: nowrap !important;
                visibility: visible !important;
                opacity: 1 !important;
            }

            /* Ensure navbar and its children have zero top margin/padding so logo is flush */
            .navbar#slide-nav,
            #slide-nav {
                margin: 0 !important;
                padding: 0 !important;
                border: 0 !important;
                min-height: 0 !important;
            }

            #slide-nav .container-fluid {
                padding: 0 !important;
                margin: 0 !important;
            }

            /* Absolutely kill the top bar — zero height, no display */
            .header-top-bar {
                display: none !important;
                height: 0 !important;
                padding: 0 !important;
                margin: 0 !important;
                overflow: hidden !important;
                border: 0 !important;
            }

            #slide-nav,
            #slidemenu,
            .container-fluid {
                display: block !important;
                visibility: visible !important;
                opacity: 1 !important;
            }

            .logo-main {
                height: auto !important;
                max-width: 120px !important;
                display: block !important;
            }



            /* Appointment Button — always compact, never full-width */
            .appointment-btn {
                display: flex !important;
                padding: 8px 12px !important;
                font-size: 11px !important;
                border-radius: 6px !important;
                background: #fede00 !important;
                color: #000 !important;
                font-weight: 800 !important;
                text-transform: uppercase !important;
                margin-right: 8px !important;
                border: 0 !important;
                white-space: nowrap !important;
                width: auto !important;
                box-shadow: 0 4px 10px rgba(254, 222, 0, 0.3) !important;
            }
        }

        /* ── Search Feature Styles ── */
        .search-trigger-btn {
            background: none;
            border: none;
            color: #fff;
            width: auto;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            padding: 0;
            transition: all 0.3s ease;
            position: relative;
            z-index: 10;
        }

        .search-trigger-btn:hover {
            color: #fede00;
            transform: scale(1.1);
        }

        .search-trigger-btn:focus {
            outline: none;
        }

        .search-trigger-btn i {
            font-size: 18px;
        }

        .search-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(15px);
            z-index: 10000;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            transition: all 0.5s cubic-bezier(0.77, 0, 0.175, 1);
        }

        .search-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .search-close {
            position: absolute;
            top: 40px;
            right: 40px;
            background: none;
            border: none;
            color: #fff;
            font-size: 50px;
            cursor: pointer;
            line-height: 1;
            transition: transform 0.3s ease;
        }

        .search-close:hover {
            color: #fede00;
            transform: rotate(90deg);
        }

        .search-overlay-content {
            width: 100%;
            max-width: 800px;
            padding: 0 30px;
            text-align: center;
            transform: translateY(50px);
            opacity: 0;
            transition: all 0.5s 0.2s ease;
        }

        .search-overlay.active .search-overlay-content {
            transform: translateY(0);
            opacity: 1;
        }

        .search-form {
            position: relative;
            margin-bottom: 30px;
        }

        .search-form input {
            width: 100%;
            background: none;
            border: none;
            border-bottom: 3px solid rgba(255, 255, 255, 0.2);
            color: #fff !important;
            font-size: 30px;
            font-weight: 500;
            padding: 15px 60px 15px 0;
            transition: border-color 0.3s ease;
        }

        .search-form input:focus {
            border-color: #fede00;
            outline: none !important;
            box-shadow: none !important;
        }

        .search-submit {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #fede00;
            font-size: 30px;
            cursor: pointer;
        }

        .search-suggestions {
            color: #888;
            font-size: 16px;
        }

        .search-suggestions a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s;
        }

        .search-suggestions a:hover {
            color: #fede00;
            border-color: #fede00;
        }

        @media (max-width: 767px) {
            .search-trigger-btn {
                width: 25px;
                height: 32px;
            }

            .search-trigger-btn i {
                font-size: 16px;
            }

            .search-form input {
                font-size: 24px;
            }

            .search-close {
                top: 20px;
                right: 20px;
                font-size: 40px;
            }
        }
    </style>
    <link rel="stylesheet" href="assets/css/mobile-responsive.css">
    <?php if (isset($custom_css))
        echo "<style>$custom_css</style>"; ?>
</head>

<body class="<?php echo isset($body_class) ? $body_class : 'home elementor-page'; ?>">
    <!-- Google Tag Manager (noscript) snippet added by Site Kit -->
    <noscript>
        <iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-5BD76MJ"
            style="display:none;visibility:hidden" width="0"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) snippet added by Site Kit -->
    <!-- mobile menu -->