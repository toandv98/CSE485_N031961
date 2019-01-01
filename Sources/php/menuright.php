<div class="text-md-left mt-5">
    <h3>Nghe nhiều</h3>
</div><hr>
<div class="list-group">
    <?php
        require('./php/connect.php');
        $sql = "SELECT * FROM v_baihat ORDER BY luotnghe DESC";
        $result = mysqli_query($con,$sql);
        $i=1;
        while(($row = mysqli_fetch_assoc($result)) && ($i<=10)){
            $tenbaihat = $row['tenbaihat'];
            $luotnghe = $row['luotnghe'];
            $cl='';
        switch ($i) {
            case 1:
                $cl='danger';
                break;
            case 2:
                $cl='success';
                break;
            case 3:
                $cl='primary';
                break;
            default:
                $cl='warning';
                break;
        }
        echo '<a href="./playnhac.php?id='.$row['id'].'" class="list-group-item list-group-item-action flex-column align-items-start mb-2 p-2">
            <div class="item_title"><span class="badge badge-pill badge-'.$cl.'">'.$i.'</span><span class="ml-3">'.$tenbaihat.'</span>
            <span class="item_span float-right">
            <img src="./image/views.png" width="18px">
            <span style="font-size:12px;">'.$luotnghe.'</span>
            </span></div>
            </a>';
        $i++;
        }
        mysqli_close($con);
    ?>
</div>
