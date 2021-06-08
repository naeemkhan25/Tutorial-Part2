<?php
$js="{\"desh\":\"বাংলাদেশ\"}";
$decode=json_decode($js,true);
print_r($decode);
//echo json_last_error_msg();
//this is importent.