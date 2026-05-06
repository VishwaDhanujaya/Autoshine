<nav class="panel-menu" id="mobile-menu"><ul></ul></nav>
<?php $current_page = basename($_SERVER['PHP_SELF']); ?>

<!-- Loader -->
<div id="loader-wrapper">
<div class="loader">
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
<div class="subline"></div>
<div class="subline"></div>
<div class="subline"></div>
<div class="subline"></div>
<div class="subline"></div>
<div class="loader-circle-1">
<div class="loader-circle-2"></div>
</div>
<div class="needle"></div>
<div class="loading">Loading</div>
</div>
</div>
<!-- //Loader -->

<!-- Header -->
<header class="page-header page-header-1 sticky">
    <!-- Top Bar -->
    <div class="header-top-bar">
        <div class="container-fluid px-lg-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-info-list">
                        <span><i class="icon icon-locate"></i> 174/1, Old Kesbewa Road, Nugegoda</span>
                        <span class="divider">|</span>
                        <span><i class="icon icon-phone"></i> <a href="tel:0115548648" style="color: inherit; text-decoration: none;">011-554-8648</a></span>
                        <span class="divider">|</span>
                        <span class="whatsapp-top"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#fede00" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.438 9.889-9.887.002-5.462-4.415-9.89-9.881-9.891-5.446 0-9.884 4.438-9.887 9.887-.001 2.22.634 4.385 1.841 6.204l-1.013 3.705 3.854-.91c1.676.995 3.276 1.591 5.392 1.592zM12 21c-1.858 0-3.664-.473-5.263-1.372l-.377-.213-3.854.91 1.013-3.705-.233-.372c-1.031-1.642-1.574-3.542-1.573-5.503.003-5.449 4.439-9.885 9.888-9.885 2.64 0 5.122 1.028 6.988 2.896 1.866 1.867 2.894 4.348 2.892 6.989-.003 5.449-4.44 9.885-9.888 9.885zm4.753-12.72c-.271-.12-.413-.18-.705-.18-.291 0-.432.06-.703.18l-1.31.63c-.15.071-.349.094-.5.06-.151-.035-.3-.116-.411-.233l-1.332-1.425c-.2-.213-.233-.538-.081-.787.151-.249.467-.323.704-.171l.661.42c.15.093.336.105.495.032s.273-.222.31-.397l.31-1.442c.071-.329-.125-.658-.454-.755-.329-.097-.66.071-.787.387l-.42 1.05c-.12.301-.137.636-.048.948.089.312.274.593.528.805l1.64 1.365c.42.349.957.514 1.488.455.531-.059 1.017-.323 1.348-.73l.63-.78c.2-.249.167-.611-.073-.822l-1.368-.828z"/></svg> <a href="https://wa.me/94702211022" style="color: inherit; text-decoration: none; margin-left: 5px;">0702211022</a></span>
                        <span class="divider">|</span>
                        <span><i class="icon icon-clock"></i> Mon - Sat: 7:00 AM - 6:00 PM</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar" id="slide-nav">
        <div class="container-fluid px-lg-5">
            <div class="header-row-unified">
                <!-- Logo -->
                <div class="logo">
                    <a href="index.php">
                        <img alt="Logo" src="assets/images/Auto-Shine-logo_1.png" class="logo-main"/>
                    </a>
                </div>

                <!-- Desktop Menu wrapped in slidemenu for sliding effect -->
                <div id="slidemenu">
                    <div class="main-menu-wrapper hidden-xs hidden-sm">
                        <ul class="nav navbar-nav">
                            <li class="<?php echo ($current_page == 'index.php' || $current_page === '') ? 'current-menu-item' : ''; ?>"><a href="index.php">Home</a></li>
                            <li class="<?php echo ($current_page == 'about-us.php') ? 'current-menu-item' : ''; ?>"><a href="about-us.php">About Us</a></li>
                            <li class="<?php echo ($current_page == 'services.php' || strpos($current_page, 'service-') === 0) ? 'current-menu-item' : ''; ?>"><a href="services.php">Services</a></li>
                            <li class="<?php echo ($current_page == 'gallery.php') ? 'current-menu-item' : ''; ?>"><a href="gallery.php">Gallery</a></li>
                            <li class="<?php echo ($current_page == 'packages.php') ? 'current-menu-item' : ''; ?>"><a href="packages.php">Packages</a></li>
                            <li class="<?php echo ($current_page == 'contacts.php') ? 'current-menu-item' : ''; ?>"><a href="contacts.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Actions (Visible on both Mobile and Desktop) -->
                <div class="header-actions">
                    <a class="appointment-btn" data-target="#appointmentForm" data-toggle="modal" href="#">
                        <i class="icon-shape icon"></i> <span>Appointment</span>
                    </a>
                    <button class="navbar-toggle" type="button">
                        <i class="icon icon-lines-menu"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>