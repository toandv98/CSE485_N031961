<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tìm kiếm</title>
    <link rel="stylesheet" href="./css/hover.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/fixbody.css">
	<link rel="stylesheet" href="./css/jquery.paginate.css">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
	<script src="./js/jquery.paginate.js"></script>
</head>

<body>
    <div class="container-fullwidth">
        <?php
        session_start();
        include('./php/header.php');
        ?>
        <main class="col-md-11 m-auto">
        <div class="left col-md-8 float-left">
        <ul id="listbaihat" class="p-0" style="list-style:none;">
        <?php
            
            $keyword = $_POST['keyword'];
            include('./php/connect.php');
            $result = mysqli_query($con, "SELECT * FROM v_baihat WHERE tenbaihat like '%$keyword%'");
            if(mysqli_num_rows($result)==0)
            {
                echo '<div class="text-md-center mt-5"><h3>Không tìm thấy</h3></div>';
            }
            else
            {
                $number = mysqli_num_rows($result);
                echo '<div class="text-md-center mt-5"><h3>Tìm được '.$number.' bài hát </h3></div>';
                while($row = mysqli_fetch_assoc($result)){
                    $tenbaihat = $row['tenbaihat'];
                    $casi = $row['tencasi'];
                    $luotnghe = $row['luotnghe'];
                    $image=$row['image'];
                    echo '<li><a href="playnhac.php?id='.$row['id'].'" class="list-group-item list-group-item-action flex-column align-items-start mb-2">
                        <span>
                            <img class="float-md-left mr-2" src='.$image.' width="50px">
                        </span>
                        <div class="item_title font-weight-bold">'.$tenbaihat.'</div>
                        <div class="box_items">
                            <span class="item_span mr-5">
                                <img src="./image/views.png" width="18px">
                                <span style="font-size:13px;">'.$luotnghe.'</span>
                            </span>
                            
                            <span>
                                <span style="font-size:13px;">'.$casi.'</span>
                            </span>
                        </div>
                    </a></li>';
                }
                mysqli_close($con);
            }
                 
        ?></ul>
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
    <script>
        $('#listbaihat').paginate({
			  perPage:10 
		});
    </script>
</body>

</html>