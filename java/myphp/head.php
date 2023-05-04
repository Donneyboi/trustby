<?php include "db.php" ?>
<header>
	<div class="logo-div d-flex align-items-center justify-content-center py-2 text-white">
		<img src="img/logo.PNG">
	</div>
	<div class="divlabel">
		<h4>👋, <?php $sqlname=mysqli_query($conn,"select * from signup where  id='".$_SESSION['user']."'");
   $arrrr=mysqli_fetch_array($sqlname);
   $firstname=$arrrr['firstname'];
   echo $firstname;

		  ?></h4>
		<label class="fa fa-moon" onclick="mos()"></label>
		<label class="fab fa-whatsapp"></label>
	</div>
	<div class="hidenav" onclick="document.getElementsByClassName('hidenave')[0].style.display='block'"><i class="fa fa-bars"></i></div>
</header>


<!-------------------------------------------------------------------->
<div class="hidenave">
	<div class="hidenavehead">
		<div class="divlabel">
		<h4>👋, <?php $sqlname=mysqli_query($conn,"select * from signup where  id='".$_SESSION['user']."'");
   $arrrr=mysqli_fetch_array($sqlname);
   $firstname=$arrrr['firstname'];
   echo $firstname;

		  ?></h4>
		<label class="fa fa-moon" onclick="mos()"></label>
		<label class="fab fa-whatsapp"></label>
		
	</div>
	<div class="hidenav" style="color: white; border: 1px solid white;" onclick="document.getElementsByClassName('hidenave')[0].style.display='none'"><i class="fa fa-times"></i></div>

</div>

<section class="navsec2">
	<a href="index.php" class="nav_link">
		<i class="fa fa-home"></i>
		<p>Dashboard</p>
	</a>
	<a href="wallet.php" class="nav_link">
		<i class="fa fa-wallet"></i>
		<p>Wallet</p>
	</a>

	<a href="shipping.php" class="nav_link">
		<i class="fa fa-shipping-fast"></i>
		<p>Shipment</p>
	</a>

	<a href="history.php" class="nav_link">
		<i class="fa fa-history"></i>
		<p>History</p>
	</a>




	<a href="referral.php" class="nav_link">
		<i class="fa fa-users"></i>
		<p>Referral</p>
	</a>
	<a href="profile.php" class="nav_link">
		<i class="fa fa-user"></i>
		<p>Profile</p>
	</a>

	
</section>

</div>






<div class="c"></div>
	<script type="text/javascript">
	function mos () {
	

		
		
			checklogin="id=check";
					$.ajax({
				url:"dark.php",
                 type:"GET",
                 data:checklogin,
                 contentType:false,
                 cache:false,
                 crossDomain:true,
                 processData:false,
                 beforeSend:function(data){
                 // $('.welcome').hide();
                  //$('.dashboard').html('<div class="ajaxload" style="display:flex;"><img src="img/ajax.gif"></div>');
                 },
                 success:function(data){
                  
                 	$('.c').html(data);
                 	$('body').css({"background":"black"});
                 },
                 error:function(){
                 	alert('error typing to processData');
                 }

				})
		
	}

	</script>