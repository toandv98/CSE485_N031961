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

    if (mysqli_num_rows(mysqli_query($con,"SELECT userName FROM nguoidung WHERE userName='$username'")) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    if (mysqli_num_rows(mysqli_query($con,"SELECT email FROM nguoidung WHERE email='$email'")) > 0)
    {
        echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    @$addmember = mysqli_query($con,"
    INSERT INTO nguoidung(username, PASSWORD, email)
    VALUE
        (
            '{$username}',
            '{$hash}',
            '{$email}'
        )
    ");

    if ($addmember)
        echo "Quá trình đăng ký thành công. <a href='/'>Về trang chủ</a>";
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
        
?>