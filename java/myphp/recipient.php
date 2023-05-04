<?php session_start(); include "db.php"; ?>
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
	<link rel="stylesheet" type="text/css" href="css/shipping.css">
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
		<div class="card">
			<div class="card-header d-flex align-items-center justify-content-center ">
				<h1>Recipent</h1>
			</div>

			<?php $sle=mysqli_query($conn,"select * from ordershping where id='".$_GET['fff']."'");
			$arr=mysqli_fetch_array($sle);
			$name=$arr['name'];
				$quantity=$arr['quantity'];
					$productname=$arr['productname'];
						$company=$arr['company'];
							$email=$arr['email'];
								$issus=$arr['issus'];
									$itemamount=$arr['itemamount'];
										$location=$arr['location'];
											$number=$arr['number'];
												$total=$arr['total'];
													$trackid=$arr['trackid'];
													$status=$arr['status'];
													$image=$arr['image'];


			  ?>
				<div class="card-body">
					<div class="col"><h3><label>Name</label><?php  echo $name; ?></h3></div>
					<div class="col"><h3><label>quantiy</label><?php  echo $quantity; ?></h3></div>
					<div class="col"><h3><label>productname</label><?php  echo $productname; ?></h3></div>
					<div class="col"><h3><label>company</label><?php  echo $company; ?></h3></div>
					<div class="col"><h3><label>email</label><?php  echo $email; ?></h3></div>
					<div class="col"><h3><label>issus</label><?php  echo $issus; ?></h3></div>
					<div class="col"><h3><label>itemamount</label><?php  echo $itemamount; ?></h3></div>
					<div class="col"><h3><label>location</label><?php  echo $location; ?></h3></div>
					<div class="col"><h3><label>number</label><?php  echo $number; ?></h3></div>
					<div class="col"><h3><label>total</label><?php  echo $total; ?></h3></div>
					<div class="col"><h3><label>trackid</label><?php  echo $trackid; ?></h3></div>
					<div class="col"><h3><label>item Image</label><img src="img/<?php  echo $image; ?>"></h3></div>
					<div class="col"><h3><label>status</label><?php  echo $status; ?></h3></div>

				</div>
					<div class="card-footer"></div>
		</div>
</div>
	<?php  include "leftside.php"; ?>	
	</main>



</body>
</html>