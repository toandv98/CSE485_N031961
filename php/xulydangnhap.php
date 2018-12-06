<?php
    session_start();
    include('./connect.php');
    $userName = $_POST['txtlogin'] ;
    $passWord = $_POST['txtpasswordlogin'];
    $result = mysqli_query($con,"Select*from nguoidung where userName = '$userName' and passWord = '$passWord'");
    if(mysqli_num_rows($result)==1)
    {
        $_SESSION['userName']=$userName;

        header("location:../index.php");
        exit();

    }
    else
    {
        echo "Sai Ten Dang Nhap Hoac Mat Khau";
    }
    mysqli_close($con);



?>
