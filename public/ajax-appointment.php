<?php
/**
 * AJAX Appointment Handler
 */
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $phone   = filter_input(INPUT_POST, 'your-phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email   = filter_input(INPUT_POST, 'your-email', FILTER_SANITIZE_EMAIL);
    $car     = filter_input(INPUT_POST, 'car-model', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $year    = filter_input(INPUT_POST, 'car-year', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $date    = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $time    = filter_input(INPUT_POST, 'time', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $honeypot = $_POST['website_hp'];
    
    if (!empty($honeypot)) {
        echo json_encode(['status' => 'error', 'message' => 'Spam detected.']);
        exit;
    }

    if (empty($name) || empty($phone) || empty($email) || empty($date)) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill in all required fields.']);
        exit;
    }

    require_once __DIR__ . '/../includes/mail-config.php';
    
    try {
        $mail = getPHPMailerInstance();
        
        // Recipients
        $mail->addAddress('geminiuser677@gmail.com');
        $mail->addReplyTo($email, $name);

        // Attachments
        $mail->addEmbeddedImage(__DIR__ . '/assets/images/Auto-Shine-logo.png', 'logo_img');

        // Content
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
        echo json_encode(['status' => 'error', 'message' => 'Failed to send request. Error: ' . $mail->ErrorInfo]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
exit;
