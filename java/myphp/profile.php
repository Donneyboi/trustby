<?php include "db.php"; session_start();  ?>
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
	<link rel="stylesheet" type="text/css" href="css/profile.css">
	<link rel="stylesheet" type="text/css" href="css/sideleft.css">
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="js/sweetalert-dev.js"></script>
</head>
<body>
	<?php  include "head.php"; ?>
	<main class="container-fluid d-flex  mycontainer p-0" style="background-color:white;">
	<?php  include "side.php"; ?>
	<div class="body" style="display: flex; align-items: center; justify-content: center;">
		<div class="profile">
			<h3 class="text-muted h3">Account Setting<button class="btn btn-warning">Update Detaile</button></h3>
			<form>
			<div class="div">
				<input type="text" name="firstname" placeholder="Firstname" class="form-control">
				<input type="text" name="firstname" placeholder="Lastname" class="form-control">
			</div>
				<div class="div">
				<input type="text" name="firstname" placeholder="E-mail" class="form-control">
				<input type="text" name="firstname" placeholder="PhoneNumber" class="form-control">
			</div>
				<div class="div">
				<input type="text" name="firstname" placeholder="State" class="form-control">
					<input type="text" name="firstname" placeholder="City" class="form-control">
				
			</div>
			</form>
			<h3 class="h3">Change password<button class="btn btn-warning">Change Password</button></h3>
			<form>
					<div class="div">
				<input type="text" name="firstname" placeholder="OLd Password" class="form-control">
				<input type="text" name="firstname" placeholder="New Password" class="form-control">
			</div>
			</form>

		</div>
</div>
	<?php  include "leftside.php"; ?>	
	</main>



</body>
</html>