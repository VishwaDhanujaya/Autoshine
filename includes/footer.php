<div class="page-footer">
    <!-- Full Width Map Section with Glass Card -->
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
                        <span>070-2211022</span>
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
                        <a href="#" class="icon icon-facebook-logo"></a>
                        <a href="#" class="icon icon-instagram-logo"></a>
                        <a href="#" class="icon icon-twitter-logo"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="back-to-top" style="bottom: 15px;">
<a href="#top">
<span class="icon icon-arrow_up"></span>
</a>
</div>
<?php include_once 'appointment-logic.php'; ?>
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
                    
                    <?php if ($appt_status_message): ?>
                        <div class="alert <?php echo $appt_status_type == 'success' ? 'alert-success' : 'alert-danger'; ?>" style="padding: 10px; margin: 10px 0; border-radius: 4px;">
                            <?php echo $appt_status_message; ?>
                        </div>
                    <?php endif; ?>

                    <div class="divider divider-sm"></div>
                    
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>#appointmentForm" class="contact-form form-horizontal form-default" method="post">
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
                        
                        <div class="divider divider-sm"></div>
                        <div class="row">
                            <div class="col-sm-4">
                                <button class="btn btn-border btn-invert" name="appt-submit" type="submit"><span>Submit</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="divider visible-xs">
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
</div><!-- Core Scripts -->
<script src="assets/js/theme-addons.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/slick.min.js" type="text/javascript"></script>
<script src="assets/js/moment.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.scrolling-tabs.min.js" type="text/javascript"></script>
<script src="assets/js/theme-forms.js" type="text/javascript"></script>
<script src="assets/js/jquery.event.move.js" type="text/javascript"></script>
<script src="assets/js/jquery.twentytwenty.js" type="text/javascript"></script>
<script src="assets/js/perfect-scrollbar.min.js" type="text/javascript"></script>
<script src="assets/js/nouislider.min.js" type="text/javascript"></script>
<script src="assets/js/panel-menu.js" type="text/javascript"></script>
<script src="assets/js/isotope.pkgd.min.js" type="text/javascript"></script>
<script src="assets/js/theme-custom.js" type="text/javascript"></script>
<script src="assets/js/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.countTo.js" type="text/javascript"></script>

<script type="text/javascript">
    /* Global Site Configurations */
    var ajax_object = {"ajax_url":"form_handler.php","loader_img":"assets/images/ajax-loader.gif","site_preloader_timeout":"500"};
    var ajax_slickslider = {"autoplay":"true","autoplay_speed":"7000","arrows":"true","dots":"false","fade":"true","speed":"500","pause_on_hover":"true","pause_on_dots_hover":"true"};
    var ajax_testiomonial = {"slides_to_show":"1","slides_to_scroll":"1","infinite":"true","autoplay":"true","autoplay_speed":"2500","arrows":"true","dots":"true","fade":"false"};
</script>

<!-- Scroll Reveal Logic -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px"
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                // Optional: stop observing once revealed
                // observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.reveal-effect').forEach(el => {
        observer.observe(el);
    });
});
</script>
</body>
</html>
