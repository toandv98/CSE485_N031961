<?php 
    include('./connect.php');
    $username   = addslashes($_POST['txtUsername']);
    $password   = addslashes($_POST['txtPassword']);
    $email      = addslashes($_POST['txtEmail']);
    $passwordcf      = addslashes($_POST['txtPasswordCF']);

    function generate_token() {
        return md5(microtime().mt_rand());
    }

    $options = [
        'salt' => generate_token(), //write your own code to generate a suitable salt
        'cost' => 12 // the default cost is 10
    ];
    $hash = password_hash($password, PASSWORD_DEFAULT, $options);

    if (mysqli_num_rows(mysqli_query($con,"SELECT username FROM nguoidung WHERE username='$username'")) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    if (mysqli_num_rows(mysqli_query($con,"SELECT email FROM nguoidung WHERE Email='$email'")) > 0)
    {
        echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    @$addmember = mysqli_query($con,"
    INSERT INTO nguoidung (username, password, email)
    VALUE
        (
            '{$username}',
            '{$hash}',
            '{$email}'
        )
    ");

    if ($addmember)
        echo "Quá trình đăng ký thành công. <a href='/CongngheWeb'>Về trang chủ</a>";
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='index.php'>Thử lại</a>";
/*
$to = "hongducphi17@gmail.com";
$subject = "Email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>Xin chào<br> $username ! vui lòng nhấn vào liên kết để kích hoạt tài khoản của bạn. </p>
<a href='#'>Liên Kết Active tài khoản trang web Nghe Nhạc Online</a>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

$send=mail($to,$subject,$message,$headers);
if($send)
{
    echo "Thanh Cong";
}
else
{
    echo "Lỗi";
}*/
?>