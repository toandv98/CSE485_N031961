<?php
    include('templates/header.php');
    $loi=array();
    $loi['tenchude']=NULL;
    $tenchude = NULL;
    $id = $_GET["id"];
    if(isset($_POST['ok']))
    {
        if(empty($_POST['txtname']))
        {
        $loi['tenchude']="Xin vui long nhap ten chu de ";
        }
        else
        {
            $tenchude =  $_POST['txtname']; 
        }
        if($tenchude)
        {
            include('../php/connect.php');
            //truyvanupdate
            mysqli_query($con,"Update chude SET chude='$tenchude' where id=$id");
            header('location:list_chude.php');
            mysqli_close($con);
        }
    }


    //moketnoicsdl
    include('../php/connect.php');
    //cautruyvan
    $result = mysqli_query($con,"Select chude from chude where id=$id");
    $data = mysqli_fetch_assoc($result);
    
?>
    <div id="wrapper2">
        <fieldset style="width:27px;margin:20px auto 10px;">
            <lengend>Sửa chuyên mục<lengend>
                <form action="chinhsuachude.php?id=<?php echo $id;?>" method="post">
                    <table>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" size="25" name="txtname" value = "<?php echo $data['chude'];?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Update" name="ok"></td>
                        </tr>
                    </table>
                </form>
        </fieldset>



    </div>
    <?php
    mysqli_close($con);
        include('templates/footer.php');
    ?>