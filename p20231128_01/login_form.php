<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
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
    <?php include('./inc/header.php'); ?>
    <?php
    if (isset($_GET['error'])) {
        echo "<h2 class='bg-danger'>" . $_GET['error'] . "</h2>";
    }

    ?>
    <div class="d-flex align-items-center min-vh-100 relative vw-100">
        <div class="container w-50 border border-2 border-info rounded-5 p-5">
            <h3 class=" container row text-center">會員登入</h3>
            <form class="container row " action="./api/login.php" method="post">
                <div class="row w-50 m-auto input-group my-2">
                    <label class="col-3 input-group-text" for="acc">帳號</label>
                    <input class="col-3 form-control" type="text" name="acc" id="">
                </div>
                <div class="row w-50 m-auto input-group my-2">
                    <label class="col-3 input-group-text" for="pwd">密碼</label>
                    <input class="col-3 form-control" type="password" name="pwd" id="">
                </div>
                <div class="row  m-auto justify-content-center my-2">
                    <input class="col-5 mx-1 btn btn-primary" type="submit" value="Login">
                    <input class="col-5 mx-1 btn btn-light" type="reset" value="Reset">
                </div>
            </form>
            <a class="container row my-5 justify-content-end text-decoration-none" href="./reg.php"><button
                    class="col-3 btn btn-success text-light">註冊新會員</button></a>

        </div>
    </div>
    <?php include('./inc/footer.php'); ?>
</body>

</html>