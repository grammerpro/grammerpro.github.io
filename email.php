<?php
$subject = $_POST['subject'] . ' AagileCues Contact Form';
$to = 'interior@aagilecues.com'; //Recipient's E-mail

$headers = 'MIME-Version: 1.0' . "rn";
$headers .= "From: " . $_POST['email'] . "rn"; // Sender's E-mail
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "rn";

$message .= 'Name: ' . $_POST['name'] . "\n";
$message .= 'Email: ' . $_POST['email'] . "\n";
$message .= 'Phone: ' . $_POST['phone'] . "\n";
$message .= 'Message: ' . $_POST['message'];

if (@mail($to, $subject, $message, $headers))
{
    // Transfer the value 'sent' to ajax function for showing success message.
    echo 'sent';
}
else
{
    // Transfer the value 'failed' to ajax function for showing error message.
    echo 'failed';
}
?>