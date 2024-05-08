<?php
session_start();
$acc=$_POST['acc'];
$pw=$_POST['pw'];

if($acc=='willy' && $pw=='55688'){
    $_SESSION['login']=$acc;
    header('location:result.php');
}else{
    $_SESSION['error']='all wrong';
    header('location:login.php');
}


?>