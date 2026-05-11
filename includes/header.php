<?php 
require_once __DIR__ . '/security.php'; 
$csrf_token = generateCsrfToken();
?>
<!DOCTYPE html>
<html lang="en-GB">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    
    <?php
    // Dynamically determine the base URL to ensure assets load correctly on all pages (including 404)
    $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https" : "http";
    $host = $_SERVER['HTTP_HOST'];
    // For local XAMPP, this usually includes the subfolder (e.g., /autoshine.lk/public/)
    $current_script = $_SERVER['SCRIPT_NAME'];
    $base_dir = preg_replace('/[^\/]+\.php$/', '', $current_script);
    $base_url = $protocol . "://" . $host . $base_dir;
    ?>
    <base href="<?php echo $base_url; ?>">

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
    <link href="assets/css/perfect-scrollbar.css" id="perfect-scrollbar-css" rel="stylesheet" type="text/css" />
    <link href="assets/css/nouislider.css" id="nouislider-css" rel="stylesheet" type="text/css" />

    <!-- Main Theme Stylesheet -->
    <link href="assets/css/theme-main.css" id="car-repair-services-style-css" rel="stylesheet" type="text/css" />
    <link href="assets/css/autoshine-premium.css" id="autoshine-premium-css" rel="stylesheet" type="text/css" />
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