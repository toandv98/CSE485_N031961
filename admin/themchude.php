<?php
   
    include('templates/header.php');
    $loi=array();
    $loi['tenchude']= $tenchude =NULL;
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
        if($tenchude)
        {
            include('../php/connect.php');
            //truyvan
            
            mysqli_query($con,"Insert Into chude(chude) value('$tenchude')");
            //dongketnoi
            mysqli_close($con);
        }
    }
?>
    <div id="wrapper2">
        <fieldset style="width:27px; margin: 20px auto 10px;">
            <lengend>Thêm Chủ Đề</lengend>
            <form action="themchude.php" method="post">
                <table>
                    <tr>
                        <td>Name:</td>
                        <td><input type=text size="25>" name="txtname"/>

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

?>
    </div>

<?php
    include('templates/footer.php');
?>