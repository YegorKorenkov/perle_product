<?php

/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
 * example to see how to use XOAUTH2.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

$customer_name = $_POST['name'];
$customer_surname = $_POST['surname'];
$customer_address = $_POST['address'];
$phone = $_POST['phone'];
$product_name = $_POST['product_name'];

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_SERVER;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption mechanism to use - STARTTLS or SMTPS
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

$mail->setLanguage('ru');

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'perle.product@gmail.com';

//Password to use for SMTP authentication
$mail->Password = 'perle2002';

//Set who the message is to be sent from
$mail->setFrom('perle.product@gmail.com', 'Perle Product');

//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress('eg.korenkov00@gmail.com', 'Client');

//Set the subject line
$mail->Subject = 'Perle Product'. rand(1, 10000);


$mail->isHTML(true);

$mail->Body = "
    <p>Имя покупателя: $customer_name</p>
    <p>Фамилия покупателя: $customer_surname</p>
    <p>Мобильный телефон: $phone</p>
";
if (!empty($customer_address)) {
    $mail->Body .= "<p>Адрес: $customer_address</p>";
}
$mail->Body .= "<span>Товар: $product_name</span>";

header('Location: http://'.$_SERVER['SERVER_NAME']);
$mail->send();

?>
