<<?php
    $id = $_GET["id"];

    include("../php/connect.php");
    mysqli_query($con,"Delete from album where album.id=$id");
    header('location:list_album.php');
    mysqli_close($con);

?>