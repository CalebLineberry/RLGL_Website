<?php
/* Implemented by Caleb Lineberry by following guides created by Dave Hollingworth and Guide Realm.
Hollingworth's guide: "Send email with PHP | Create a Working Contact Form Using PHP" https://www.youtube.com/watch?v=fIYyemqKR58&t=206s
Guide Realm's guide: "How To Set Up Gmail SMTP Server - Full Guide" https://www.youtube.com/watch?v=ZfEK3WP73eY

All mailing functions created by Caleb Lineberry */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

//$mail->SMTPDebug = SMTP::DEBUG_SERVER;  //Uncomment if errors with mailing

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = 'smtp.gmail.com';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = 'redlight.greenlight.ai@gmail.com';
$mail->Password = '------------------------';

$mail->setFrom('redlight.greenlight.ai@gmail.com','RedLight-GreenLight.AI');

?>