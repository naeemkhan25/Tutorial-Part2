<?php
echo "Welcome to the Beautiful World Curl &Php<br/>";
if(isset($_POST['secret']) && "transfer"==$_POST['secret']){
    echo "this is curl Transfer Data";
}