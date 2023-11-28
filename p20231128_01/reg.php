<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員註冊</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>
<style>
footer {
    position: absolute;
    bottom: 0px;
    width: 100%;
}
</style>

<body>
    <div class="container-fluid m-auto min-vh-100 relative">
        <?php include('./inc/header.php'); ?>
        <div class="row">
            <h2 class="text-center col-12">會員註冊</h2>
            <div class="col-12 row">
                <form action="./api/add_user.php" method="post">
                    <div class="container row w-25 m-auto input-group my-2">
                        <label class="col-3 input-group-text" for="acc">帳號</label>
                        <input class="col-3 form-control" type="text" name="acc" id="">
                    </div>
                    <div class="container row w-25 m-auto input-group my-2">
                        <label class="col-3 input-group-text" for="pwd">密碼</label>
                        <input class="col-3 form-control" type="password" name="pwd" id="">
                    </div>
                    <div class="container row w-25 m-auto input-group my-2">
                        <label class="col-3 input-group-text" for="name">姓名</label>
                        <input class="col-3 form-control" type="text" name="name" id="">
                    </div>
                    <div class="container row w-25 m-auto input-group my-2">
                        <label class="col-3 input-group-text" for="tel">電話</label>
                        <input class="col-3 form-control" type="text" name="tel" id="">
                    </div>
                    <div class="container row m-auto justify-content-center w-50">
                        <input class="col-5 mx-3 btn btn-primary" type="submit" value="完成">
                        <input class="col-5 mx-3 btn btn-light" type="reset" value="重置">
                    </div>
                </form>
            </div>
        </div>
        <?php include('./inc/footer.php'); ?>
    </div>

</body>

</html>