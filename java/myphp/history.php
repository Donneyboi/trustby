<?php include "db.php"; session_start();

 if (!isset($_SESSION['user'])) {
	// code...
}?>
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
	<link rel="stylesheet" type="text/css" href="css/history.css">
	<link rel="stylesheet" type="text/css" href="css/sideleft.css">
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="js/sweetalert-dev.js"></script>
</head>
<body>
	<?php  include "head.php"; ?>
	<main class="container-fluid d-flex  mycontainer p-0">
	<?php  include "side.php"; ?>
	<div class="body">
		<h1 class="containerh1">Activites</h1>
		<div class="mytable">
			<?php $sql=mysqli_query($conn,"select * from ordershping where 1");


			while($arr=mysqli_fetch_array($sql)){ 
             $user=$arr['user'];
             $productname=$arr['productname'];
             $total=$arr['total'];
            $sel=mysqli_query($conn,"select * from signup where id='$user'");
            $l=mysqli_fetch_array($sel);
            $firstname=$l['firstname'];
            $lastname=$l['lastname'];
			 ?>
			<div class="rows_rows">
				<span><?php echo $firstname." ".$lastname  ?></span>
				<span>Purchased</span>
				<span><?php echo $productname  ?></span>
				<span>NGN <?php echo number_format($total); ?></span>

			</div>
		<?php } ?>
		</div>


	</div>
	<?php  include "leftside.php"; ?>	
	</main>



</body>
</html>