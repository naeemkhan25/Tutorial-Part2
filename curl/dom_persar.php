<?php
//dom instal importent link
//https://github.com/sunra/php-simple-html-dom-parser
require_once ('vendor/autoload.php');
use Sunra\PhpSimple\HtmlDomParser;
$morning="Morning";
$curl_url="https://www.vocabulary.com/dictionary/definition.ajax?search={$morning}";
echo "<h1>Meaning Of Word{$morning}</h1>";
$ch=curl_init($curl_url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$result=curl_exec($ch);
echo $result;
$dom = HtmlDomParser::str_get_html( $result );
$short=$dom->getElementByTagName("p.short");
echo $short;