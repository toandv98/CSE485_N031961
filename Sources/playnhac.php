<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Nhạc Online</title>
	<link rel="stylesheet" href="./css/AudioPlayer.css">
	<link rel="stylesheet" href="./css/styleplayer.css">
	<link rel="stylesheet" href="./css/hover.css">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/jquery.paginate.css">
	<link rel="stylesheet" href="./css/fixplayer.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="./js/jquery.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/jquery.shorten.1.0.js"></script>
	<script src="./js/jquery.paginate.js"></script>
</head>

<body>
	<div class="container-fullwidth">
		<?php
        session_start();
		include('./php/header.php');
		$id=$_GET['id'];
        ?>
		<main class="col-md-11 m-auto">
			<div class="left col-md-8 float-left">
			<div class="dshow">
			</div>
			<div class="dplayer">
				<div id='player' class="position-relative h-100"></div>
			</div>
			<div class="text-md-left mt-5">
				<h3>Bài hát</h3>
			</div><hr>
			<div class="list-group">
			<ul id="listbaihat" class="p-0" style="list-style:none;">
			<?php
			require('./php/connect.php');
			$sql = "SELECT * FROM v_baihat";
			$result = mysqli_query($con,$sql);
			while($row = mysqli_fetch_assoc($result)){
				$tenbaihat = $row['tenbaihat'];
				$casi = $row['tencasi'];
				$luotnghe = $row['luotnghe'];
				$image=$row['image'];
				echo '<li><a href="playnhac.php?id='.$row['id'].'" class="list-group-item list-group-item-action flex-column align-items-start mb-2">
					<span>
						<img class="float-md-left mr-2" src='.$image.' width="50px">
					</span>
					<div class="item_title font-weight-bold">'.$tenbaihat.'</div>
					<div class="box_items">
						<span class="item_span mr-5">
							<img src="./image/views.png" width="18px">
							<span style="font-size:13px;">'.$luotnghe.'</span>
						</span>
						
						<span>
							<span style="font-size:13px;">'.$casi.'</span>
						</span>
					</div>
				</a></li>';
			}
			mysqli_close($con);
		?>
		</ul>
		</div>
		<div class="border border-primary mt-5 bg-light p-3 rounded">
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
					<hr>
					<div class="p-2">
					<div class="row">
						<div class='col-md-2'>
							<img src='./<?php echo $useravatar;?>' width='100px'>
						</div>
						<div class="col-md-10">
							<label for="noidung" id="thongbao">Thêm bình luận:</label>
							<textarea class="form-control" rows="6" name="txtnoidung" id="noidung" placeholder="Nhập bình luận..." required="required"></textarea>
							<button type="button" class="btn btn-success green mt-3" onclick="load_ajax()" name="ok">Bình Luận</button>
						</div>
					</div>
					</div>
				</form>
			</div>
		</div>
		<div id="show-comment">
			<ul id="cmt" class="p-0" style="list-style:none;">
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
				echo "<li><div class='list-group-item mt-2'>
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
						</div></li>";
			}
			mysqli_close($con);
			?>
			</ul>
		</div></div>
		</div>
		<div class="right col-md-4 float-right">
			<?php include('./php/menuright.php');?>
		</div>
		<div style="clear: both"></div>
		</main>
			
		<?php
			include('./php/footer.php');
		?>
		</div>
	
	<script src="./js/AudioPlayer.js"></script>
	<?php
		include('./php/connect.php');
		$sql1=mysqli_query($con,"select*from v_baihat where id='$id'");
		$rown1=mysqli_fetch_assoc($sql1);
		$sql=mysqli_query($con,"select*from v_baihat where idalbum='$rown1[idalbum]' and id!='$id' limit 20");
		echo "<script>
        var iconImage = null;
        AP.init({
            container:'#player',
            volume   : 0.7,
            autoPlay : false,
            notification: false,
			playList: [";
			echo "{'icon': iconImage, 'title': '$rown1[tenbaihat]', 'file': './$rown1[path]' ,'idbh': '$rown1[id]'},";
		while($rown=mysqli_fetch_assoc($sql)){
			echo "
				{'icon': iconImage, 'title': '$rown[tenbaihat]', 'file': './$rown[path]' ,'idbh': '$rown[id]'},";
		}
         echo "]
        });
	</script>";
	
	mysqli_close($con);
	?>
	<script language="javascript">
		$('#cmt').paginate({
			  perPage:3 
		});
		$('#listbaihat').paginate();
		$(".thugon").shorten({
			"showChars" : 160,
			"moreText"  : "Xem thêm",
			"lessText"  : "Rút gọn",
		});
		$.ajax({
			url : "./php/showinfo.php",
			type : "post",
			dataType:"text",
			data : {
					id:<?php echo $id ?>
			},
			success : function (result){
				$('.dshow').html(result);
			}
		});
		function load_ajax(){
			$.ajax({
				url : "./php/ajaxcomment.php",
				type : "post",
				dataType:"text",
				data : {
						noidung : $('#noidung').val(),
						id:<?php echo $id ?>
				},
				success : function (result){
					$('#thongbao').html(result);
				}
			});
		}
	</script>
</body>
</html>