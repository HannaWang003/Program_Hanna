<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <style>
    * {
        box-sizing: border-box;
    }

    .container {
        margin: auto;
        margin-top: 10vh;
        width: 50vw;
        height: 50vh;
        text-align: center;
        padding: 100px;
        border-radius: 10vh;
        filter: drop-shadow(10px 10px 10px black);
        border: 5px solid black;
    }

    input[type='text'],
    input[type='password'] {
        border: 10px solid lightblue;
        height: 5vh;
        width: 20vw;
    }

    input[type='submit'] {
        border-radius: 20px;
        height: 10vh;
        width: 10vw;
        background-color: lightgrey;
        border-radius: 10vw;
        font-size: 20px;
        color: black;
        border: 0;
    }

    input[type='reset'] {
        border-radius: 20px;
        height: 10vh;
        width: 5vw;
        background-color: lightgrey;
        border-radius: 10vw;
        font-size: 20px;
        color: black;
        border: 0;
    }

    span {
        display: inline-block;
    }
    </style>
</head>

<body>
    <?php
if($_GET['login']=="false"){
    echo "<span style='color:red'>帳號或密碼錯誤，請重新輸入</span>";
}
if(!isset($_GET) || $_GET['login']=="false"){
?>
    <div class="container">
        <form action="check.php" method="post">
            <laber for="acc">帳號</laber>
            <input type="text" name="acc" id="acc">
            <br><br>
            <laber for="pwd">密碼</laber>
            <input type="password" name="pwd" id="pwd">
            <hr>
            <input type="submit" value="提交">
            <input type="reset" value="重置">
        </form>
    </div>
    <?php
}
    elseif($_GET['login']=="success"){
        echo "<h1>觀迎你</h1>";
    }
    ?>
</body>

</html>