<?php
$morning="Morning";
$curl_url="https://www.vocabulary.com/dictionary/definition.ajax?search={$morning}";
echo "<h1>Meaning Of Word{$morning}</h1>";
$ch=curl_init($curl_url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$result=curl_exec($ch);
$star_result=strpos($result,'<p class="short">')+17;
$end_point=strpos($result,"</p>",$star_result);
$short=substr($result,$star_result,($end_point-$star_result));
$star_log=strpos($result,'<p class="long">')+16;
$str_end=strpos($result,'</p>',$star_log);
$long=substr($result,$star_log,($str_end-$star_log));
echo "<strong>Short Description:{$morning}</strong>"."<br/>";
echo $short."<br/><br/>";
echo "<strong>Long Description:{$morning}</strong>"."<br/>";
echo $long;