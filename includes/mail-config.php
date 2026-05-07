<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php';

// Creates and configures a PHPMailer instance
function getPHPMailerInstance() {
    $mail = new PHPMailer(true);

    // Server settings
    $mail->isSMTP();
    $mail->Host       = $_ENV['SMTP_HOST'] ?? 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = $_ENV['SMTP_USER'] ?? '';
    $mail->Password   = $_ENV['SMTP_PASS'] ?? '';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = $_ENV['SMTP_PORT'] ?? 587;

    // Default sender
    $mail->setFrom(
        $_ENV['SMTP_FROM_EMAIL'] ?? 'gallagevishwa@gmail.com', 
        $_ENV['SMTP_FROM_NAME'] ?? 'Autoshine Website'
    );
    
    return $mail;
}

// Wraps content in a professional HTML email template
function getEmailTemplate($title, $content) {
    return '
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            body { font-family: sans-serif; line-height: 1.6; color: #333; margin: 0; padding: 0; }
            .container { width: 100%; max-width: 600px; margin: 0 auto; border: 1px solid #eee; }
            .header { background: #2d2d2d; color: #ffc513; padding: 20px; text-align: center; }
            .content { padding: 30px; background: #fff; }
            .footer { background: #f8f8f8; color: #888; padding: 15px; text-align: center; font-size: 12px; }
            .detail-row { margin-bottom: 10px; border-bottom: 1px solid #f0f0f0; padding-bottom: 5px; }
            .label { font-weight: bold; color: #555; width: 120px; display: inline-block; }
            .btn { background: #ffc513; color: #2d2d2d; padding: 10px 20px; text-decoration: none; border-radius: 4px; font-weight: bold; display: inline-block; margin-top: 20px; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <img src="cid:logo_img" alt="Autoshine Logo" style="max-width: 200px;">
                <p style="margin:5px 0 0; font-size: 14px;">Quality Auto Service & Maintenance</p>
            </div>
            <div class="content">
                <h2 style="color: #2d2d2d; margin-top: 0;">' . $title . '</h2>
                ' . $content . '
            </div>
            <div class="footer">
                &copy; ' . date('Y') . ' Autoshine Pvt Ltd. All rights reserved.<br>
                174/1, Old Kesbewa Road, Delkanda, Nugegoda
            </div>
        </div>
    </body>
    </html>';
}

