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
	<link rel="stylesheet" type="text/css" href="css/faq.css">
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
	<section class="faq_div"></section>
	<section class="faq_div_row">

		<h1><span>FAQ</span>Frequently Asked Questions</h1>
		<div class="col_div">
			<div class="talk_div">
				<h2>How long does it takes to get an item i'm paying for?</h2>
				<p>At Trustbuy we ship everytime we recieve and order so it takes atleast two days after confirmation.</p>
			</div>
   

	<div class="talk_div">
				<h2>How does Trustbuy ensure am not getting scammed online?</h2>
				<p>Whenever you make an order using trustbuy, We hold your funds online while we take out time to contact your seller and we contact you via whatsapp with the items photograph for verification. </p>
			</div>


				<div class="talk_div">
				<h2>How long does it takes to get an item i'm paying for?</h2>
				<p>At Trustbuy we ship every time we recieve and order so it takes atleast two days after confirmation.</p>
			</div>
   

	<div class="talk_div">
				<h2>How does Trustbuy ensure am not geting scammed online?</h2>
				<p>Whenever you make an order, We take out time to contact the seller and we contact you by video call on whatsapp.</p>
			</div>
   
		</div>








	</section>


	
	
</main>
</body>
</html>
