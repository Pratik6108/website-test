<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $mobile = $_POST["mobile-no"];
    $email = $_POST["email"];
    $inquiries = implode(", ", $_POST["inquiry"]);

    // Create a PHPMailer instance
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'pm8266@gmail.com';
    $mail->Password = 'ljdv dcht dnut yrgt';
    $mail->SMTPSecure = 'tls'; // Use 'tls' or 'ssl'
    $mail->Port = 587; // Replace with your SMTP server's port

    // Sender and recipient details
    $mail->setFrom($email, $name);
    $mail->addAddress('pm8266@gmail.com'); // Replace with the recipient's email address

    $subject = "Form Submission";
    $message = "Name: $name\nMobile: $mobile\nEmail: $email\nInquiries: $inquiries";

    $mail->Subject = $subject;
    $mail->Body = $message;

    if ($mail->send()) {
        echo "Thank you for your submission!";
    } else {
        echo "Error sending the email: " . $mail->ErrorInfo;
    }
}
?>
