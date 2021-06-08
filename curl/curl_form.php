<?php
$ch=curl_init("http://localhost/curl/form2.php");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_CUSTOMREQUEST,'POST');
curl_setopt($ch,CURLOPT_POSTFIELDS,"UserName=naeem&password=khan&submit=1");
$cooke_file="temp/cooke.txt";
curl_setopt($ch,CURLOPT_COOKIEJAR,$cooke_file);
echo curl_exec($ch);
//echo $result;

$ch2=curl_init("http://localhost/curl/form2.php");
curl_setopt($ch2,CURLOPT_COOKIEFILE,$cooke_file);
curl_setopt($ch2,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch2);
echo $result;
//
//$ch3=curl_init("http://localhost/curl/form2.php?logout=1");
//curl_setopt($ch3,CURLOPT_COOKIEFILE,$cooke_file);
//curl_setopt($ch3,CURLOPT_RETURNTRANSFER,true);
//$result=curl_exec($ch3);
//echo $result;