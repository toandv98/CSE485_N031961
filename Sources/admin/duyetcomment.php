<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap4.css" rel="stylesheet">
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/xacnhan.js"></script>
</head>

<body>
    <?php
        session_start();
        include('header.php');
        $id = $_GET['id'];
        if(isset($_POST['ok']))
        {
            $check=$_POST['txtcheck'];
            include("../php/connect.php");
            mysqli_query($con,"UPDATE comment SET check_cm='$check' where id_cm='$id'");

            //dong
            mysqli_close($con);
            header('location:comment.php');
            exit();

        }
        
    ?>
    <main class="col-md-10 m-auto">
        <form action="duyetcomment.php?id=<?php echo $id;?>" method="post">
            <div class="card mb-3 mt-3">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <label class="col-md-3 mt-3 col-form-label form-control-label">Xét Duyệt Bình Luận:</label>
                            <div class="col-md-9">
                                <select class="custom-select mr-sm-2 mt-3" id="comment" name="txtcheck">
                                    <option value="N">Chưa duyệt</option>
                                    <option value="Y">Duyệt</option>
                             </select>
                        </div>
                    </table>
                    </div>
                </div>
                <input type="submit" name="ok" class="btn btn-primary" value="Update" style="width:80px;margin-left:35px;">
        </form>
    <div class="form-group row mt-5">
                      <label class="col-lg-3 col-form-label form-control-label"></label>
                      <div class="col-lg-9">
                        
                      </div>
                    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
</main>
<?php
        include('footer.php');
    ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/dataTables.bootstrap4.js"></script>
    <script>
        $('#dataTable').DataTable();
    </script>
    </body>

</html>