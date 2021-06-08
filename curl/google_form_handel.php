<?php

$data=array(
    array(
        'first_name'=>urlencode('আমি কি'),
        'last_name'=>"khan",
        'email'=>"naeemkhan.cse@gmail.com",
        'phone'=>time(),
        'district'=>'rajsahi'

    ),
    array(
        'first_name'=>urlencode('আমি কি'),
        'last_name'=>"khan",
        'email'=>"naeemkhan.cse@gmail.com",
        'phone'=>time(),
        'district'=>'rajsahi'

    ),

    array(
        'first_name'=>urlencode("masud"),
        'last_name'=>"khan",
        'email'=>"naeemkhan.cse@gmail.com",
        'phone'=>time(),
        'district'=>'rajsahi'

    ),
    array(
        'first_name'=>"mostack",
        'last_name'=>"khan",
        'email'=>"naeemkhan.cse@gmail.com",
        'phone'=>time(),
        'district'=>'rajsahi'
    ),
);
foreach ($data as $dt) {
    $ch = curl_init("https://docs.google.com/forms/u/0/d/e/1FAIpQLSf3XiHYcKYxwYD4X51Co0J6jxoRRWJJH5qnF_2bCyuzFz97sA/formResponse");
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, "entry.1331033181={$dt['first_name']}&entry.546637358={$dt['last_name']}&entry.861882554={$dt['email']}&entry.310199622={$dt['phone']}&entry.940369089={$dt['district']}");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);

    if (curl_error($ch)) {
        echo curl_error($ch);
    } else {
        echo $result;
    }
}