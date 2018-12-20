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
        <?php
            
            $keyword = $_POST['keyword'];
            include('./php/connect.php');
            $result = mysqli_query($con, "SELECT * FROM baihat WHERE tenbaihat like '%$keyword%'");
            if(mysqli_num_rows($result)==0)
            {
                echo '<div class="text-md-center mt-5"><h2>Không tìm thấy</h2></div>';
            }
            else
            {
                $number = mysqli_num_rows($result);
                echo '<div class="text-md-center mt-5"><h2>Tìm được '.$number.' bài hát </h2></div>';
                while($row = mysqli_fetch_assoc($result)){
                    $tenbaihat = $row['tenbaihat'];
                    $casy = $row['casy'];
                    $luotnghe = $row['luotnghe'];
                    $image=$row['image'];
                    echo '<a href="playnhac.php?id='.$row['id'].'" class="list-group-item list-group-item-action flex-column align-items-start mb-2">
                        <span>
                            <img class="float-md-left mr-2" src='.$image.' width="50px">
                        </span>
                        <div class="item_title">'.$tenbaihat.'</div>
                        <div class="box_items">
                            <span class="item_span mr-5">
                                <img src="./image/views.png" width="18px">
                                <span style="font-size:12px;">'.$luotnghe.'</span>
                            </span>
                            
                            <span>
                                <span style="font-size:12px;">'.$casy.'</span>
                            </span>
                        </div>
                    </a>';
                }
                mysqli_close($con);
            }
            
                    
        ?>
        </div>
        <div class="right col-md-4 float-right">
            <?php include('./php/menuright.php');?>
            </div>
        </main>
        <div style="clear: both"></div>
        <?php
           include('./php/footer.php');
        ?>
    </div>
</body>

</html>