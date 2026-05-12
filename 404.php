<?php 
$page_title = "404 - Page Not Found";
$body_class = "error404 elementor-page";
require_once 'includes/header.php'; 
?>
<?php require_once 'includes/navbar.php'; ?>

<div class="content-area" id="pageContent">
    <div class="block" style="background: url('assets/images/header-photo-bg.jpg') no-repeat center center; background-size: cover; position: relative; min-height: 80vh; display: flex; align-items: center;">
        <!-- Overlay for readability -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7);"></div>
        
        <div class="container" style="position: relative; z-index: 2; text-align: center;">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <!-- Glassmorphism Card -->
                    <div style="background: rgba(0, 0, 0, 0.45); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.1); padding: 60px 40px; border-radius: 20px; box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);">
                        
                        <h1 style="font-size: 150px; font-weight: 900; color: #fede00; margin: 0; line-height: 1; text-shadow: 0 10px 20px rgba(0,0,0,0.5);">404</h1>
                        
                        <h2 style="font-size: 32px; font-weight: 800; color: #fff; text-transform: uppercase; margin: 20px 0 15px; letter-spacing: 1px;">Lost in the Workshop?</h2>
                        
                        <div style="font-size: 18px; line-height: 1.6; color: #ccc; margin-bottom: 40px; max-width: 500px; margin-left: auto; margin-right: auto;">
                            We can't find the page you're looking for. It might have been moved, deleted, or never existed in the first place.
                        </div>
                        
                        <div class="error-actions" style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                            <a href="index.php" class="appointment-btn" style="padding: 15px 35px; font-size: 16px;">
                                <i class="icon icon-home"></i> <span>Return Home</span>
                            </a>
                            <a href="contact-us.php" class="btn-border btn-wide" style="border-radius: 50px; padding: 12px 30px; border: 1px solid #fede00; color: #fede00;">
                                <span>Contact Support</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>

