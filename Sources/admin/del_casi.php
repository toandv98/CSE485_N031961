<<?php
    $id = $_GET["id"];

    include("../php/connect.php");
    mysqli_query($con,"Delete from casi where id=$id");
    header('location:casi.php');
    mysqli_close($con);

?>