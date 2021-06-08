<?php
$ch=curl_init("https://wppool.dev/");
//curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);

$result=curl_exec($ch);
$error=curl_error($ch);
if($error){
    echo $error;
}