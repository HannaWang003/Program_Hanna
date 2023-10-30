<div class="container">
<?php
session_start();
if(isset($_SESSION['error'])){
    echo "<div style='color:red'>".$_SESSION['error']."</div>";
    unset($_SESSION['error']);
}
if(isset($_SESSION['login']) && !empty($_SESSION['login'])){
    ?>
    <h3>這是首頁，歡迎您</h3>
    <a href="member.php">回會員中心</a>
    <a href="logout.php">登出</a>
<?php
}
else{
?>
    <form action="check.php" method="post">
        <div class="box">
            <laber for="acc">帳號</laber>
            <input type="text" name="acc" id="acc">
        </div>
        <div class="box">
            <laber for="pwd">密碼</laber>
            <input type="password" name="pwd" id="pwd">
        </div>
        <div class="box">
            <input type="submit" value="確認">
            <input type="reset" value="重新輸入">
        </div>
    </form>
</div>
<?php
};
?>