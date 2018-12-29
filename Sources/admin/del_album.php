<<?php
    $id = $_GET["id"];

    include("../php/connect.php");
    mysqli_query($con,"Delete from album where id=$id");
    header('location:album.php');
    mysqli_close($con);

?>