<?php
    session_start();
    include('./connect.php');
    $userName = $_POST['txtlogin'] ;
    $passWord = $_POST['txtpasswordlogin'];
    $result = mysqli_query($con,"Select*from user where userName = '$userName' and passWord = '$passWord'");
    if(mysqli_num_rows($result)==1)
    {
        $data = mysqli_fetch_assoc($result);
        $_SESSION['level'] = $data['level'];
        if($_SESSION['level']==2)
        {
            header("location:http://localhost:2015/Congngheweb/admin/admin.php");
            exit();
        }
        else{
        // lấy tên từ form nhập
        $_SESSION['userName']=$userName;
        //chuyển sang trang chủ
        header("location:http://localhost:2015/CongngheWeb/");
        exit();

    }
}
    else
    {
        echo "Sai Ten Dang Nhap Hoac Mat Khau";
    }
    mysqli_close($con);



?>    