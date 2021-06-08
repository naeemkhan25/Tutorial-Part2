<?php
$ch=curl_init();
//$ch=curl_init('http://localhost/Mail/curl/hello.php');
//same work;
curl_setopt($ch,CURLOPT_URL,'http://localhost/Mail/curl/hello.php');
curl_setopt($ch,CURLOPT_CUSTOMREQUEST,'POST');
curl_setopt($ch,CURLOPT_POSTFIELDS,'secret=transfer');
//emni te curl 1&o return kore judi CURLOPT_RETURNTRANSFER use kori tahole se full data return Korbe.
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

$data=curl_exec($ch);
echo strlen($data);