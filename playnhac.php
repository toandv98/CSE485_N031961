<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nhạc Online</title>
    <link rel="stylesheet" href="./css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/hover.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
</head>

<body>
    <div class="container-fullwidth">
        <?php
        session_start();
        include('./php/header.php');
        ?>

<style>
/* Global Reset */
* {
    box-sizing: border-box;
}
body {
    background: linear-gradient(to left, #7700aa, #8800ff);
    text-align:center;
    color:#fff;
}
h3{
    text-shadow:1px 1px 1px #fff;
}
/* Start  styling the page */
.container-audio {
    width: 66%;
    height: auto;
    padding: 20px;
    border-radius: 5px;
    background-color: #eee;
    color: #444;
    margin: 20px auto;
    overflow: hidden;
}
audio {
  width:100%;
}
audio:nth-child(2), audio:nth-child(4), audio:nth-child(6) {
    margin: 0;
}
.container-audio .colum1 {
    width: 23px;
    height: 5em;
    border-radius: 5px;
    margin: 0 10px 0 0;
    display: inline-block;
    position: relative;
}
.container-audio .colum1:last-child {
    margin: 0;
}
.container-audio .colum1 .row {
    width: 100%;
    height: 100%;
    border-radius: 5px;
    background: linear-gradient(to up, #7700aa, #8800ff);
    position: absolute;
    -webkit-animation: Rofa 10s infinite ease-in-out;
    animation: Rofa 10s infinite ease-in-out;
    bottom: 0;
}
.container-audio .colum1:nth-of-type(1) .row {
    -webkit-animation-delay: 3.99s;
    animation-delay: 3.99s;
}
.container-audio .colum1:nth-of-type(2) .row {
    -webkit-animation-delay: 3.80s;
    animation-delay: 3.80s;
}
.container-audio .colum1:nth-of-type(3) .row {
    -webkit-animation-delay: 3.70s;
    animation-delay: 3.70s;
}
.container-audio .colum1:nth-of-type(4) .row {
    -webkit-animation-delay: 3.60s;
    animation-delay: 3.60s;
}
.container-audio .colum1:nth-of-type(5) .row {
    -webkit-animation-delay: 3.50s;
    animation-delay: 3.50s;
}
.container-audio .colum1:nth-of-type(6) .row {
    -webkit-animation-delay: 3.40s;
    animation-delay: 3.40s;
}
.container-audio .colum1:nth-of-type(7) .row {
    -webkit-animation-delay: 3.30s;
    animation-delay: 3.30s;
}
.container-audio .colum1:nth-of-type(8) .row {
    -webkit-animation-delay: 3.20s;
    animation-delay: 3.20s;
}
.container-audio .colum1:nth-of-type(9) .row {
    -webkit-animation-delay: 3.10s;
    animation-delay: 3.10s;
}
.container-audio .colum1:nth-of-type(10) .row {
    -webkit-animation-delay: 2.1s;
    animation-delay: 2.1s;
}
.container-audio .colum1:nth-of-type(11) .row {
    -webkit-animation-delay: 2.1s;
    animation-delay: 2.1s;
}
.container-audio .colum1:nth-of-type(12) .row {
    -webkit-animation-delay: 2.10s;
    animation-delay: 2.10s;
}
.container-audio .colum1:nth-of-type(13) .row {
    -webkit-animation-delay: 2.20s;
    animation-delay: 2.20s;
}
.container-audio .colum1:nth-of-type(14) .row {
    -webkit-animation-delay: 1.30s;
    animation-delay: 1.30s;
}
.container-audio .colum1:nth-of-type(15) .row {
    -webkit-animation-delay: 1.40s;
    animation-delay: 1.40s;
}
.container-audio .colum1:nth-of-type(16) .row {
    -webkit-animation-delay: 1.50s;
    animation-delay: 1.50s;
}
.container-audio .colum1:nth-of-type(17) .row {
    -webkit-animation-delay: 1.60s;
    animation-delay: 1.60s;
}
.container-audio .colum1:nth-of-type(18) .row {
    -webkit-animation-delay: 1.70s;
    animation-delay: 1.70s;
}
.container-audio .colum1:nth-of-type(19) .row {
    -webkit-animation-delay: 1.80s;
    animation-delay: 1.80s;
}
.container-audio .colum1:nth-of-type(20) .row {
    -webkit-animation-delay: 2s;
    animation-delay: 2s;
}

@-webkit-keyframes Rofa {
    0% {
        height: 0%;
        -webkit-transform: translatey(0);
        transform: translatey(0);
        background-color: yellow;
    }

    5% {
        height: 100%;
        -webkit-transform: translatey(15px);
        transform: translatey(15px);
        background-color: fuchsia;
    }
    10% {
        height: 90%;
        transform: translatey(0);
        -webkit-transform: translatey(0);
        background-color: bisque;
    }

    15% {
        height: 80%;
        -webkit-transform: translatey(0);
        transform: translatey(0);

        background-color: cornflowerblue;
    }
    20% {
        height: 70%;
        -webkit-transform: translatey(0);
        transform: translatey(0);
        background-color: cornflowerblue;
    }
    25% {
        height: 0%;
        -webkit-transform: translatey(0);
        transform: translatey(0);
        background-color: cornflowerblue;
    }
    30% {
        height: 70%;
        -webkit-transform: translatey(0);
        transform: translatey(0);
        background-color: cornflowerblue;
    }
    35% {
        height: 0%;
        -webkit-transform: translatey(0);
        transform: translatey(0);

        background-color: cornflowerblue;
    }
    40% {
        height: 60%;
        -webkit-transform: translatey(0);
        transform: translatey(0);

        background-color: cornflowerblue;
    }
    45% {
        height: 0%;
        -webkit-transform: translatey(0);
        transform: translatey(0);

        background-color: cornflowerblue;
    }
    50% {
        height: 50%;
        -webkit-transform: translatey(0);
        transform: translatey(0);

        background-color: cornflowerblue;
    }
    55% {
        height: 0%;
        -webkit-transform: translatey(0);
        transform: translatey(0);

        background-color: cornflowerblue;
    }
    60% {
        height: 40%;
        -webkit-transform: translatey(0);
        transform: translatey(0);

        background-color: cornflowerblue;
    }
    65% {
        height: 0%;
        -webkit-transform: translatey(0);
        transform: translatey(0);

        background-color: cornflowerblue;
    }
    70% {
        height: 30%;
        -webkit-transform: translatey(0);
        transform: translatey(0);

        background-color: cornflowerblue;
    }
    75% {
        height: 0%;
        -webkit-transform: translatey(0);
        transform: translatey(0);

        background-color: cornflowerblue;
    }
    80% {
        height: 20%;
        -webkit-transform: translatey(0);
        transform: translatey(0);

        background-color: cornflowerblue;
    }
    85% {
        height: 0%;
        -webkit-transform: translatey(0);
        transform: translatey(0);

        background-color: cornflowerblue;
    }
    90% {
        height: 10%;
        -webkit-transform: translatey(0);
        transform: translatey(0);

        background-color: cornflowerblue;
    }
    95% {
        height: 5%;
        -webkit-transform: translatey(0);
        transform: translatey(0);

        background-color: cornflowerblue;
    }
    100% {
        height: 0;
        -webkit-transform: translatey(0);
        transform: translatey(0);

        background-color: cornflowerblue;
    }
}

</style>
<?php
	include('./php/connect.php');
	$id=$_GET['id'];
	mysqli_query($con,"UPDATE baihat set luotnghe=luotnghe+1 where id='$id'");
	$sql=mysqli_query($con,"select*from baihat where id='$id'");
	$row=mysqli_fetch_assoc($sql);
?>
<link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>

<div class="container-audio">
	<audio controls  loop autoplay>
	<source src="<?php echo "./".$row['duongdan'];?>" type="audio/mpeg">
  <source src="<?php echo "./".$row['duongdan'];?>" type="audio/ogg">
	<embed height="50" width="100" src="<?php echo "admin/".$row['duongdan'];?>">
		   </audio>
</div>
<div class="container-audio">
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
		$sql = "SELECT * FROM baihat";
		$result = mysqli_query($con,$sql);
		while($row = mysqli_fetch_assoc($result)){
			$tenbaihat = $row['tenbaihat'];
			$casy = $row['casy'];
			$luotnghe = $row['luotnghe'];
			echo '<a href="playnhac.php?id='.$row['id'].'" class="list-group-item list-group-item-action flex-column align-items-start mb-2">
				<span>
					<img class="float-md-left mr-2" src="./image/logo.png" width="50px">
				</span>
				<div class="item_title">'.$tenbaihat.'</div>
				<div class="box_items">
					<span class="item_span mr-5">
						<img src="./image/views.png" width="18px">
						<span style="font-size:12px;">'.$luotnghe.'</span>
					</span>
					
					<span>
						<span style="font-size:12px;">'.$casy.'</span>
					</span>
				</div>
			</a>';
		}
		mysqli_close($con);
		
		for ($i=0; $i < 10; $i++) { 
			 
		}
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

