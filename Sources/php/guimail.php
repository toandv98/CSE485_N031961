<?php
    $to=$email;
    // Chủ Đề
    $subject="Active account";
    // From
    $header="from: NhacOnline <toan98.k10@gmail.com>";
    // Your message
    $message="Đường link kích hoạt : \r\n";
    $message.="Nhấp vào link sau để kích hoạt tài khoản\r\n";
    $message.="http://localhost/CSE485_N031961/Sources/php/confirmation.php?passkey=$code";
    // Gủi mail
    $sentmail = mail($to,$subject,$message,$header);
 ?>
