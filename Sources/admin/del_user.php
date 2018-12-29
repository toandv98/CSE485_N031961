<?php
    $id = $_GET["id"];
    //moconnect
    include('../php/connect.php');

    //truyvan
    mysqli_query($con,"Delete from user where id = '$id'");
    echo "Xoá thành công";
    header('location:user.php');



    mysqli_close($con);
?>