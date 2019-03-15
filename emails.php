
<?php
$email = $_POST['email'];
$formcontent="From: $email";
$recipient = "platinumgoldrecordsunlimited@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
