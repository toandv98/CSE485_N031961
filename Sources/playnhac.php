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
        ?>

		<?php
	include('./php/connect.php');
	$id=$_GET['id'];
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