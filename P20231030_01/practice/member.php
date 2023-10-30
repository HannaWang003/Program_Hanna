<?php
session_start();
if(isset($_SESSION['login']) && !empty($_SESSION['login'])){
    ?>
<h3>登入成功</h3>
<h4>歡迎您進入會員中心</h4>
<a href="login.php">回首頁</a>
<a href="logout.php">登出</a>
<?php
}
else{
    $_SESSION['error']="尚未驗證,請在登入頁面輸入帳密";
header("location:login.php");    
}
?>
