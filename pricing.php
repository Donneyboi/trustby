<?php include "db.php" ?>
<!DOCTYPE html>
<html>
<head>
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
	<link rel="stylesheet" type="text/css" href="css/pricing.css">
	<link rel="icon" type="image/png" href="assets/images/favicon.png">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
	<script type="text/javascript" src="java/sweetalert-dev.js"></script>
	<script type="text/javascript" src="java/jquery-3.6.0.min.js"></script>
</head>
<body>
<div class="head"></div>
		<script type="text/javascript">
	$(document).ready(function() {
				header="id=header";
					$.ajax({
				url:"header.php",
                 type:"GET",
                 data:header,
                 contentType:false,
                 cache:false,
                 crossDomain:true,
                 processData:false,
                 beforeSend:function(data){
                 },
                 success:function(data){
                   //$('.welcome').hide();
                 	$('.head').show();
                 	$('.head').html(data);
                 },
                 error:function(){
                 	//alert('error typing to processData');
                 }

				})
		
	})

	</script>

<body>
<main>
	<section class="pricing">
		<h1>
We charge at NGN1,800 per unit for items that weigh 1KG, making us the cheapest.</h1>
	</section>
	<!------------------------------------------->
	<section class="cal_div">
		    <script type="text/javascript">
        $(document).ready(function () {
        $('.calculate').on('keyup',function (para) {
          para.preventDefault();
          $.ajax({
                url:"processpric.php",
                 type:"post",
                 data:new FormData(this),
                 contentType:false,
                 cache:false,
                 processData:false,
                 beforeSend:function(){
                   // $('.loadmyp').html('<div class="ajax"><img src="img/loading.gif"></div>');
                     $('.loadmyp').css({"display":"flex","align-items":"center","justify-content":"center","color":"green"});
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
		<form class="calculate" action="processpric.php" method="post">
			<input type="text" name="pricing" placeholder="Unit Per Item (Use the Caculator)">
			<div class="price_amout">
				<span>Shipping rate</span>
				<span>NGN <?php $se=mysqli_query($conn,"select * from money where 1");
                           $arr=mysqli_fetch_array($se);
                            echo number_format($amouti=$arr['money']);

  ?></span>
			</div>
			  <input type="hidden" name="database" value="<?php echo $amouti;?> ">

			<div class="price_amout">
				<span>Total to pay</span>
				<button type="button" class="loadmyp">NGN 0</button>
			</div>
		</form>
		</section>

	
	
</main>

<div class="rubisgh"></div>
</body>
</html>
