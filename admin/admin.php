<?php
    session_start();
    // level = 1 la admin, 0 la user
    if($_SESSION['level']==2)
    {
        include('templates/header.php');
        include('templates/footer.php');

    }
    else{
        header("location:../index.php");
        exit();
    }
?>
