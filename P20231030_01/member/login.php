<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?= include_once('header.php')?>
    <div class='login-block'>
        <?php
    // session_start();
    if(isset($_COOKIE['error'])){
        echo "<span style='color:red'>".$_COOKIE['error']."</span>";
    }    
    if(isset($_COOKIE['login']) && !empty($_COOKIE['login'])){
        echo $_COOKIE['login']."歡迎你";
        echo "<a href='logout.php'>登出</a>";
    }else{
?>
        <form action="check.php" method="post">
            <div class='login-input'>
                <label for="acc">帳號:</label>
                <input type="text" name="acc" id="acc">
            </div>
            <div class='login-input'>
                <label for="pw">密碼:</label>
                <input type="password" name="pw" id="pw">
            </div>
            <div class='btn'>
                <input type="submit" value="登入">
                <input type="reset" value="重置">
            </div>
        </form>
        <?php
    }

    ?>

    </div>
</body>

</html>