<?php
// Contact form handler
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = filter_input(INPUT_POST, 'your-name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email   = filter_input(INPUT_POST, 'your-email', FILTER_SANITIZE_EMAIL);
    $message = filter_input(INPUT_POST, 'your-message', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $honeypot = $_POST['website_hp'];
    
    if (!empty($honeypot)) {
        echo json_encode(['status' => 'error', 'message' => 'Spam detected.']);
        exit;
    }

    if (empty($name) || empty($email) || empty($message)) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill in all fields.']);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email format.']);
        exit;
    }

    require_once __DIR__ . '/../includes/mail-config.php';
    
    try {
        $mail = getPHPMailerInstance();
        
        // Recipients
        $mail->addAddress('gallagevishwa@gmail.com');
        $mail->addReplyTo($email, $name);

        // Attachments
        $mail->addEmbeddedImage(__DIR__ . '/assets/images/Auto-Shine-logo.png', 'logo_img');

        // Content
        $mail->isHTML(true);
        $mail->Subject = "New Website Inquiry: $name";
        
        $htmlContent = '
        <div class="detail-row"><span class="label">From:</span> ' . $name . '</div>
        <div class="detail-row"><span class="label">Email:</span> ' . $email . '</div>
        <br>
        <p><strong>Message:</strong></p>
        <div style="background: #f9f9f9; padding: 15px; border-left: 4px solid #ffc513; font-style: italic;">
            ' . nl2br($message) . '
        </div>';
        
        $mail->Body = getEmailTemplate('New Contact Inquiry', $htmlContent);
        $mail->AltBody = "Name: $name\nEmail: $email\n\nMessage:\n$message";

        $mail->send();
        echo json_encode(['status' => 'success', 'message' => 'Your message has been sent successfully!']);
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => 'Oops! Something went wrong. Error: ' . $mail->ErrorInfo]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
exit;
