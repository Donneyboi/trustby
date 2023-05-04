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
	<link rel="stylesheet" type="text/css" href="css/wallet.css">
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

		<?php 
		//session_destroy();

		if(isset($_SESSION['error'])){
			echo $_SESSION['error'];

			unset($_SESSION['error']);
		
		}
			
			if(isset($_SESSION['success'])){

				echo $_SESSION['success'];

			unset($_SESSION['success']);
			}
		?>

<?php $sqlxxx=mysqli_query($conn,"select * from deposit where   user='".$_SESSION['user']."'");
$numsx=mysqli_num_rows($sqlxxx);
   

  ?>
	<section class="wallet_div">
		<div class="bg_wallet">
			<div class="tp_wallet">
				<h2><p>Balance</p>VISA</h2>
				<h1>NGN 
					<?php if ($numsx<1) {
					echo 0;
				} 
				else{
     $sql=mysqli_query($conn,"select * from deposit where   user='".$_SESSION['user']."'");
$numsx=mysqli_num_rows($sql);
     $arrl=mysqli_fetch_array($sql);
      $amount=$arrl['amount'];
       $user=$arrl['user'];
      

				 echo number_format($amount);}  ?></h1>
				<p>Cardholder Name</p>
				<span><?php 


 $sqln=mysqli_query($conn,"select * from signup where id='".$_SESSION['user']."' ");
       $arrn=mysqli_fetch_array($sqln);
       $firstname=$arrn['firstname'];
       $lastname=$arrn['lastname'];
				 echo $firstname." ".$lastname; ?><img src="img/visa.PNG"></span>
			</div>
		</div>



	</section>
	<!--
	     <script type="text/javascript">
        $(document).ready(function () {
        $('.fund_form').on('submit',function (para) {
          para.preventDefault();
          $.ajax({
                //url:"wallet_process.php",
                 type:"post",
                 data:new FormData(this),
                 contentType:false,
                 cache:false,
                 processData:false,
                 beforeSend:function(){
                   // $('.loadmyp').html('<div class="ajax"><img src="img/loading.gif"></div>');
                     $('.loadmyp').css({"display":"flex","align-items":"center","justify-content":"center","color":"red"});
                 },
                 success:function(para2){
                  $('.loadmyp').html(para2);
                  $('#wale').val(null);
                 },
                 error:function(){
                  //alert('error typing to processData');
                 }

          })
        });
        })
      </script>
    -->
	<form class="fund_form" action="wallet_process.php" method="post">
		<label class="loadmyp"></label>
		<h2>Fund Account</h2>
		<input type="" name="wallet" class="form-control" placeholder="Amount" id="wale">
		<input type="submit" name="wall" class="btn btn-warning" value="Fund wallet" >
	</form>


	</div>
	<?php  include "leftside.php"; ?>	
	</main>



</body>
</html>