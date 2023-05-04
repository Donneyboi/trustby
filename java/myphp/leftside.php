<?php  include "db.php";  ?>

<section class="leftside">
	<?php $sel=mysqli_query($conn,"select * from history where status='confirm' and user='".$_SESSION['user']."' ");
	 while($arrr=mysqli_fetch_array($sel)){
	  $numss=mysqli_num_rows($sel);
	  $mess=$arrr['message'];
	  	  $amount=$arrr['amount'];
	  	  $time=$arrr['time'];
	  	  $date=date("h sa",$time);
     if ($numss<1) {
     	echo  "<h3>Nothing found</h3>";
     }
     else{
	   ?>
<div class="small_not">
	<h3><?php echo $mess; ?><p>NGN <?php echo number_format($amount); ?></p><span> TIME <?php echo $date; ?></span></h3>

</div>

<?php }} ?>	
</section>