<?php
	session_start();
    include('../php/connect.php');
    include('templates/header.php');

	$sql=mysqli_query($con,"select * from baihat");
	$row=mysqli_fetch_assoc($sql);
		if(isset($_POST['up']))
		{
			$tenbaihat=$_POST['tenbaihat'];
			$theloai =$_POST['theloai'];
			$file_name=$_FILES['upload']['name'];
			$extent_file="mp3";
			$pattern='#.+\.(mp3)$#i';
			
					$update=mysqli_query($con,"insert into baihat(tenbaihat,theloai,duongdan) values('$tenbaihat','$theloai')");
					if($update)
					{
						echo "Bài hát của bạn đã được đăng  <a href='../index.php'>Trang chủ</a>";
					}
					else
					{
						echo "Đăng nhạc thất bại!Trở về <a href='./?mod=upload'>Upload</a>";
					}
				}
?>
	</div>
	<div class="thongtin_dangky">
		<div style="padding: 10px;">
			<form name="form1" method="post" enctype="multipart/form-data" action="">
				<table >
					<tr>
						<td>
						<p>
							Bài hát: <input class="btup" type="file" name="upload" id="upload">
						</p>
						</td>
						<table >
						  <tr>
						    <td >Tên bài hát:</td>
						    <td ><label for="tenbaihat"></label>
					        <input type="text" name="tenbaihat" id="tenbaihat"/></td>
					      </tr>
						  <tr>
						  <td>
						  <p>
						  	Hình ảnh: <input type="file" name="fileUpload" value="">
							 </p>
							 </td>
						  <tr>
						    <td><b>Thể Loại:</b></td>
						    <td><label for="theloai"></label>
					        <input type="text" name="theloai" id="theloai" /></td>
					      </tr>
						  
						  </table>
						<p> 
							<input class="btup" type="submit" name="up" value="Upload">
						</p>
					</tr>
				</table>
			</form>
		</div>			       
	</div>
</div>
<?php 
    include('templates/footer.php');
?>