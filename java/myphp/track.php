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
</head>
<body>
	<?php  include "head.php"; ?>
	<main class="container-fluid d-flex  mycontainer p-0" style="background-color: white;">
<section class="track">
	<div class="rows r1" style="height: 50px;">
		<span>Name</span>
		<span>Item name</span>
		<span>Location</span>
		<span>company</span>
		<span>Image</span>
		<span>Action</span>
	</div>
	<hr>
<?php  $sp=mysqli_query($conn,"select * from ordershping where id='".$_GET['fff']."'");
       $num=mysqli_num_rows($sp);
$arr=mysqli_fetch_array($sp);
$name=$arr['name'];
$productname=$arr['productname'];
$location=$arr['location'];
$image=$arr['image'];
$company=$arr['company'];
$name=$arr['name'];
 ?>
		<div class="rows" style="background-color: #F8FAFC;">
		<span><?php echo $name; ?></span>
		<span><?php echo $productname; ?></span>
		<span><?php echo $location; ?></span>
		<span><?php echo $company; ?></span>
		<span><img src="img/<?php echo $image; ?>"></span>
		<span><button class="btn btn-primary">Recieve</button></span>
	</div>

</section>
	</main>



</body>
</html>