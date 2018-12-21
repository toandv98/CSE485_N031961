<?php
   
    include('templates/header.php');
    $loi=array();
    $loi['tenchude']= $loi['image'] = NULL;
    $image = $tenchude = NULL;
    if(isset($_POST['ok']))
    {
        //kiemtraxemdanhaptenchua
        if(empty($_POST['txtname']))
        {
            $loi['tenchude']="Xin Vui Lòng Nhập Tên Chủ Đề";
        }
        else{
            $tenchude = $_POST['txtname'];
        }
        if($_FILES['image']['error']>0)
        {
            $loi['image']="Xin vui long chon hinh anh cho chu de";
        }
        else{
            $image = $_FILES['image']['name'];
        }
        if($tenchude && $image) 
        {
            include('../php/connect.php');
            //truyvan   
            
            mysqli_query($con,"Insert Into theloai(tentheloai,image) value('$tenchude','$image')");

            header('location:./list_chude.php');
            //dongketnoi

            //upload
            move_uploaded_file($_FILES['image']['tmp_name'], 'image/' . $_FILES['image']['name']);
        }
    }
?>
    <div id="wrapper2">
        <fieldset style="width:27px; margin: 20px auto 10px;">
            <lengend>Thêm Chủ Đề</lengend>
            <form action="themchude.php" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>Name:</td>
                        <td><input type=text size="25>" name="txtname"/>

                    </tr>
                    <tr>
                        <td>Anh:</td>
                        <td><input type=file size="25>" name="image" id="image"/>

                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Thêm" name="ok"/>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>
    <div style="width:290px; margin:auto; text-align:center;color:#F00;">
        <?php
        echo $loi['tenchude'];
        echo $loi['image'];

?>
    </div>

<?php
    include('templates/footer.php');
?>