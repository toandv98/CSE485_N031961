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
<link rel="stylesheet" href="./css/header.css">

<body>
<div class="container-fullwidth">
        <?php
        session_start();
        include('./php/header.php');
        ?>
        <main class="col-md-11 m-auto">

        <div class="left col-md-8 float-left">
        <div class="text-md-left mt-5">
        <h2 style = "margin-left:-12px;">Bảng Xếp Hạng</h2>

            <div class="col-md-3 mb-3" style="margin-left:-29px;">
                                <select class="custom-select mr-3 mt-3" id="comment"onchange="window.location.href=this.value;">
                                    <option value="" selected></option>
                                    <option value="bangxephangbaihat.php">Bài Hát</option>
                                    <option value="bangxephangalbum.php">Album</option>
                                    <option value="bangxephangchude.php">Chủ Đề</option>
                             </select>
                             <p id="demo"></p>
                        </div>
                        
            <div class="row">
                <?php
                    require('./php/connect.php');
                    $sql = "SELECT * FROM v_baihat ORDER BY luotnghe DESC";
                    $result = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_assoc($result)){
                        $tenbaihat = $row['tenbaihat'];
                        $anh = $row['image'];
                        $casi = $row['tencasi'];
                        $luotnghe = $row['luotnghe'];
                    
                    echo '<a href="./playnhac.php?id='.$row['id'].'" class="list-group-item list-group-item-action flex-column align-items-start mb-2">
                            <span>
                                <img class="float-md-left mr-2" src="./'.$anh.'" width="50px">
                            </span>
                            <div class="item_title">'.$tenbaihat.'</div>
                            <div class="box_items">
                                <span class="item_span mr-5">
                                    <img src="./image/views.png" width="18px">
                                    <span style="font-size:12px;">'.$luotnghe.'</span>
                                </span>
                                <span>
                                    <span style="font-size:12px;">'.$casi.'</span>
                                </span>
                            </div>
                        </a>';
                    }
                    mysqli_close($con);
            ?>
    </div>
</div>
           
</div>
<div class="right col-md-4 float-right">
    <?php include('./php/menuright.php');?>
</div>
<div style="clear: both"></div>
</main>
        </body>

        <?php
        include('./php/footer.php');
?>
