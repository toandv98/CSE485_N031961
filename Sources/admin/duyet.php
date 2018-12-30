<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Duyệt bình luận</title>
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
            mysqli_query($con,"UPDATE comment SET duyet=$check where id='$id'");
            mysqli_close($con);
            header('location:comment.php');
            exit();
        }
    ?>
        <main class="col-md-8 m-auto p-5">
          <form class="" action="duyet.php?id=<?php echo $id;?>" method="post">
              <div class="row">
                <div class="col-md-8 m-auto">
                    <div class="row"><div class="col-md-12 text-center mb-3"><label style="font-size:24px">Duyệt bình luận</label></div></div>
                    <div class="form-group row">
                        <label class="col-md-3 mt-3 col-form-label form-control-label">Xét duyệt:</label>
                        <div class="col-md-9">
                            <select class="custom-select mr-sm-2 mt-3" id="checkcm" name="txtcheck">
                                <option value="1">Duyệt</option>
                                <option value="0">Chưa duyệt</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                      <label class="col-lg-3 col-form-label form-control-label"></label>
                      <div class="col-lg-9">
                        <input type="submit" name="ok" class="btn btn-primary" value="Cập nhật">
                      </div>
                    </div>
                </div>
            </div>
          <div style="clear: both"></div>
          </form>
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