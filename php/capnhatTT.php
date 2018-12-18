<?php
    session_start();
    include('./connect.php');
    $userName = $_SESSION['userName'];
    $hoten   = addslashes($_POST['txtHoTen']);
    $gioiTinh   = addslashes($_POST['slGioiTinh']);
    $ngaysinh   = addslashes($_POST['txtNgaySinh']);
    $email      = addslashes($_POST['txtEmail']);
    $password = addslashes($_POST['txtPassWord']);
    $sdt = addslashes($_POST['txtSDT']);
    $diachi = addslashes($_POST['txtDiaChi']);

    $result = mysqli_query($con,"Select * from nguoidung where userName = '$userName'");

      $row = mysqli_fetch_assoc($result);
      $hash = $row["passWord"];
        if(password_verify($password, $hash))
        {
          @$addmember = mysqli_query($con,"UPDATE nguoidung
            SET Name='{$hoten}',
            gioitinh='{$gioiTinh}',
            ngaysinh='{$ngaysinh}',
            sdt='{$sdt}',
            diachi='{$diachi}'
            where userName ='{$userName}'
            ");
            if ($addmember){
              echo 'Cập nhật thành công. <a href="javascript: history.go(-1)">Trở lại...</a> <span id="time"></span>';
              echo '<script src="../js/demnguoc.js" charset="utf-8"></script>';
                exit();
            }
            else{
                echo 'Có lỗi xảy ra trong quá trình cập nhật. <a href="javascript: history.go(-1)">Thử lại...</a> <span id="time"></span>';
                echo '<script src="../js/demnguoc.js" charset="utf-8"></script>';
              }
        }
        else
        {
            echo 'Sai Mật khẩu. Vui lòng thử lại. <a href="javascript: history.go(-1)">Trở lại...</a><span id="time"></span>';
            echo '<script src="../js/demnguoc.js" charset="utf-8"></script>';
            exit;
        }
    mysqli_close($con);
?>
