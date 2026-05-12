<?php
require_once 'includes/security.php';

$body_class = "contacts elementor-page";
$page_title = "Contact Us";
$page_description = "Get in touch with Autoshine for all your automotive questions. Visit our shop in Nugegoda or call us for an appointment.";

// Handle form submission
$status_message = "";
$status_type = ""; // success or error

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['your-name'])) {
    // CSRF Protection
    verifyCsrfToken($_POST['csrf_token'] ?? '');

    // Input Sanitization
    $name     = sanitizeInput($_POST['your-name'] ?? '');
    $email    = sanitizeInput($_POST['your-email'] ?? '');
    $message  = sanitizeInput($_POST['your-message'] ?? '');
    $honeypot = $_POST['website_hp'] ?? '';
    
    if (!empty($honeypot)) {
        $status_message = "Spam detected.";
        $status_type = "error";
    } elseif (empty($name) || empty($email) || empty($message)) {
        $status_message = "Please fill in all fields.";
        $status_type = "error";
    } elseif (!validateEmail($email)) {
        $status_message = "Invalid email format.";
        $status_type = "error";
    } else {
        require_once 'includes/mail-config.php';
        
        try {
            $mail = getPHPMailerInstance();
            
            $mail->addAddress($_ENV['RECIPIENT_EMAIL'] ?? 'gallagevishwa@gmail.com');
            $mail->addReplyTo($email, $name);

            $mail->isHTML(false);
            $mail->Subject = "New Contact Form Inquiry from $name";
            $mail->Body    = "Name: $name\nEmail: $email\n\nMessage:\n$message";

            $mail->send();
            $status_message = "Your message has been sent successfully!";
            $status_type = "success";
        } catch (Exception $e) {
            $status_message = "Upload failed. Please check your file type/size and try again.";
            $status_type = "error";
        }
    }
}

require_once 'includes/header.php';
?>
<?php require_once 'includes/navbar.php'; ?>

<!-- Page Title -->
<div class="page-title-wrapper" id="pageTitle">
    <div class="container">
        <h1>Contact Us</h1>
    </div>
</div>

<div class="content-area" id="pageContent">
<div class="container-fluid no-gutters" id="primary">

<!-- Contact Info + Form -->
<section id="contact-main">
    <div class="section-bg01" style="background-image:url('assets/images/section-bg01.png'); background-position:top right; background-repeat:no-repeat;">
        <div class="block">
            <div class="container no-gutters">
                <div class="row">

                    <!-- Contact details sidebar -->
                    <div class="col-sm-5 col-md-4 col-sm-push-7 col-md-push-8">
                        <div class="info02-wrapper">
                            <div class="info02">
                                <div class="info02__icon"><span class="icon-locate"></span></div>
                                <h6 class="info02__title">Post Address</h6>
                                <address>174/1, Old Kesbewa Road, Delkanda, <br/>Nugegoda</address>
                            </div>
                            <div class="info02">
                                <div class="info02__icon"><span class="icon-phone"></span></div>
                                <h6 class="info02__title">Contact Phone</h6>
                                <address>011-554-8648 / 070-221-1022</address>
                            </div>
                            <div class="info02">
                                <div class="info02__icon"><span class="icon-email"></span></div>
                                <h6 class="info02__title">E-mail Address</h6>
                                <address>autoshine88@gmail.com</address>
                            </div>
                            <div class="info02">
                                <div class="info02__icon"><span class="icon-clock"></span></div>
                                <h6 class="info02__title">Opening Hours</h6>
                                <address>
                                    Mon-Fri: 7:00 AM - 6:00 PM<br/>
                                    Saturday: 9:00 AM - 5:00 PM<br/>
                                    Sunday: Closed
                                </address>
                            </div>
                        </div>
                    </div>

                    <div class="divider-lg hidden-lg hidden-md hidden-sm"></div>

                    <!-- Contact form -->
                    <div class="col-sm-7 col-md-8 col-sm-pull-5 col-md-pull-4">
                        <div class="box-wrapper">
                            <div class="block-title text-left">
                                <h2 class="block-title__title">Get In Touch!</h2>
                                <div class="block-title__description">Get your automotive-related questions answered by a mechanic</div>
                                <div class="title-separator"></div>
                            </div>
                            <?php if ($status_message): ?>
                                <div class="alert <?php echo $status_type == 'success' ? 'alert-success' : 'alert-danger'; ?>" style="padding: 15px; margin-bottom: 20px; border-radius: 5px; background: <?php echo $status_type == 'success' ? '#dff0d8' : '#f2dede'; ?>; color: <?php echo $status_type == 'success' ? '#3c763d' : '#a94442'; ?>; border: 1px solid <?php echo $status_type == 'success' ? '#d6e9c6' : '#ebccd1'; ?>;">
                                    <?php echo $status_message; ?>
                                </div>
                            <?php endif; ?>

                            <form action="contact-us.php" id="contact-form-element" class="contact-form" method="post">
                                <!-- CSRF Token -->
                                <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                                
                                <!-- Honeypot -->
                                <div style="display:none;">
                                    <input type="text" name="website_hp" value="">
                                </div>
                                <div class="contact-form form-default">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-wrapper">
                                                <input class="form-control input-full" maxlength="400" name="your-name" placeholder="Your name" required type="text"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-wrapper">
                                                <input class="form-control input-full" maxlength="400" name="your-email" placeholder="address@youremail.com" required type="email"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-wrapper">
                                        <textarea class="input-full form-control" maxlength="2000" name="your-message" placeholder="Your Question..." required rows="10"></textarea>
                                    </div>
                                    <button class="btn btn-border btn-invert btn-wide" id="submit-contact" type="submit"><span>Contact Us</span></button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

</div><!-- #primary -->
</div><!-- #pageContent -->

<?php require_once 'includes/footer.php'; ?>

