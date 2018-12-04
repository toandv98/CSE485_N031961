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
        include('./php/header.php');
        ?>

        <main class="col-md-11 m-auto">

            <div class="left col-md-8 float-left">
                <div class="text-md-left mt-5">
                    <h2>Bài hát</h2>
                </div>
                <div class="list-group">
                    <?php
                    for ($i=0; $i < 10; $i++) { 
                         echo '<a href="#" class="list-group-item list-group-item-action flex-column align-items-start mb-2">
                            <span>
                                <img class="float-md-left mr-2" src="./image/logo.png" width="50px">
                            </span>
                            <div class="item_title">Tên nhạc</div>
                            <div class="box_items">
                                <span class="item_span mr-5">
                                    <img src="./image/views.png" width="18px">
                                    <span style="font-size:12px;">1.1K</span>
                                </span>
                                <span class="item_span mr-5">
                                    <img src="./image/playtime.png" width="13px">
                                    <span style="font-size:12px;">46:01</span>
                                </span>
                                <span>
                                    <span style="font-size:12px;">Ca sỹ</span>
                                </span>
                            </div>
                        </a>';
                    }
                ?>
                </div>
            </div>
            <div class="right col-md-4 float-right">
                <div class="text-md-left mt-5">
                    <h2>Nghe nhiều</h2>
                </div>
                <div class="list-group">
                    <?php
                        for ($i=0; $i < 10; $i++) {
                            $cl='';
                            switch ($i) {
                                case 0:
                                    $cl='danger';
                                    break;
                                case 1:
                                    $cl='success';
                                    break;
                                case 2:
                                    $cl='primary';
                                    break;
                                default:
                                    $cl='warning';
                                    break;
                            } 
                            echo '<a href="#" class="list-group-item list-group-item-action flex-column align-items-start mb-2 p-2">
                                <div class="item_title"><span class="badge badge-pill badge-'.$cl.'">'.($i+1).'</span><span class="ml-3">Tên nhạc</span></div>
                            </a>';
                        }
                    ?>
                </div>
            </div>
            <div style="clear: both"></div>
        </main>
        <?php
        include('./php/footer.php');
        ?>

    </div>
</body>

</html>