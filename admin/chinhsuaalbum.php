<?php
    include('templates/header.php');
    $loi=array();
    $loi['tenalbum']=NULL;
    $tenalbum = NULL;
    $id = $_GET["id"];
    if(isset($_POST['ok']))
    {
        if(empty($_POST['txtname']))
        {
        $loi['tenalbum']="Xin vui long nhap ten chu de ";
        }
        else
        {
            $tenalbum =  $_POST['txtname']; 
        }
        if($tenalbum)
        {
            include('../php/connect.php');
            //truyvanupdate
            mysqli_query($con,"Update album SET tenalbum ='$tenalbum' where id=$id");
            header('location:list_album.php');
            mysqli_close($con);
        }
    }


    //moketnoicsdl
    include('../php/connect.php');
    //cautruyvan
    $result = mysqli_query($con,"Select tenalbum from album where id=$id");
    $data = mysqli_fetch_assoc($result);
    
?>
    <div id="wrapper2">
        <fieldset style="width:27px;margin:20px auto 10px;">
            <lengend>Sửa chuyên mục<lengend>
                <form action="chinhsuaalbum.php?id=<?php echo $id;?>" method="post">
                    <table>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" size="25" name="txtname" value = "<?php echo $data['tenalbum'];?>"></td>
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