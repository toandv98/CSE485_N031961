<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm bài hát</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap4.css" rel="stylesheet">
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/xacnhan.js"></script>
</head>

<body>
    <?php
        session_start();
        include('header.php');
    ?>
    <div class="col-md-8 m-auto pt-5 text-center">
    <?php
		if(isset($_POST['up']))
		{
			
			$tenbaihat=$_POST['tenbaihat'];
			$casi=$_POST['casi'];
			$chude=$_POST['chude'];
			$file_name=$_FILES['upload']['name'];
			$image=$_FILES['uploadimg']['name'];
			$pattern='#.+\.(mp3)$#i';
            $pattern1='#\.(jpg|jpeg|gif|png)$#i';
            
            if ($_FILES['uploadimg']['size'] < 4000000)
            {
                if(preg_match($pattern,$file_name)==1)
                {
                    if(preg_match($pattern1,$image)==1)
                    {
                        if (isset($_FILES['upload']) && isset($_FILES['uploadimg'])) {
                            if ($_FILES['upload']['error'] > 0)
                                echo "Upload lỗi rồi!";
                            else {
                                move_uploaded_file($_FILES['upload']['tmp_name'], '../nhac/' . $_FILES['upload']['name']);	
                                move_uploaded_file($_FILES['uploadimg']['tmp_name'], '../image/' . $_FILES['uploadimg']['name']);
                                
                            }
                        }

                        $destck='../nhac/'.$_FILES['upload']['name'];
                        $destck1='../image/'.$_FILES['uploadimg']['name'];
                        $dest='nhac/'.$_FILES['upload']['name'];
                        $dest1='image/'.$_FILES['uploadimg']['name'];
                        if(file_exists($destck) && file_exists($destck1))
                        {	
                            include('../php/connect.php');
                            $rchude=mysqli_query($con,"select id from theloai where tentheloai = '$chude'");
                            $rowtl=mysqli_fetch_assoc($rchude);
                            $idchude = $rowtl['id'];
                            $update=mysqli_query($con,"insert into baihat(tenbaihat,casy,theloai,duongdan,image,idtheloai) values('$tenbaihat','$casi','$chude','$dest','$dest1','$idchude')");
                            mysqli_close($con);
                            if($update)
                            {
                                echo "<h3 style='color:lime;'>Bài hát của bạn đã được đăng...</h3>";
                            }
                            else
                            {
                                echo "<h3 style='color:red;'>Đăng nhạc thất bại!</h3>";
                            }
                        }
                        else
                        {
                            echo "<h3 style='color:red;'>Đăng nhạc thất bại!</h3>";
                        }
                    }
                    else
                    {
                        echo "<h3 style='color:red;'>Sai định dạng file anh!</h3>";
                    }
                }
                else
                {
                    echo "<h3 style='color:red;'>Sai định dạng file nhac!</h3>";
                }
            }
            else
            {
            echo "<h3 style='color:red;'>Dung lượng ảnh quá lớn!</h3>";
            }
        }
    ?>
    </div>
    <main class="col-md-8 m-auto p-5">
          <form class="" action="./thembaihat.php" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-8 m-auto">
                    <div class="row"><div class="col-md-12 text-center mb-3"><label style="font-size:24px">Thêm bài hát</label></div></div>
                    <div class="form-group row">
                        <label class="col-md-3 mt-3 col-form-label form-control-label">Nhạc:</label>
                        <div class="col-md-9">
                        <label class="custom-file">
                            <input type="file" id="nhac" name="upload" class="custom-file-input">
                            <label class="custom-file-label text-left mt-3" for="anh">Chọn đường dẫn đến nhạc...</label>
                        </label>
                        </div>
                        <label class="col-md-3 mt-3 col-form-label form-control-label">Ảnh:</label>
                        <div class="col-md-9">
                        <label class="custom-file">
                            <input type="file" id="anh" name="uploadimg" class="custom-file-input">
                            <label class="custom-file-label text-left mt-3" for="anh">Chọn đường dẫn đến ảnh...</label>
                        </label>
                        </div>
                        <label class="col-md-3 mt-3 col-form-label form-control-label">Tên bài hát:</label>
                        <div class="col-md-9">
                                <input name="tenbaihat" class="form-control mt-3" type="text" required="required">
                        </div>
                        <label class="col-md-3 mt-3 col-form-label form-control-label">Tên ca sĩ:</label>
                        <div class="col-md-9">
                                <input name="casi" class="form-control mt-3" type="text" required="required">
                        </div>
                        <label class="col-md-3 mt-3 col-form-label form-control-label">Chủ đề:</label>
                        <div class="col-md-9">
                            <select class="custom-select mr-sm-2 mt-3" id="chude" name="chude">
                                <?php
                                    include("../php/connect.php");
                                    $chude=mysqli_query($con,"select * from theloai");
									while($row=mysqli_fetch_assoc($chude)){
										echo '<option>'.$row['tentheloai'].'</option>';
                                    }
                                    mysqli_close($con);
								?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row mt-5">
                      <label class="col-lg-3 col-form-label form-control-label"></label>
                      <div class="col-lg-9">
                        <input type="reset" class="btn btn-secondary" value="Reset">
                        <input type="submit" name="up" class="btn btn-primary" value="Thêm">
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
</body>

</html>