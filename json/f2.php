<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>json javascript</title>
</head>
<body>
<h1>php to javascript</h1>
<input type="button" id="submitData" value="submit"/>

</body>
<script>
    <?php
    $data=array(
        'name FIRST'=>'naeem',
        'email'=>'naeemkhan.cse@gmail.com',
        'phone'=>'429423842'
    );
    ?>
    let data=<?php echo json_encode($data); ?>;
    document.getElementById("submitData").addEventListener("click",function(){
            alert(data.email);
            alert(data["name FIRST"]);
            //json k array er moto kore o use kora jay.
        console.log(data);
    });
</script>
</html>