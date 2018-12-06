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
                    <h2>Bài hát</h2>
                </div>
                <div class="list-group">
                <?php
                    require('./php/connect.php');
                    $sql = "SELECT * FROM baihat";
                    $result = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_assoc($result)){
                        $tenbaihat = $row['tenbaihat'];
                        $casy = $row['casy'];
                        $luotnghe = $row['luotnghe'];
                        echo '<a href="#" class="list-group-item list-group-item-action flex-column align-items-start mb-2">
                            <span>
                                <img class="float-md-left mr-2" src="./image/logo.png" width="50px">
                            </span>
                            <div class="item_title">'.$tenbaihat.'</div>
                            <div class="box_items">
                                <span class="item_span mr-5">
                                    <img src="./image/views.png" width="18px">
                                    <span style="font-size:12px;">'.$luotnghe.'</span>
                                </span>
                                <span class="item_span mr-5">
                                    <img src="./image/playtime.png" width="13px">
                                    <span style="font-size:12px;">04:01</span>
                                </span>
                                <span>
                                    <span style="font-size:12px;">'.$casy.'</span>
                                </span>
                            </div>
                        </a>';
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
