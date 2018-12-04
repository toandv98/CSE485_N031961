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
                    <h2>Hot</h2>
                </div>
                <div class="row">
                    <?php
            for ($i=0; $i < 9; $i++) {
                echo '<div class="col-lg-3 col-md-4 img-hover">
                        <a href="#" class="d-block mb-4 h-100" style="text-decoration: none;">
                         <div><img class="img-fluid img-thumbnail " src="./image/logo.png" alt=""></div>
                          <div class="mt-2" style="color: black;">Tên bài hát</div>
                        </a>
                      </div>';
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