<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入成功</title>
</head>
<body>
    <?php
session_start();
    ?>
    歡迎<?=$_SESSION['login'];?>

    <p>
        <a href="login.php">回登入頁</a>
        <br>
        <a href="logout.php">登出</a>
    </p>
</body>
</html>