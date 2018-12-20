<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quên mật khẩu</title>
    <link rel="stylesheet" href="./css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fullwidth">
            <?php
            session_start();
            include('./php/header.php');
            ?>
        <div class="col-md-6 m-auto mb-5">
        <div class="text-center my-5">
            <b>KHÔI PHỤC MẬT KHẨU!</b>
        </div>
        <form class="mb-5" action="./php/matkhaumoi.php" method="POST">
        <div class="form-group">
        <input type="email" class="form-control" name="txtEmail" aria-describedby="emailHelp" placeholder="Nhập email tài khoản">
        </div>
        <button type="submit" class="btn btn-primary">Lấy lại mật khẩu</button>
        </form>
        </div>
    </div>
    <?php
    include('./php/footer.php');
    ?>
</body>
</html>