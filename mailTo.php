<html>
<head>
<title>Sendmail</title>
</head>
<body>

<?php

require_once('includes/phpmailer/class.phpmailer.php');

$mail = new PHPMailer(); // defaults to using php "mail()"
$mail->AddReplyTo("info@onantiquerow.com","First Last");
$mail->SetFrom('info@onantiquerow.com', 'First Last');
$mail->AddReplyTo("info@onantiquerow.com","First Last");
$address = "swamyrocks@gmail.com";
$mail->AddAddress($address, "Hi");
$mail->Subject    = "Client contact";
$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
$body="hai,how r u?";
$mail->Body = $body;
//echo $body;
//$mail->MsgHTML($body);
//$mail->Body = $body;
//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  header("Location: index.php");
  //echo "Message sent!";
}
?>

</body>
</html>
