<?php include "db.php";
if (1==1) {
	$subject="Trustbuy Support";
	 $mt=mt_rand(0,999999);
     $otpcode=str_pad($mt, 0,6);
	$message="There's one quick step you need to complete before changing your password.".$otpcode;
	$email=mysqli_escape_string($conn,$_POST['email']);
	if ($email=="") {
	echo "<script>swal('Alert','Email is empty','error')</script>";
	}
	else{
		$sel=mysqli_query($conn,"select * from signup where email='$email'");
		$arr=mysqli_fetch_array($sel);
		$id=$arr['id'];
		$nums=mysqli_num_rows($sel);
		if ($nums<1) {
			echo "<script>
     	swal('Alert','E-mail dont Exit','error');
     	
     	</script>";
		}
		else{
			  $headers="From"."Trustbuy TEAM";
		 if (mail($email,$subject,$message,$headers)) {
		  	echo 
		  } 
		  else{
		 $insert=mysqli_query($conn,"update signup set fotp='$otpcode' where email='$email'");
		 if ( $insert) {
		 	 //header("location:process_verify_password.php");
		 	 echo "<script>
             window.location.href='process_verify_password.php?newpage=$id'

			 </script>";
		 }
		 }

		   

		}
	}
}



 ?>