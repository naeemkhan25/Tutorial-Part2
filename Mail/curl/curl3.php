<?php
set_time_limit(0);
$ch=curl_init('https://images.unsplash.com/photo-1591959881799-5ebdb505b8ca');
$file_name=fopen("image1.jpg",'w');
curl_setopt($ch,CURLOPT_FILE,$file_name);
curl_exec($ch);