<?php
if(isset($_GET['submit'])) 
{
    $recipient="tuckerferguson208@gmail.com";
    $subject = "message from mysite";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailbody, 
    "From: $sender <$senderEmail>");

    $thankYou="<p>Thank You! Your message has been sent.</p>";
}
?>