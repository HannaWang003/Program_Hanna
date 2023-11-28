<h1>哈哈購物商城</h1>
<header class="nav">
    <div class="nav-item col-4"></div>
    <div class="nav-item col-4">
        <ul class="d-flex justify-content-evenly">
            <li>one</li>
            <li>two</li>
            <li>three</li>
        </ul>
    </div>
    <div class="nav-item col-4">
        <?php
        if (isset($_SESSION['user'])) {
            echo "welcome! " . $_SESSION['user'];
        ?>
        <a href="member.php" class="btn btn-primary mx-2">會員中心</a>
        <a href="./api/logout.php" class="btn btn-success mx-2">登出</a>
        <?php
        } else {
        ?>

        <a href="reg.php" class="btn btn-primary mx-2">註冊</a>
        <a href="login_form.php" class="btn btn-success mx-2">登入</a>
        <?php
        }
        ?>
    </div>
</header>