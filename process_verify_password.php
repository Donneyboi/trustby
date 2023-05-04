

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trustbuy</title>
     <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
<?php  include "db.php";
if (isset($_POST['xxx'])) {
$password=mysqli_escape_string($conn,$_POST['password']);
$renewPassword=mysqli_escape_string($conn,$_POST['renewPassword']);
$update=mysqli_escape_string($conn,$_POST['update']);
$selx=mysqli_query($conn,"select * from signup where id='".$_GET['newpage']."'");
$arrll=mysqli_fetch_array($selx);
$otpxxxx=$arrll['fotp'];

if ($password=="") {
	echo "<script>swal('Alert','Password Is empty','error');</script>";
}
elseif (strlen($password)<4) {
	//echo "password must be at least 6 character";
	echo "<script>swal('Alert','password must be at least 6 character','error');</script>";
}
elseif ($password!=$renewPassword) {
	//echo "password must be at least 6 character";
	echo "<script>swal('Alert','password must not match','error');</script>";
}
elseif ($update=="") {
 		echo "<script>swal('Alert','Enter OTP','error');</script>";
 }
  elseif($otpxxxx!=$update){
 	echo "<script>swal('Alert','Incorrect OTP','error');</script>";
 }
 elseif($otpxxxx!=$update){
 	echo "<script>swal('Alert','Incorrect OTP','error');</script>";
 }
else{
	$updateccc=mysqli_query($conn,"update signup set password='$update' where id='".$_GET['newpage']."'");
	if ($updateccc) {
		echo "<script>swal('Success','Password Updated Sucessful','success');</script>";
	}
}
}

?>
<style type="text/css">
.otpdiv{
	width: 100%;
	height: 100vh;
	background-color: #FFC107;
  display: flex;
  align-items: center;
  justify-content: center;
}
html,body{
	padding: 0px;
	margin: 0px;
}	
.otpform{
	width: 40%;
	height: 500px;
	border-radius: 5px;
	background-color: white;
	display: flex;
	align-items: center;
	justify-content: space-evenly;
	flex-direction: column;
}
.otpform>input{
	width: 80%;
	height: 45px;
	outline: none;
	border: 1px solid grey;
	border-radius: 6px;
	}
	.otpform>a{
	width: 160px;
	height: 40px;
	display: flex;
	text-decoration: none;
	align-items: center;
	justify-content: center;
	}
	.otpform>img{
	
	object-fit: contain;
	height: 100px;
	}
	::placeholder{
		padding: 10px;
		font-family: sans-serif;
	}
	/*mobile responsive*/
@media only screen and (max-width:900px){
	.otpform{
	width: 100%;
	height: 100vh;
	border-radius: 0px;
	background-color: white;
	display: flex;
	align-items: center;
	justify-content: space-evenly;
	flex-direction: column;
}
.otpdiv{
	width: 100%;
	height: 100vh;
	background-color: white;
  display: flex;
  align-items: center;
  justify-content: center;
}
}
</style>
<section class="otpdiv">
<form method="post" action="" class="otpform">
	<img src="img/ttt.jpg">
	<h3>Reset Password</h3>
	<input type="password" name="password" placeholder="Password">
	<input type="password" name="renewPassword" placeholder="Re-Password">
	<input type="number" name="update" placeholder="Enter OTP">

	<input type="submit" name="xxx" value="Rest Password" style="background-color: #FFC107; border: none;">
	<a href="">Back</a>
</form>
</section>