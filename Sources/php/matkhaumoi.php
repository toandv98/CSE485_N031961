<?php
    include('./connect.php');
    $email = addslashes($_POST['txtEmail']);
    $code=md5(uniqid(rand()));
    function passGen($length,$nums){
        $lowLet = "abcdefghijklmnopqrstuvwxyz";
        $highLet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $numbers = "123456789";
        $pass = "";
        $i = 1;
        While ($i <= $length){
        $type = rand(0,1);
        if ($type == 0){
        if (($length-$i+1) > $nums){
        $type2 = rand(0,1);
        if ($type2 == 0){
        $ran = rand(0,25);
        $pass .= $lowLet[$ran];
        }else{
        $ran = rand(0,25);
        $pass .= $highLet[$ran];
        }
        }else{
        $ran = rand(0,8);
        $pass .= $numbers[$ran];
        $nums--;
        }
        }else{
        if ($nums > 0){
        $ran = rand(0,8);
        $pass .= $numbers[$ran];
        $nums--;
        }else{
        $type2 = rand(0,1);
        if ($type2 == 0){
        $ran = rand(0,25);
        $pass .= $lowLet[$ran];
        }else{
        $ran = rand(0,25);
        $pass .= $highLet[$ran];
        }
        }
        }
        $i++;
        }
        return $pass;
        }

    $password=passGen(6,2);

    if (mysqli_num_rows(mysqli_query($con,"SELECT email FROM nguoidung WHERE email='$email'")) <1)
    {
        echo 'Tài khoản không tồn tại.Vui lòng nhập Email hợp lệ. <a href="javascript: history.go(-1)">Trở lại</a> sau... <span id="time"></span>';
        echo '<script src="../js/demnguoc.js" charset="utf-8"></script>';
        exit;
    }

    function generate_token() {
        return md5(microtime().mt_rand());
    }
    $options = [
        'salt' => generate_token(),
        'cost' => 12
    ];
    $hash = password_hash($password, PASSWORD_DEFAULT, $options);

    @$addmember = mysqli_query($con,"UPDATE nguoidung SET password='{$hash}' where email='{$email}'");

    if ($addmember){

        $to=$email;
        // Chủ Đề
        $subject="Quên mật khẩu";
        // From
        $header="from: NhacOnline <toan98.k10@gmail.com>";
        // Your message
        $message="Mật khẩu mới : $password";
        // Gủi mail
        $sentmail = mail($to,$subject,$message,$header);

        if ($sentmail) {
          echo "Kiểm tra email để lấy mật khẩu mới. <a href='../index.php'>Về trang chủ</a>";
        }else {
          echo 'Có lỗi xảy ra. <a href="javascript: history.go(-1)">Thử lại</a> <span id="time"></span>';
          echo '<script src="../js/demnguoc.js" charset="utf-8"></script>';
        }
    }
    else{
        echo 'Có lỗi xảy ra. <a href="javascript: history.go(-1)">Thử lại</a> <span id="time"></span>';
        echo '<script src="../js/demnguoc.js" charset="utf-8"></script>';
      }
?>
