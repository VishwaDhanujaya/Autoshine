<?php
require_once __DIR__ . '/../includes/security.php';
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // CSRF Protection
    verifyCsrfToken($_POST['csrf_token'] ?? '');

    // Input Sanitization
    $name     = sanitizeInput($_POST['your-name'] ?? '');
    $email    = sanitizeInput($_POST['your-email'] ?? '');
    $message  = sanitizeInput($_POST['your-message'] ?? '');
    $honeypot = $_POST['website_hp'] ?? '';
    
    // Spam check
    if (!empty($honeypot)) {
        echo json_encode(['status' => 'error', 'message' => 'Spam detected.']);
        exit;
    }

    // Basic Validation
    if (empty($name) || empty($email) || empty($message)) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill in all fields.']);
        exit;
    }

    if (!validateEmail($email)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email format.']);
        exit;
    }

    require_once __DIR__ . '/../includes/mail-config.php';
    
    try {
        $mail = getPHPMailerInstance();
        
        $mail->addAddress($_ENV['RECIPIENT_EMAIL'] ?? 'gallagevishwa@gmail.com');
        $mail->addReplyTo($email, $name);
        $mail->addEmbeddedImage(__DIR__ . '/assets/images/Auto-Shine-logo.png', 'logo_img');

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
        echo json_encode(['status' => 'error', 'message' => 'Message could not be sent. Please try again later.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
exit;
