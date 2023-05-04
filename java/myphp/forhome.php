<?php include "db.php"; session_start();  

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TrustBuy</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
		<link rel="stylesheet" type="text/css" href="css/body.css">
	<link rel="stylesheet" type="text/css" href="css/side.css">
	<link rel="stylesheet" type="text/css" href="css/trackin.css">
	<link rel="stylesheet" type="text/css" href="css/wallet.css">
	<link rel="stylesheet" type="text/css" href="css/sideleft.css">
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="js/sweetalert-dev.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TrustBuy</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
		<link rel="stylesheet" type="text/css" href="css/body.css">
	<link rel="stylesheet" type="text/css" href="css/side.css">
	<link rel="stylesheet" type="text/css" href="css/trackin.css">
	<link rel="stylesheet" type="text/css" href="css/wallet.css">
	<link rel="stylesheet" type="text/css" href="css/sideleft.css">
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="js/sweetalert-dev.js"></script>
</head>
<body>
	<style type="text/css">
	.track{
		width: 100%;
		height: 100px;
		position: absolute;
		background-color: white;

	}
	.rows{
		width: 100%;
		height: 100px;
		display: flex;
		align-items: center;
		justify-content: space-around;
	}
	.rows>span{

	}
	.rows span>img{
		width: 100px;
		height: 100px;
		object-fit: contain;
	}
	/*mobile responsive*/
@media only screen and (max-width:900px){
	.track{
		width: 100%;
		height: 100vh;
		position:absolute ;
		background-color: white;

	}
	.rows{
		width: 100%;
		height: 100vh;
		display: flex;
		align-items: center;
		justify-content: space-around;
		flex-direction: column;
	}
	.rows>span{

	}
	.rows span>img{
		width: 100px;
		height: 100px;
		object-fit: contain;
	}
	.r1{
		display: none;
	}

}
	</style>
	
	<main class="container-fluid d-flex  mycontainer p-0" style="background-color: white; ">
<section class="track">
	<div class="rows r1" style="height: 50px;">
		<span>Name</span>
		<span>Item name</span>
		<span>Location</span>
		<span>company</span>
		<span>Image</span>
		<span>Items Amount</span>
	</div>
	<hr>
	
<?php  
$track=mysqli_escape_string($conn,$_POST['track']);
$sp=mysqli_query($conn,"select * from ordershping where trackid='$track'");
$num=mysqli_num_rows($sp);
if ($num<1) {
  echo "nothing day";
  die();
}
else{


$arr=mysqli_fetch_array($sp);
$name=$arr['name'];
$productname=$arr['productname'];
$location=$arr['location'];
$image=$arr['image'];
$company=$arr['company'];
$name=$arr['name'];
$namexxx=$arr['itemamount'];
 }?>
		<div class="rows" style="background-color: #F8FAFC;">
		<span><?php echo $name; ?></span>
		<span><?php echo $productname; ?></span>
		<span><?php echo $location; ?></span>
		<span><?php echo $company; ?></span>
		<span><img src="./myphp/img/<?php echo $image; ?>"></span>
		<span>NGN <?php echo number_format($namexxx); ?></span>
		<a href="">Back</a>
	</div>

</section>
	</main>
 

</body>
</html>