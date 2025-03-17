<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Create an instance; passing `true` enables exceptions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize input
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $description = $_POST['description'];

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF;  // Disable verbose debug output
        $mail->isSMTP();                     // Send using SMTP
        $mail->Host       = 'smtp.yandex.com'; // Set the SMTP server to send through
        $mail->SMTPAuth   = true;            // Enable SMTP authentication
        $mail->Username   = 'tmr_test@voxtrongroup.com'; // SMTP username
        $mail->Password   = 'Root123$%67'; // SMTP password (App Password if 2FA is enabled)
        $mail->SMTPSecure = 'tls'; // Enable TLS encryption
        $mail->Port       = 587;             // TCP port to connect to

        // Recipients
        $mail->setFrom('tmr_test@voxtrongroup.com', 'Incorp Solutions');
        $mail->addAddress('hello@theincorpsolutions.com', 'Incorp Solutions');

        // Content
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'New Incorp Solutions Query Submission';
        $mail->Body = "<div>
    <div>
        <h2>Incorp Solutions</h2>
    </div>
    <div>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> <a href='mailto:$email'>$email</a></p>
        <p><strong>Phone:</strong> <a href='tel:$phonenumber'>$phonenumber</a></p>
        <p><strong>Description:</strong> $description</p>
    </div>
    <div>
        <p>This email was sent from Incorp Solutions.</p>
    </div>
</div>";

        // Send the email
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            header('Location: https://theincorpsolutions.com/contact-us?submitted=1');
            exit(); // It's a good practice to use exit() after a header redirect to ensure no further code is executed
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
