<?php

if($_POST["submit"]) {
    $recipient="c.kodric@gmail.com";
    $subject=$_POST["senderSubject"];
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["senderMessage"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$subject\n\n$message";

    mail($recipient, "sent: $subject", $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}