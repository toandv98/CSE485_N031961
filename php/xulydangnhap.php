<?php
    session_start();
    include('./connect.php');
    $userName = $_POST['txtlogin'] ;
    $passWord = $_POST['txtpasswordlogin'];
    $result = mysqli_query($con,"Select passWord from nguoidung where userName = '$userName'");
    $row = mysqli_fetch_assoc($result);
    $hash = $row["passWord"];
    if(password_verify($passWord, $hash))
    {
        $_SESSION['userName']=$userName;

        header("location:../index.php");
        exit();
    }
    else
    {
        echo 'Sai tên đăng nhập hoặc mật khẩu. Vui lòng thử lại. <a href="javascript: history.go(-1)">Trở lại</a> sau... <span id="time"></span>';
        echo '<script src="../js/demnguoc.js" charset="utf-8"></script>';
        exit;
    }
    mysqli_close($con);

?>
