<?php 
$page_title = "404 - Page Not Found";
require_once '../includes/header.php'; 
?>
<?php require_once '../includes/navbar.php'; ?>

<div class="content-area" id="pageContent">
    <div class="container" style="padding: 100px 0; text-align: center;">
        <div class="row">
            <div class="col-md-12">
                <div class="error-template">
                    <h1 style="font-size: 120px; color: #ffc513; margin: 0; line-height: 1;">404</h1>
                    <h2 style="font-size: 36px; text-transform: uppercase; margin: 20px 0;">Oops! Page Not Found</h2>
                    <div class="error-details" style="font-size: 18px; margin-bottom: 40px; color: #666;">
                        Sorry, an error has occurred. The page you are looking for does not exist or has been moved.
                    </div>
                    <div class="error-actions">
                        <a href="index.php" class="btn btn-border btn-wide">
                            <span>Back to Home</span>
                        </a>
                        <a href="contacts.php" class="btn btn-border btn-wide" style="margin-left: 10px;">
                            <span>Contact Support</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once '../includes/footer.php'; ?>
