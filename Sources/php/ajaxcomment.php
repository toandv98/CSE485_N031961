<?php
    session_start();
    if(isset($_SESSION['id'])){
        $idbaihat=$_POST["id"];
        $mess=$_POST["noidung"];
        $iduser=$_SESSION['id'];
        include('./connect.php');
        $up=mysqli_query($con,"INSERT INTO comment(noidung,iduser,idbaihat) VALUES('$mess','$iduser','$idbaihat')"); 	
        if($up){
            echo"<b style='color:lime;'>Bình luận của bạn đã được đăng thành công và chờ kiểm duyệt</b>";
        }else{
            echo"<b style='color:red;'>Có lỗi xảy ra!</b>";
        }
        }else{
            echo"<b style='color:red;'>Bạn phải đăng nhập để thêm bình luận!</b>";
    }
    mysqli_close($con);
?>