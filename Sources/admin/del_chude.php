<<?php
    $id = $_GET["id"];

    include("../php/connect.php");
    mysqli_query($con,"Delete from theloai where id=$id");
    header('location:list_chude.php');
    mysqli_close($con);

?>