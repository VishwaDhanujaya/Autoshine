<?php
// AJAX Form Handler

// Basic security check
// In a real application, you'd use nonces here
// $security = isset($_POST['security']) ? $_POST['security'] : '';

$action = isset($_POST['action']) ? $_POST['action'] : '';

switch ($action) {
    case 'coupon_popup_ajax':
        handle_coupon_popup();
        break;
    
    case 'gallery_more_post_ajax':
        handle_gallery_more();
        break;
    
    case 'testimonial_more_post_ajax':
        handle_testimonial_more();
        break;

    default:
        // Action not found
        break;
}

function handle_coupon_popup() {
    $post_id = isset($_POST['post_id']) ? intval($_POST['post_id']) : 0;
    // Return a sample coupon modal content
    ?>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Special Offer</h4>
                </div>
                <div id="modal-coupon" class="modal-body">
                    <div class="coupon-print">
                        <div class="coupon-print-inside">
                            <div class="coupon-print-row-top">
                                <div class="coupon-print-col-left">
                                    <h3>Autoshine</h3>
                                    <p>Quality Auto Service</p>
                                </div>
                                <div class="coupon-print-col-right">
                                    <h2 style="color: #fede00;">10% OFF</h2>
                                </div>
                            </div>
                            <div class="coupon-print-row-bot">
                                <p>Valid on all mechanical repairs over LKR 5,000.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" id="btn_save_and_close" class="btn btn-primary">Print Coupon</button>
                </div>
            </div>
        </div>
    </div>
    <?php
    exit;
}

function handle_gallery_more() {
    $paged = isset($_POST['paged']) ? intval($_POST['paged']) : 2;
    // This is a placeholder. In a real app, you'd fetch from a DB.
    // We'll just return some more gallery items if paged is 2.
    if ($paged == 2) {
        ?>
        <div class="gallery-item vehicle-repair">
            <div class="gallery-item-image">
                <img loading="lazy" src="assets/images/service-2-bg.jpg" alt="Gallery Image">
                <a class="hover" href="assets/images/service-2-bg.jpg"><span class="view"></span></a>
            </div>
        </div>
        <div class="gallery-item car-maintenance">
            <div class="gallery-item-image">
                <img loading="lazy" src="assets/images/service-3-bg.jpg" alt="Gallery Image">
                <a class="hover" href="assets/images/service-3-bg.jpg"><span class="view"></span></a>
            </div>
        </div>
        <?php
    }
    exit;
}

function handle_testimonial_more() {
    // Return more testimonials if requested
    ?>
    <div class="col-item">
        <div class="testimonial-card">
            <p>"Great service and very professional staff. Highly recommended for any car repairs."</p>
            <h6>- Kamal Perera</h6>
        </div>
    </div>
    <?php
    exit;
}
