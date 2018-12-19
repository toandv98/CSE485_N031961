<?php
    $to=$email;
    // Chủ Đề
    $subject="Kích Hoạt Tài Khoản";
    // From
    $header="from: NhacOnline <hongducphi17@gmail.com>";
    // Your message
    $message="Đường link kích hoạt : \r\n";
    $message.="Nhấp vào link sau để kích hoạt tài khoản\r\n";
    $message.="http://localhost/CongngheWeb/php/confirmation.php?passkey=$code";
    // Gủi mail
    $sentmail = mail($to,$subject,$message,$header);
 ?>
