<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nhạc Online</title>
    <link rel="stylesheet" href="./css/phantrang.css">
    <link rel="stylesheet" href="./css/hover.css">
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

        <main class="col-md-11 m-auto">

            <div class="left col-md-8 float-left">
                <div class="text-md-left mt-5">
                    <h2>Bài hát</h2>
                </div>
                <div class="list-group">
                <?php
                    require('./php/connect.php');
                    if(isset($_GET['begin']))
                    {
                        $position = $_GET['begin'];
                    }
                    else
                    {
                        $position = 0;
                    }
                    $display = 6;
                    $sql = "SELECT * FROM v_baihat limit $position,$display" ;
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
            <div class="right col-md-4 float-right">
            <?php include('./php/menuright.php');?>
            </div>
            <div style="clear: both"></div>
        </main>
        <div class="pagination">

            <?php
                require('./php/connect.php');
                $result = mysqli_query($con,"SELECT tenbaihat From baihat ");
                $data = mysqli_num_rows($result);
                $sum_page = ceil($data/$display);
                if($sum_page>1)
                {
                    echo '<ul style="list-style:none;display:inline-flex;">';
                        $current = ($position/$display) + 1;
                        if($current!=1)
                        {   
                            $prev = $position - $display;
                            echo "<li><a href='baihat.php?begin=$prev' class='page'>Prev</a></li>";
                        }

                        for($page=1;$page<=$sum_page;$page++)    
                        {
                            
                            $begin = ($page-1)*$display;
                            if($current == $page)
                            {
                                echo "<li><a href='baihat.php?begin=$begin' style='background:#00B2BF;color:#f4f4f4; '  class='page'>$page</a></li>";
                            }
                            else
                            {
                                echo "<li><a href='baihat.php?begin=$begin' class='page'>$page</a></li>";
                            }
                        }
                        if($current != $sum_page)
                        {
                            $next = $position + $display;
                            echo "<li><a href='baihat.php?begin=$next' class='page'>Next</a></li>";
                        }
                        if($current = $sum_page)
                        {
                            $last = (($display*$sum_page) - $display);
                            echo "<li><a href='baihat.php?begin=$last' class='page'>Last </a></li>";
                        }
                    echo '</ul>';
                }
                mysqli_close($con);
            ?>
            </div>
        <?php
        include('./php/footer.php');
        ?>
    </div>
</body>

</html>
