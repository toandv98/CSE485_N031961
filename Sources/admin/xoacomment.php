<<?php
    $id = $_GET["id"];

    include("../php/connect.php");
    mysqli_query($con,"Delete from comment where id_cm=$id");
    header('location:comment.php');
    mysqli_close($con);

?>