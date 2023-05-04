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
	<link rel="stylesheet" type="text/css" href="css/who.css">
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
	<section class="who_div">
		<h1>We are TrustBuy </h1>
		<p>Changing the way you checkout at Online Stores</p>
	</section>
	<section class="who_small">
		<div class="small_div"><h1>Changing the way you checkout at Online Stores</h1>
			<p>
Trustbuy like any other logistics company, at Trustbuy we are a combination of payment and logistics technology.
Trustbuy doesn't just send and receive items for you.
We buy items from online stores in your name, making sure you don't get scammed online, making us stand out.</p></div>


<!------------------------------------------->
<div class="small_div"><h1>The Magic we make</h1>
			<p>Trustbuy contacts your sellers immediately via E-mail and voice call whenever you make an order to a third party seller or a business on Trustbuy, then we contact you via video call for confirmation.
Trustbuy will cancel an order if unable to confirm sellers within 62hrs.</p></div>
<!------------------------->

<div class="small_div"><h1>Mobile Wallet</h1>
			<p>Trustbuy requires you to have a minimum fee that covers your merchant and billing cost, we as Trustbuy will never deduct any hidden funds from your mobile wallet..</p></div>

	</section>

	<section class="whoimage_and">
	<div class="who_imagess_bg"></div>
	</section>

	
	
</main>


<h1 class="found_title">Meet Our Founders</h1>
<div class="images">





		<div class="small_name">
		<img src="img/IMG_0508.jpeg">
		<h3>Samuel Nicholas</h3>
		<p>CO Founder/CEO</p>
		<div class="link_small">
			<a href="https://www.facebook.com/samuel.nicholas.16752?mibextid=ZbWKwL"class='bx bxl-facebook-circle'></a>
				<a href="" class='bx bx-envelope'></a>
					<a href="http://Wa.me/2348021992046" class='bx bxl-whatsapp'></a>
					<a href="https://www.linkedin.com/in/samuel-nicholas-342306208" class='bx bxl-linkedin' ></a>


		</div>
	</div>






	<div class="small_name">
		<img src="img/IMG_3344.jpeg">
		<h3>Dominic mathew</h3>
		<p>CO Founder/Coo</p>
		<div class="link_small">
			<a href="https://www.facebook.com/profile.php?id=100086398347696&mibextid=LQQJ4d"class='bx bxl-facebook-circle'></a>
				<a href="" class='bx bx-envelope'></a>
					<a  href="http://Wa.me/23408143792442" class='bx bxl-whatsapp'></a>
					<a href="https://www.linkedin.com/in/dominic-stephen-33a20224b/" class='bx bxl-linkedin' ></a>


		</div>
	</div>



		<div class="small_name">
		<img src="img/019a8d3a-2bc4-4857-83d0-e9a66c7469bc.jfif">
		<h3>Obed Okemsinachi</h3>
		<p>CO Founder/CTO</p>
		<div class="link_small">
			<a href="https://www.facebook.com/itzobed.ihekaike?mibextid=LQQJ4d"class='bx bxl-facebook-circle'></a>
				<a href="obedokemsinachi@gmail.com" class='bx bx-envelope'></a>
					<a href="http://Wa.me/2348124731527" class='bx bxl-whatsapp'></a>
					<a href="https://www.linkedin.com/in/dominic-stephen-33a20224b/" class='bx bxl-linkedin' ></a>


		</div>
	</div>





		<div class="small_name">
		<img src="img/af52145f-4341-4c2e-95db-c2f2d175368f.jfif">
		<h3>Faith chilio</h3>
		<p>Chief Marketer</p>
		<div class="link_small">
			<a href=""class='bx bxl-facebook-circle'></a>
				<a href="" class='bx bx-envelope'></a>
					<a class='bx bxl-whatsapp'></a>
					<a href="https://www.linkedin.com/in/dominic-stephen-33a20224b/" class='bx bxl-linkedin' ></a>


		</div>
	</div>
	

</div>
</body>
</html>
