<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>登入檢查</h1>
<?php
$acc=$_POST['acc'];
$pw=$_POST['pw'];

if($acc=='willy' && $pw=='123456'){
//如果正確 
    header('location:result.php?acc='.$acc);
}else{
// 如果不正確
    header("location:error.php?acc=".$acc);
}

?>
</body>
</html>