<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nhac1";

$con = mysqli_connect($servername,$username,$password,$dbname);

mysqli_set_charset($con,"utf8");

if(!$con){
   die('Kết nối thất bại:'.mysqli_connect_error());
}
?>
