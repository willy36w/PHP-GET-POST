<?php
session_start();
$acc=$_POST['acc'];
$pw=$_POST['pw'];

if($acc=='willy'  && $pw=='123456' ){
//如果正確
    $_SESSION['login']=$acc;
    header('location:result.php');
}else{
//如果有一不正確
    $_SESSION['error']='帳號或密碼錯誤';
    header("location:login.php");
}


?>