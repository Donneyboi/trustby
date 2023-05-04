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

<h3 class="mh3">seller information  <p></p></h3>
  <script type="text/javascript">
        $(document).ready(function () {
        $('.shp_form').on('submit',function (para) {
          para.preventDefault();
          $.ajax({
                url:"processorder.php",
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
                  $('.loadmyp').css({"display":"flex","align-items":"center","justify-content":"center","color":"green"});
                 },
                 error:function(){
                  //alert('error typing to processData');
                 }

          })
        });
        })
      </script>
<form class="shp_form" method="post" action="processorder.php" enctype="multiple/form-data">
	<div class="loadmyp"></div>
	<div class="group d-flex align-items-center justify-content-around">
		<input type="text" name="name" placeholder="Name" class="form-control">
		<input type="number" name="quantity" placeholder="Item per unit" class="form-control">
		
	</div>
		<div class="group d-flex align-items-center justify-content-around">
		<input type="text" name="productname" placeholder="Item Name" class="form-control">
		<input type="text" name="company" placeholder="Seller's company Name" class="form-control">
	</div>

		<div class="group d-flex align-items-center justify-content-around">
		<input type="text" name="email" placeholder="Seller's Email" class="form-control">
		<input type="text" name="condition" placeholder="item condition" class="form-control">
	</div>

		<div class="group d-flex align-items-center justify-content-around">
			<input type="number" name="productamount" placeholder="Amount deposit" class="form-control">
		<input type="text" name="location" placeholder="Seller's Location" class="form-control">
		
	</div>
	<div class="group d-flex align-items-center justify-content-around">
		<input type="number" name="number" placeholder="whatsapp Number" class="form-control">
		<input type="file" name="image" placeholder="" class="form-control">
	</div>
	<p>please insert photograph of the picture</p>
	<div class="group">
		<button class="btn btn-warning">Ship Now</button>
	</div>
</form>


	</div>
	<?php  include "leftside.php"; ?>	
	</main>



</body>
</html>