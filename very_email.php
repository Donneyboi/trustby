<!DOCTYPE html>
<html>

	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trustbuy</title>
	 <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
	 <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="icon" type="image/png" href="assets/images/favicon.png">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
	<script type="text/javascript" src="java/sweetalert-dev.js"></script>
	<script type="text/javascript" src="java/jquery-3.6.0.min.js"></script>
</head>



<!---<a href="https://trustbuy.ng/login.php">home</a>-->
<style type="text/css">
.email_verify{
	width: 100%;
	height: 100vh;
	background-color: #F1C34E;
	display: flex;
	align-items: center;
	justify-content: center;
}
.small_div{
	width: 40%;
	height: 400px;
	background-color: white;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
}
.small_div>img{
	
	height: 70px;
	background-color: white;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
}
.small_div>h3{
	height: 70px;
	background-color: white;
	display: flex;
	align-items: center;
	justify-content: center;
	font-family: sans-serif;
	
}
.small_div>a{
	width: 140px;
	height: 50px;
	border-radius: 8px;
	font-weight: bold;
	background-color: #F1C34E;
	display: flex;
	text-decoration: none;
	font-family: sans-serif;
	color: white;
	align-items: center;
	justify-content: center;
}
html,body{
	padding: 0px;
	margin: 0px;
}


/*mobile responsive*/
@media only screen and (max-width: 900px){
	.email_verify{
	width: 100%;
	height: 100vh;
	background-color: #F1C34E;
	display: flex;
	align-items: center;
	justify-content: center;
}
.small_div{
	width: 100%;
	height: 100vh;
	background-color: white;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
}
.small_div>img{
	
	height: 70px;
	background-color: white;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
}
.small_div>h3{
	height: 70px;
	background-color: white;
	display: flex;
	align-items: center;
	justify-content: center;
	font-family: sans-serif;
	
}
.small_div>a{
	width: 140px;
	height: 50px;
	border-radius: 8px;
	font-weight: bold;
	background-color: #F1C34E;
	display: flex;
	text-decoration: none;
	font-family: sans-serif;
	color: white;
	align-items: center;
	justify-content: center;
}
}
</style>


<?php  
require("db.php");

if(isset($_GET['code'])){

	$code =$_GET['code'];

	$code_email =base64_decode($code);
$var = explode(",",$code_email);
$queryUser=mysqli_query($conn,"SELECT otp,email,id FROM signup where otp='$var[0]' AND email= '$var[1]'") or die(mysql_error($conn));

 if($queryUser){

 	mysqli_query($conn,"UPDATE signup SET status = 'active',otp='' where email = '$var[1]'") or die(mysql_error($conn));

 	echo '<div class="email_verify">
	<div class="small_div">
		<img src="img/logo.png">
		<h3>E-mail Verify successful</h3>
		<a href="https://trustbuy.ng/login.php">Login Now</a>
		
	</div>
</div>';
 }




}

?>
