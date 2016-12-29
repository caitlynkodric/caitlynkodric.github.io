<?php

if($_POST["submit"]) {
    $recipient="c.kodric@gmail.com";
    $sunject="Contact Form";

    $senderSubject=$_POST["senderSubject"];
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $senderMessage=$_POST["senderMessage"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$senderSubject\n\n$senderMessage";

    mail($recipient, $subject, $mailBody);

    echo "Thank You! Your message has been sent.";
}
?>