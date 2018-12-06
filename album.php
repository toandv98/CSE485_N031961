<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nhạc Online</title>
    <link rel="stylesheet" href="./css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/hover.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
</head>

<body>
    <div class="container-fullwidth">
        <?php
        session_start();
        include('./php/header.php');
        ?>
        <main class="col-md-11 m-auto">

            <div class="left col-md-8 float-left">
                <div class="text-md-left mt-5">
                    <h2>Album</h2>
                </div>
                <div class="row">
                <?php
                    require('./php/connect.php');
                    $sql = "SELECT * FROM baihat";
                    $result = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_assoc($result)){
                        $tenbaihat = $row['tenbaihat'];
                        echo '<div class="col-lg-3 col-md-4 img-hover">
                                <a href="#" class="d-block mb-4 h-100" style="text-decoration: none;">
                                <div><img class="img-fluid img-thumbnail " src="./image/logo.png" alt=""></div>
                                <div class="mt-2" style="color: black;">'.$tenbaihat.'</div>
                                </a>
                            </div>';
                    }
                    mysqli_close($con);
                    ?>
                </div>
            </div>
            <div class="right col-md-4 float-right">
                <?php include('./php/menuright.php');?>
            </div>
            <div style="clear: both"></div>
        </main>
        <?php
        include('./php/footer.php');
        ?>

    </div>
</body>

</html>
