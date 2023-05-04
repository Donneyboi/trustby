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
<body>
	      <script type="text/javascript">
        $(document).ready(function () {
        $('.fropass').on('submit',function (para) {
          para.preventDefault();
          $.ajax({
                url:"process_forget_password.php",
                 type:"post",
                 data:new FormData(this),
                 contentType:false,
                 cache:false,
                 processData:false,
                 beforeSend:function(){
                   // $('.loadmyp').html('<div class="ajax"><img src="img/loading.gif"></div>');
                    // $('.loadmyp').css({"display":"flex","align-items":"center","justify-content":"center","color":"red"});
                 },
                 success:function(para2){
                  $('.loadmyp').html(para2);
                 },
                 error:function(){
                  //alert('error typing to processData');
                 }

          })
        });
        })
      </script>
      <style type="text/css">
      	.emaildiv{
      		width: 100%;
      		height: 100vh;
      		background-color: #FFC107;
      		display: flex;
      		align-items: center;
      		justify-content: center;

      	}
      	.fropass{
      		width: 40%;
      		height: 500px;
      		background-color: white;
      		display: flex;
      		align-items: center;
      		border-radius: 5px;
      		justify-content: center;
      		flex-direction: column;
      	}
      		.fropass>img{
      		height: 100px;
      		background-color: white;
      		display: flex;
      		align-items: center;
      		border-radius: 5px;
      		justify-content: ;
      		flex-direction: column;
      	}
      	.fropass>input{
      		height: 45px;
      		width: 80%;
      		margin-top: 10px;
      		border-radius: 5px;
      		outline: none;
      		border: 1px solid gray;
      	
      	}
      	.fropass>p{
      		margin-top:10px ;
            font-size: 12px;	
      		width: 80%;
      		height: 30px;
      	
      	}
      		.fropass>a{
      	     margin-top: 30px;
           text-decoration: none;
      	
      	}
      </style>
      <section class="emaildiv">
	<form method="post" action="process_forget_password.php" class="fropass">
		<img src="img/email.jpg">
		<h3>Verify Email</h3>
		<p>An OTP will be sent to this Email check your spam folder to verify it</p>
		<div class="loadmyp"></div>
		<input type="email" name="email" placeholder="Email Address">
		<input type="submit" name="x" value="Send Otp" style="background-color: #FFC107; border: none;">
		<a href="">Back</a>
	</form>
</section>
</body>
</html>