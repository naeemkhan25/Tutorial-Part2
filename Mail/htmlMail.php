<?php
$to_email = "mdtouhid79361@gmail.com";
$subject = "Simple Email Test via Php html-Format";
$body = "<strong>Hi</strong>,<br/>আপনি কেমন আছেন</br>";
$body.="<img src='https://images.pexels.com/photos/414102/pexels-photo-414102.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500' height='300px' width=450px'/>";
$form="Naeem khan<naeemkhan.cse@gmail.com>";
$headers = "MIME-Version:1.0\r\n";
$headers .= "Content-Type:text/html;charset:UTF-8\r\n";
$headers .= "From:{$form}\r\n";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}