<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>網頁傳遞</title>
</head>

<body>
    <h2>GET</h2>
    <form action="?">
        <div>
            <label for="acc">帳號</label>
            <input type="text" name="acc" id="acc">
        </div>
        <div>
            <label for="pwd">密碼</label>
            <input type="password" name="pwd" id="pwd">
        </div>
        <input type="submit" value="送出">
        <input type="reset" value="重置">
    </form>
    <hr>
    <h2>POST</h2>
    <form action="?" method="post">
        <div>
            <label for="acc">帳號</label>
            <input type="text" name="acc" id="acc">
        </div>
        <div>
            <label for="pwd">密碼</label>
            <input type="password" name="pwd" id="pwd">
        </div>
        <input type="submit" value="送出">
        <input type="reset" value="重置">
    </form>
    <hr>
    <h3>練習</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="acc">帳號</label>
        <input type="text" name="帳號" id="acc"><br>
        <label for="pwd">密碼</label>
        <input type="password" name="密碼" id="pwd"><br><br>
        <label for="">檔案上傳</label>
        <input type="file" name="img" id="img"><br><br>
        <input type="submit" value="提交">
        <input type="reset" value="重置">
    </form>
</body>

</html>