<?php
    session_start();
    include('./connect.php');
    $userName = $_POST['txtlogin'] ;
    $passWord = $_POST['txtpasswordlogin'];
    $result = mysqli_query($con,"Select*from nguoidung where userName = '$userName' and passWord = '$passWord'");
    if(mysqli_num_rows($result)==1)
    {
        $_SESSION['userName']=$userName;
        
        header("location:http://localhost:2015/BTL1/");
        exit();

    }
    else
    {
        echo "Sai Ten Dang Nhap Hoac Mat Khau";
    }
    mysqli_close($con);



?>    