<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
</head>

<body>
    <?php
if($_GET['login']=="success"){
?>
    <h1>登入成功</h1>
    <a href="index.php?login=success">回首頁</a>
    <?php
}
else{
  ?>
    <h1>請重新輸入</h1>
    <?php
    header("location:index.php?login=false");
}
?>


</body>

</html>