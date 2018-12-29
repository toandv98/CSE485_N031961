<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Nhạc Online</title>
	<link rel="stylesheet" href="./css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="./css/styleplayer.css">
	
	<link rel="stylesheet" href="./css/hover.css">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<script src="./js/jquery.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container-fullwidth">
		<?php
        session_start();
		include('./php/header.php');
		$id=$_GET['id'];
		$loi=array();
		$loi["name"]=$loi["mess"]=NULL;
		
		$name = $mess = NULL;
		
		if(isset($_POST["ok"]))
		{
			//check co nhap chua
			if(empty($_POST["txtname"]))
			{
				$loi["name"]="Xin vui lòng nhập tên";
			}
			else
			{
				$name=$_POST["txtname"];
			}
			//check mess
			if(empty($_POST["txtmess"]))
			{
				$loi["mess"]="Xin vui lòng nhập phần bình luận";
			}
			else
			{
				$mess=$_POST["txtmess"];
			}
			if($name && $mess)
			{
				include('./php/connect.php');
				//querry
				mysqli_query($con,"INSERT INTO comment(name,message,time,check_cm,baihat_id) values ('$name','$mess',now(),'N','$id')"); 	
				

				echo"<script type='text/javascript'>";
					echo"alert('Bình luận của bạn đã được đăng thành công và chờ kiểm duyệt')";

				echo"</script>";

			}
			
		}
        ?>

		<?php
			include('./php/connect.php');
			
			mysqli_query($con,"UPDATE baihat set luotnghe=luotnghe+1 where id='$id'");
			$sql=mysqli_query($con,"select*from v_baihat where id='$id'");
			$row=mysqli_fetch_assoc($sql);
		?>
		<link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>

		<div class="container-audio">
			<h3 style="color:blue;font-size:16pt;color:#999;">
				<?php echo $row['tenbaihat'];?>
			</h3>
			<span style="font-size:11pt;color:#999;">Trình bày:
				<?php echo $row['tencasi'];?> | Lượt nghe:
				<?php echo $row['luotnghe'];?></span>
			<br>
			<br>
			<audio controls loop autoplay>
				<source src="<?php echo " ./".$row['path'];?>" type="audio/mpeg">
				<source src="<?php echo " ./".$row['path'];?>" type="audio/ogg">
				<embed height="50" width="100" src="<?php echo " admin/".$row['path'];?>"> </audio> </div> <div class="container-audio">
				<div class="colum1">
					<div class="row"></div>
				</div>
				<div class="colum1">
					<div class="row"></div>
				</div>
				<div class="colum1">
					<div class="row"></div>
				</div>
				<div class="colum1">
					<div class="row"></div>
				</div>
				<div class="colum1">
					<div class="row"></div>
				</div>
				<div class="colum1">
					<div class="row"></div>
				</div>
				<div class="colum1">
					<div class="row"></div>
				</div>
				<div class="colum1">
					<div class="row"></div>
				</div>
				<div class="colum1">
					<div class="row"></div>
				</div>
				<div class="colum1">
					<div class="row"></div>
				</div>
				<div class="colum1">
					<div class="row"></div>
				</div>
				<div class="colum1">
					<div class="row"></div>
				</div>
				<div class="colum1">
					<div class="row"></div>
				</div>
				<div class="colum1">
					<div class="row"></div>
				</div>
				<div class="colum1">
					<div class="row"></div>
				</div>
				<div class="colum1">
					<div class="row"></div>
				</div>
				<div class="colum1">
					<div class="row"></div>
				</div>
				<div class="colum1">
					<div class="row"></div>
				</div>
				<div class="colum1">
					<div class="row"></div>
				</div>
				<div class="colum1">
					<div class="row"></div>
				</div>
				<div class="colum1">
					<div class="row"></div>
				</div>
				<div class="colum1">
					<div class="row"></div>
				</div>
				<div class="colum1">
					<div class="row"></div>
				</div>
		</div>
		<div class="container">
	            <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
    						<div class="widget-area no-padding blank">
								<div class="status-upload">
								<?php
										include('./php/connect.php');
										$ketqua = mysqli_query($con,"SELECT * from comment where check_cm='Y' and baihat_id =$id");
										$number = mysqli_num_rows($ketqua);
								?>
                                    <form action="playnhac.php?id=<?php echo $id;?>" method="post">
									<h3 style="margin-left:110px;">Bình Luận (<?php echo "$number";?>)</h3>
                                    <table style="margin-left:110px;margin-top:40px;">
                                    <tr>
							            <td>Name</td>
							            <td><input type="text" placeholder="Nhập tên..." style="width:833.375px;" name="txtname" value="<?php echo $loi["name"]; ?>"></td>
						            </tr>
                                    <tr>
							            <td>Message</td>
										<td><textarea placeholder="Nhập bình luận..." style="width:833.375px;" name="txtmess" rows="6" cols="27" ><?php echo $loi["mess"]; ?></textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <button type="submit" class="btn btn-success green" name="ok"><i class="fa fa-submit"></i>Bình Luận</button>
                                        </td>
                                    </tr> 
										
										
                                    </table>    
									</form>
								</div><!-- Status Upload  -->
							</div><!-- Widget Area -->
						</div>
        
    </div>
</div>
<hr>
			<div id="show-comment" style="margin-left:284px;margin-top:20px;">
				<?php
				include('./php/connect.php');
				//query
				$result1 = mysqli_query($con,"SELECT name,message,time from comment where check_cm ='Y' and baihat_id = $id");
				while($data = mysqli_fetch_assoc($result1))
				{
					echo "<div class='comm'>";
						echo "<table>";

								echo "<td><img src='image/avtdf.jpg' ''alt='' width='60px'></td>";
								$sqltime=$data['time'];
								$timestamp=strtotime($sqltime);
								$time=date('d-m-Y H:i',$timestamp);
								echo "<td><p style='color:black;'>$data[name]  <span style='color:black;'> $time</span></p></td>";
								echo "<br>","<br><td><p>$data[message]</p></td>";
								echo "</div>";

							echo "<div style = 'clear:left'> </div>";
						echo "</table>";
					echo "</div>";
				}
				//dong

				mysqli_close($con);

				?>
			</div>


		<main class="col-md-11 m-auto">

			<div class="left col-md-8 float-left">
				<div class="text-md-left mt-5">
					<h2>Bài hát</h2>
				</div>
				<div class="list-group">
					<?php
		require('./php/connect.php');
		$sql = "SELECT * FROM v_baihat";
		$result = mysqli_query($con,$sql);
		while($row = mysqli_fetch_assoc($result)){
			$tenbaihat = $row['tenbaihat'];
			$casi = $row['tencasi'];
			$luotnghe = $row['luotnghe'];
			$image=$row['image'];
			echo '<a href="playnhac.php?id='.$row['id'].'" class="list-group-item list-group-item-action flex-column align-items-start mb-2">
				<span>
					<img class="float-md-left mr-2" src='.$image.' width="50px">
				</span>
				<div class="item_title">'.$tenbaihat.'</div>
				<div class="box_items">
					<span class="item_span mr-5">
						<img src="./image/views.png" width="18px">
						<span style="font-size:12px;">'.$luotnghe.'</span>
					</span>
					
					<span>
						<span style="font-size:12px;">'.$casi.'</span>
					</span>
				</div>
			</a>';
		}
		mysqli_close($con);
	?>
				</div>
			</div>
			<div class="right col-md-4 float-right">
				<?php include('./php/menuright.php');?>
			</div>
			<div style="clear: both"></div>
		</main>

		<?php
	include('./php/footer.php');
?>
