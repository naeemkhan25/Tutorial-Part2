<?php
$data=array(
    'name'=>'naeem',
    'email'=>'naeemkhan.cse@gmail.com',
    'phone'=>'429423842'
);
$dt=json_encode($data,JSON_PRETTY_PRINT);
echo $dt;