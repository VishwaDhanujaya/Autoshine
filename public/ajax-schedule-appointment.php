<?php
require_once __DIR__ . '/../includes/security.php';
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // CSRF Protection
    verifyCsrfToken($_POST['csrf_token'] ?? '');

    // Input Sanitization
    $name     = sanitizeInput($_POST['fname'] ?? '');
    $phone    = sanitizeInput($_POST['your-phone'] ?? '');
    $email    = sanitizeInput($_POST['your-email'] ?? '');
    $car      = sanitizeInput($_POST['car-model'] ?? '');
    $year     = sanitizeInput($_POST['car-year'] ?? '');
    $date     = sanitizeInput($_POST['date'] ?? '');
    $time     = sanitizeInput($_POST['time'] ?? '');
    $honeypot = $_POST['website_hp'] ?? '';
    
    // Spam check
    if (!empty($honeypot)) {
        echo json_encode(['status' => 'error', 'message' => 'Spam detected.']);
        exit;
    }

    // Validation
    if (empty($name) || empty($phone) || empty($email) || empty($date)) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill in all required fields.']);
        exit;
    }

    if (!validateEmail($email)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email format.']);
        exit;
    }

    if (!validatePhone($phone)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid phone number format.']);
        exit;
    }

    require_once __DIR__ . '/../includes/mail-config.php';
    
    try {
        $mail = getPHPMailerInstance();
        
        $mail->addAddress($_ENV['RECIPIENT_EMAIL'] ?? 'gallagevishwa@gmail.com');
        $mail->addReplyTo($email, $name);
        $mail->addEmbeddedImage(__DIR__ . '/assets/images/Auto-Shine-logo.png', 'logo_img');

        $mail->isHTML(true);
        $mail->Subject = "New Appointment Request: $name";
        
        $htmlContent = '
        <div class="detail-row"><span class="label">Customer:</span> ' . $name . '</div>
        <div class="detail-row"><span class="label">Phone:</span> ' . $phone . '</div>
        <div class="detail-row"><span class="label">Email:</span> ' . $email . '</div>
        <div class="detail-row"><span class="label">Vehicle:</span> ' . $car . ' (' . $year . ')</div>
        <div class="detail-row"><span class="label">Date:</span> ' . $date . '</div>
        <div class="detail-row"><span class="label">Time:</span> ' . $time . '</div>
        <br>
        <p>A new service appointment has been requested through the website. Please contact the customer to confirm.</p>';
        
        $mail->Body = getEmailTemplate('New Appointment Request', $htmlContent);
        $mail->AltBody = "Name: $name\nPhone: $phone\nEmail: $email\nVehicle: $car ($year)\nRequested Date: $date\nTime: $time";

        $mail->send();
        echo json_encode(['status' => 'success', 'message' => 'Appointment request sent successfully!']);
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => 'Oops! Something went wrong.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
exit;
