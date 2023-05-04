<?php session_start(); include "db.php";
if (1==1) {
	$tr=$_POST['tract'];
	$tract=mysqli_query($conn,"select * from  ordershping where trackid='$tr'");
	$arr=mysqli_fetch_array($tract);
	
	$num=mysqli_num_rows($tract);
	if ($num<1) {

		echo "<script>swal('Alert','Nothing found','error')</script>";
	}
	else{
		$id=$arr['id'];
		//echo "good".;
		echo"<script type='text/javascript'>swal('success','Request Processing','success');window.location.href='track.php?fff=$id'</script>";
	}
}


 ?>