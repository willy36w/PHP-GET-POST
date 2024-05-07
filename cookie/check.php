<?php
date_default_timezone_set("Asia/Taipei");
// $acc=$_POST['acc'];
// $pw=$_POST['pw'];

if($_POST['acc']=='willy' && $_POST['pw']=='123456' ){
//如果正確
    setcookie('login','willy',time()+60);
    header('location:result.php');
}else{
//如果有一不正確
    setcookie('error','帳號或密碼錯誤',time()+60);
    header("location:login.php");
}


?>