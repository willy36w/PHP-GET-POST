<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>帳號密碼登入</title>

</head>
<body>
<?php
session_start();
if(isset($_SESSION['login']) && ($_SESSION['login']) == 'willy'){
    echo "登入成功";
    echo "<br>";
    echo "<a href='logout.php'>登出</a>";
    
} else{

    if(isset($_SESSION['error'])){
        echo "<span style='color:red'>{$_SESSION['error']}</span>";
    }
}


?>
    <form action="check.php" method="post">
    <div>
    <label for="acc">帳號:</label>
    <input type="text" name="acc" id="acc">
    </div>

    <div>
    <label for="pw">密碼:</label>
    <input type="password" name="pw" id="pw">
    </div>

    <div>
        <input type="submit" value="登入">
        <input type="reset" value="重置">
    </div>
</form>
</body>
</html>