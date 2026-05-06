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
    
    if (empty($name) || empty($phone) || empty($email) || empty($date)) {
        $appt_status_message = "Please fill in all required fields.";
        $appt_status_type = "error";
    } else {
        $to = "autoshine88@gmail.com";
        $subject = "New Appointment Request from $name";
        $body = "Name: $name\nPhone: $phone\nEmail: $email\nVehicle: $car ($year)\nRequested Date: $date\nTime: $time";
        $headers = "From: webmaster@autoshine.lk\r\n" . "Reply-To: $email";

        if (mail($to, $subject, $body, $headers)) {
            $appt_status_message = "Appointment request sent successfully!";
            $appt_status_type = "success";
        } else {
            $appt_status_message = "Failed to send request. Please call us directly.";
            $appt_status_type = "error";
        }
    }
}
?>
