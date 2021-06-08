<?php
session_start();
//if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
//    $url = "http://";
//    }else{
//         $url = "http://";
//
//    $url.= $_SERVER['HTTP_HOST'];
//
//    // Append the requested resource location to the URL
//    $url.= $_SERVER['REQUEST_URI'];
//    if('http://localhost/curl/form.php'==$url){
//
//    }
//    }
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['logdin']);
    header("location:http://localhost/curl/form.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo "this is curl login form hundeling";?></title>
</head>
<body>
<?php
if(isset($_POST["submit"])&&$_POST['submit']!=' '){
    $user_name=$_POST['UserName'];
    $pass=$_POST['password'];
    if('naeem'==$user_name && "khan"==$pass){
        $_SESSION['logdin']=1;
        echo "successfully";
    }

}
if(!isset($_SESSION['logdin'])){
?>
<form method="post" action="">
    <label for="UserName">User Name:</label>
    <input type="text" name="UserName" id="UserName">
    <br/>
    <label for="password">Enter your Password</label>
    <input type="password" name="password" id="password">
    <br/>
    <button type="submit" name="submit">Submit</button>
</form>

<?php
}else{
    echo "you are logdin user";
}

?>
</body>
</html>