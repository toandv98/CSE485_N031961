<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Nhạc Online</title>
	<link rel="stylesheet" href="./css/styleplayer.css">
	<link rel="stylesheet" href="./css/hover.css">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
	<script src="./js/jquery.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/jquery.shorten.1.0.js"></script>
</head>

<body>
	<div class="container-fullwidth">
		<?php
        session_start();
		include('./php/header.php');
		$id=$_GET['id'];
		if(isset($_POST["ok"]))
		{
			if(isset($_SESSION['id'])){
			$user=$_SESSION['userName'];
			$mess=$_POST["txtnoidung"];
			include('./php/connect.php');
			$iduser=$_SESSION['id'];
			$up=mysqli_query($con,"INSERT INTO comment(noidung,iduser,idbaihat) VALUES('$mess','$iduser','$id')"); 	
			if($up){
				echo"<script type='text/javascript'> alert('Bình luận của bạn đã được đăng thành công và chờ kiểm duyệt') </script>";
			}else{
				echo"<script type='text/javascript'> alert('Có lỗi xảy ra!') </script>";
			}
			mysqli_close($con);
			}else{
				echo"<script type='text/javascript'> alert('Bạn phải đăng nhập để thêm bình luận') </script>";
			}
		}
        ?>
		<?php
			include('./php/connect.php');
			mysqli_query($con,"UPDATE baihat set luotnghe=luotnghe+1 where id='$id'");
			$sql=mysqli_query($con,"select*from v_baihat where id='$id'");
			$row=mysqli_fetch_assoc($sql);
			mysqli_close($con);
		?>

		
		<main class="col-md-11 m-auto">
			<div class="left col-md-8 float-left">
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
				<?php 
					for ($i=0; $i < 40; $i++) { 
						echo '<div class="colum1">
								<div class="row"></div>
							</div>';
					}
				?>
			</div>
			<div class="text-md-left mt-5">
				<h3>Bài hát</h3>
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
		<span class="border border-primary mt-5 bg-light p-3 rounded">
		<div class="row">
			<div class="col-md-12 m-auto">
				<?php
					include('./php/connect.php');
					$ketqua = mysqli_query($con,"SELECT * from comment where duyet=1 and idbaihat =$id");
					$number = mysqli_num_rows($ketqua);
					mysqli_close($con);
					if(isset($_SESSION['avatar'])){
						$useravatar=$_SESSION['avatar'];
					}else{
						$useravatar='image/avatar.png';
					}
				?>
				<form action="playnhac.php?id=<?php echo $id;?>" method="post">
					<h4>Bình Luận (<?php echo "$number";?>)</h4>
					<div class="p-2">
					<div class="row">
						<div class='col-md-2'>
							<img src='./<?php echo $useravatar;?>' width='100px'>
						</div>
						<div class="col-md-10">
							<label for="noidung" class="">Thêm bình luận:</label>
							<textarea class="form-control" rows="6" name="txtnoidung" id="noidung" placeholder="Nhập bình luận..." required="required"></textarea>
							<button type="submit" class="btn btn-success green mt-3" name="ok">Bình Luận</button>
						</div>
					</div>
					</div>
				</form>
			</div>
		</div>
		<div id="show-comment">
			<?php
			include('./php/connect.php');
			$result1 = mysqli_query($con,"SELECT u.hoten,u.avatar,c.noidung,c.thoigian FROM comment c INNER JOIN user u ON c.iduser = u.id WHERE c.duyet=1 AND c.idbaihat='$id'");
			while($data = mysqli_fetch_assoc($result1))
			{
				$avatar=$data['avatar'];
				$hoten=$data['hoten'];
				$noidung=$data['noidung'];
				$sqltime=$data['thoigian'];
				$timestamp=strtotime($sqltime);
				$time=date('d-m-Y H:i',$timestamp);
				echo "<div class='list-group-item mt-3'>
						<div class='float-left'>
							<img src='$avatar' width='70px'></div>
						<div class='ml-3'>
						<table>
							<td>
							<div>
								<div class='list-group-item ml-3 p-1'>
								<div class='item_title'><b>$hoten</b></div>
								<div class='item_title ml-3'><p class='thugon'>$noidung</p></div>
								<div class='box_items'>
									<span class='item_span'>
										<img src='./image/playtime.png' width='18px'>
										<span style='font-size:11px;'><b>$time</b></span>
									</span>
								</div>
								</div>
							</div>
							</td>
							</table>
						</div>
						</div>";
			}
			mysqli_close($con);
			?>
		</div>
		</div></span>
		</div>
		<div class="right col-md-4 float-right">
			<?php include('./php/menuright.php');?>
		</div>
		<div style="clear: both"></div>
		</main>
			
		<?php
	include('./php/footer.php');
?>
	<script type="text/javascript">
	$(".thugon").shorten({
		"showChars" : 160,
		"moreText"  : "Xem thêm",
		"lessText"  : "Rút gọn",
	});
	</script>
</body>
</html>