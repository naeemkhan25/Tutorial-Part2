<?php
$to_email = "mdtouhid79361@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$form="naeemkhan.cse@gmail.com";
$headers = "From:{$form}";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}