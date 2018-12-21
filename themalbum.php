<style>
*{
    padding: 0px;
    margin: 0px;
}

body{
    width: 800px;
    margin: auto;

}
a{
    text-decoration: none;
}

a:hover{
    text-decoration: underline;
}
#top{
    height: 100px;
    background: #00CC66;
    text-align: center;
    line-height: 100px;

}

#menu{
    margin-top: 8px;
}
#menu li{
    float: left;
    width: 198px;
    text-align: center;
    line-height: 30px;
    border: 1px solid #FFFFFF;
    background: #00CC66;
    list-style: none;
}

#menu li a{
    color: #FFFFFF;
    font-weight: bold;
}

#wrapper table{
    margin-top: 20px;
    width: 800px;
    text-align: center;
    border-collapse: collapse;
}

#wrapper table tr{
    border: 1px solid #0c6;
    line-height: 20px;
}

#wrapper table td{
    color:#a4a4a4;
    border: 1px solid #0c6;
}
#wrapper2 table{
    margin: 10px 20px;
}
#wrapper2 table tr{
    line-height: 30px;
}
#wrapper table input{
    padding: 2px;
}

#footer{
    height: 40px;
    line-height: 40px;
    background: #00cc66;
    text-align: center;
    color:#FFFFFF;
    margin-top: 20px;
}

</style>




<?php
	session_start();
	include("./php/connect.php");
	$sql=mysqli_query($con,"select * from album");

	$row=mysqli_fetch_assoc($sql);
		if(isset($_POST['up']))
		{
			

			$album = $_POST['tenalbum'];
			$image=$_FILES['uploadimg']['name'];
			$extent_file="mp3";
			$pattern1='#\.(jpg|jpeg|gif|png)$#i';
			
			
	
				if(preg_match($pattern1,$image)==1)
				{
					
					if (isset($_POST['up']) && isset($_FILES['uploadimg'])) {
						if ($_FILES['uploadimg']['error'] > 0)
							echo "Upload lỗi rồi!";
						else {
	
							move_uploaded_file($_FILES['uploadimg']['tmp_name'], 'image/' . $_FILES['uploadimg']['name']);
							
						}
					}

				$dest1='image/'.$_FILES['uploadimg']['name'];
				if(file_exists($dest1))
				{	
					$rtheloai=mysqli_query($con,"select album.id as idab from album where tenalbum = '$album'");
					$rowtl=mysqli_fetch_assoc($rtheloai);
					
					$idalbum = $rowtl['idab'];
					$flag=true;
					$update=mysqli_query($con,"insert into album(tenalbum,image) values('$album','$dest1')");
					if($update)
					{
						echo "Thanh Cong";
					}
					else
					{
						echo "That bai";
					}
				}
				else
				{
					$flag=false;
					echo "That bai";
				}

				}
			else
			{
				
				echo 'Sai định dạng file anh!';
			}
	
		
		
		}

	
	
	
			
?>
<!DOCTYPE html>
<html>
<head>
    

    </style>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trang Quản Trị Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script language="javascript">
        function xacnhan()
        {
            if(confirm("Bạn có muốn xoá  không?"))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    </script>
</head>
<body>
    <div id="top">
		<h3 style="color:#FFF";>Welcom Admin , <a href="php/xulydangxuat.php" style="color:#FFF";>Logout</a></h3>
    </div>
    <div id="menu">
        <ul>
            <li><a href="./admin/list_user.php">Quản Lý Thành Viên</a></li>
            <li><a href="./admin/list_chude.php">Quản Lý Chủ Đề</a></li>
            <li><a href="./admin/list_baihat.php">Quản Lý Bài Hát</a></li>
            <li><a href="./admin/list_comment.php">Quản Lý Bình Luận</a></li>
			<li><a href="./admin/list_album.php">Quản Lý Albums</a></li>

        </ul>
    </div>
    <div style="clear:left";></div>
<div id="dangky_thanhvien">
	<div class="content-block album">
		<h2 class="content-block-title"> Thêm Albums</h2>
	</div>
	<div class="thongtin_dangky">
		<div style="padding: 10px;">
			<form name="form1" method="post" enctype="multipart/form-data" action="themalbum.php">
				<table width="825" height="201" border="0">
					<tr>
					<td width="400px" valign="top" align="center">
						<p style="text-indent: 31px;">
							<b>Ảnh</b> : <input class="btup" type="file" name="uploadimg" id="uploadimg" style="padding-left:0px;">
						</p>
						<table width="277" border="0">
						  <tr>
						    <td width="89" height="30" align="right"><b>Tên album:</b></td>
						    <td width="172"><label for="tenalbum"></label>
					        <input type="text" name="tenalbum" id="tenalbum" height="100px"/></td>
					      </tr>
						  
						  
						  </table>
						<p> 
							<input class="btup" type="submit" name="up" value="Upload">
						</p>
						</td>
	          <td width="36" valign="top">&nbsp;</td>
						<td width="474" valign="top">
							
							<div>
								<strong>Cách thức upload tránh lỗi nhạc:</strong>
							</div>
							<ul>
					            <li> Không để tên bài hát có dấu.</li>
					            <li> Không để tên ca sĩ trên bài hát.</li>
					            <li> Chỉ up nhạc MP3.</li>
								<li> Dung luong file anh khong vuot qua 4MB.</li>
								<li> Chỉ up nhạc MP3.</li>
			                </ul>
							
						</td>
					</tr>
				</table>
			</form>
		</div>			       
	</div>
</div>
<?php 
	include('./admin/templates/footer.php');
										?>