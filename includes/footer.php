<div class="page-footer">
    <!-- Map & Contact Card -->
    <div class="footer-map-section">
        <div class="footer-map-container" id="footer-map">
            <iframe allowfullscreen="" aria-hidden="false" frameborder="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.22666591487!2d79.89905931426759!3d6.863417321023605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a66bf18e989%3A0x1738eb7d657e5dbc!2sAutoshine%20Pvt%20Limited!5e0!3m2!1sen!2slk!4v1594793495694!5m2!1sen!2slk" tabindex="0"></iframe>
        </div>
        
        <div class="map-overlay-container">
            <div class="map-glass-card reveal-effect">
                <h4>Autoshine Pvt Ltd</h4>
                <div class="footer-contact-list">
                    <div class="contact-item">
                        <i class="icon icon-locate"></i>
                        <span>174/1 Old Kesbewa Road, Delkanda, Nugegoda</span>
                    </div>
                    <div class="contact-item">
                        <i class="icon icon-phone"></i>
                        <span>011-554-8648 / 011-554-8649</span>
                    </div>
                    <div class="contact-item">
                        <i class="icon icon-whatsapp"></i>
                        <span>070-221-1022</span>
                    </div>
                    <div class="contact-item">
                        <i class="icon icon-email"></i>
                        <a href="mailto:autoshine88@gmail.com">autoshine88@gmail.com</a>
                    </div>
                    <div class="contact-item">
                        <i class="icon icon-clock"></i>
                        <span>Mon - Sat: 7:00 AM - 6:00 PM</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="copyright">Copyright © 2026 Autoshine Pvt Ltd. All Rights Reserved. Powered By <a href="https://sltds.lk/">SLT Digital</a></div>
                </div>
                <div class="col-md-4 text-md-right">
                    <div class="social-links-footer">
                        <a href="https://www.facebook.com/autoshinesrilanka" target="_blank" class="icon icon-facebook-logo"></a>
                        <a href="https://www.instagram.com/autoshine.lk" target="_blank" class="icon icon-instagram-logo"></a>
                        <a href="#" class="icon icon-twitter-logo"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search Overlay -->
<div id="searchOverlay" class="search-overlay">
    <button class="search-close" id="searchClose">&times;</button>
    <div class="search-overlay-content">
        <form action="search.php" method="GET" class="search-form">
            <input type="text" name="q" placeholder="What are you looking for?" id="searchInput" autocomplete="off">
            <button type="submit" class="search-submit"><i class="icon icon-search"></i></button>
        </form>
        <div class="search-suggestions">
            <p>Try searching for: <a href="search.php?q=Detailing">Detailing</a>, <a href="search.php?q=Brakes">Brakes</a>, <a href="search.php?q=Hybrid">Hybrid</a></p>
        </div>
    </div>
</div>

<div class="back-to-top" style="bottom: 15px;">
<a href="#top">
<span class="icon icon-arrow_up"></span>
</a>
</div>

<div class="modal fade" id="appointmentForm">
    <div class="modal-dialog container">
        <div class="modal-content">
            <div class="modal-header">
                <a class="appointment" href="#"><i class="icon-shape icon"></i><span>Appointment</span></a>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><i class="icon-close"></i></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <h2 class="modal-title-main">Schedule <span class="color">Auto Service</span></h2>
                    <p>To schedule an appointment give us a call at 011-554-8648 or fill out the form below.</p>
                    


                    <div class="divider divider-sm"></div>
                    
                    <form action="#" id="appointment-form-element" class="contact-form form-horizontal form-default" method="post">
                        <!-- CSRF Token -->
                        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                        
                        <!-- AJAX Message Container -->
                        <div class="msg-container"></div>
                        
                        <!-- Honeypot -->
                        <div style="display:none;">
                            <input type="text" name="website_hp" value="">
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4">
                                <h5>Contact Info</h5>
                                <div class="form-group">
                                    <input class="form-control" name="fname" placeholder="Your name" required type="text"/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="your-phone" placeholder="Phone number" required type="text"/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="your-email" placeholder="address@youremail.com" required type="email"/>
                                </div>
                            </div>
                            
                            <div class="divider visible-sm visible-xs"></div>
                            
                            <div class="col-md-4">
                                <h5>Car Detail</h5>
                                <div class="form-group">
                                    <input class="form-control" name="car-model" placeholder="Vehicle, Make and Model" type="text"/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="car-year" placeholder="Year" type="text"/>
                                </div>
                            </div>
                            
                            <div class="divider visible-sm visible-xs"></div>
                            
                            <div class="col-md-4">
                                <h5>Appointment Details</h5>
                                <div class="form-group">
                                    <input class="form-control datetimepicker" name="date" placeholder="Date" required type="text"/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control timepicker" name="time" placeholder="10 : 00" type="text"/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-12">
                                <button class="btn btn-border btn-invert" name="appt-submit" type="submit"><span>Submit Now</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="couponForm">
<div class="modal-dialog container">
<div class="modal-content">
<div class="modal-header">
<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
<h4 class="modal-title" id="myModalLabel">Coupon</h4>
</div>
<div class="modal-body">
</div>
<div class="modal-footer">
<button class="btn btn-default" data-dismiss="modal" id="btn_save_close" type="button"><span>Close</span></button>
<button class="btn btn-primary" id="btn_save_and_close_for_ele" type="button"><span>Print </span></button>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Print Container -->
<div id="print-only-container" class="print-only"></div><!-- WhatsApp Floating Button -->
<a href="https://wa.me/94702211022" class="whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">
    <svg width="35" height="35" viewBox="0 0 448 512" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.7 17.8 69.4 27.3 106.2 27.3 122.4 0 222-99.6 222-222 0-59.3-23.2-115-65.1-156.9zM223.9 445.3c-33.1 0-65.7-8.9-94.1-25.7l-6.7-4-69.8 18.3L72 365.1l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-5.5-2.8-23.2-8.5-44.2-27.1-16.4-14.6-27.4-32.7-30.6-38.1-3.2-5.5-.3-8.4 2.4-11.2 2.5-2.5 5.5-6.4 8.3-9.6 2.8-3.2 3.7-5.5 5.6-9.2 1.9-3.7 1-6.9-.5-9.6-1.5-2.8-12.5-30.1-17.1-41.1-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 13.2 5.8 23.5 9.2 31.5 11.8 13.3 4.2 25.4 3.6 35 2.2 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
</a><!-- Core Scripts -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/jquery-migrate.min.js" type="text/javascript"></script>
<script src="assets/js/autoshine-plugins.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/slick.min.js" type="text/javascript"></script>
<script src="assets/js/moment.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.scrolling-tabs.min.js" type="text/javascript"></script>
<script src="assets/js/autoshine-forms.js" type="text/javascript"></script>
<script src="assets/js/jquery-ui-core.min.js" type="text/javascript"></script>
<script src="assets/js/perfect-scrollbar.min.js" type="text/javascript"></script>
<script src="assets/js/nouislider.min.js" type="text/javascript"></script>
<script src="assets/js/panel-menu.js" type="text/javascript"></script>
<script src="assets/js/isotope.pkgd.min.js" type="text/javascript"></script>
<script src="assets/js/autoshine-main.js" type="text/javascript"></script>
<script src="assets/js/print-fix.js" type="text/javascript"></script>
<script src="assets/js/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.countTo.js" type="text/javascript"></script>

<script type="text/javascript">
    /* Global Site Configurations */
    var autoshineConfig = {
        "ajax_url":"ajax-core-handlers.php",
        "loader_img":"assets/images/ajax-loader.gif",
        "site_preloader_timeout":"500",
        "csrf_token": "<?php echo $csrf_token; ?>",
        "banner_settings": {"slides_to_show":"1","slides_to_scroll":"1","infinite":"true","autoplay":"false","arrows":"true","dots":"true"},
        "team_settings": {"slides_to_show":"3","slides_to_scroll":"1","infinite":"true","autoplay":"true","autoplay_speed":"3500","arrows":"true","dots":"true"}
    };
    var autoshineSliderSettings = {"autoplay":"true","autoplay_speed":"7000","arrows":"true","dots":"false","fade":"true","speed":"500","pause_on_hover":"true","pause_on_dots_hover":"true"};
    var autoshineTestimonialSettings = {"slides_to_show":"1","slides_to_scroll":"1","infinite":"true","autoplay":"true","autoplay_speed":"2500","arrows":"true","dots":"true","fade":"false"};
</script>

<!-- Scroll Reveal Logic -->
</body>
</html>
