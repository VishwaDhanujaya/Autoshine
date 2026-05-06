<?php
$appt_status_message = "";
$appt_status_type = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['appt-submit'])) {
    $name    = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $phone   = filter_input(INPUT_POST, 'your-phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email   = filter_input(INPUT_POST, 'your-email', FILTER_SANITIZE_EMAIL);
    $car     = filter_input(INPUT_POST, 'car-model', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $year    = filter_input(INPUT_POST, 'car-year', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $date    = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $time    = filter_input(INPUT_POST, 'time', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $honeypot = $_POST['website_hp'];
    
    if (!empty($honeypot)) {
        // Likely a bot
        $appt_status_message = "Spam detected.";
        $appt_status_type = "error";
    } elseif (empty($name) || empty($phone) || empty($email) || empty($date)) {
        $appt_status_message = "Please fill in all required fields.";
        $appt_status_type = "error";
    } else {
        require_once __DIR__ . '/mail-config.php';
        
        try {
            $mail = getPHPMailerInstance();
            
            // Recipients
            $mail->addAddress('geminiuser677@gmail.com');
            $mail->addReplyTo($email, $name);

            // Content
            $mail->isHTML(false);
            $mail->Subject = "New Appointment Request from $name";
            $mail->Body    = "Name: $name\nPhone: $phone\nEmail: $email\nVehicle: $car ($year)\nRequested Date: $date\nTime: $time";

            $mail->send();
            $appt_status_message = "Appointment request sent successfully!";
            $appt_status_type = "success";
        } catch (Exception $e) {
            $appt_status_message = "Failed to send request. Error: {$mail->ErrorInfo}";
            $appt_status_type = "error";
        }
    }
}
?>
