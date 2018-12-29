<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap4.css" rel="stylesheet">
</head>

<body>
<?php
    session_start();

    if($_SESSION['level']==2)
    {
        include('header.php');
        include('footer.php');
    }
    else{
        header("location:../index.php");
        exit();
    }
?>
    <script src="js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>