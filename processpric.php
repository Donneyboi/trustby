<?php include "db.php";

if (1==1) {
	$pricing=mysqli_escape_string($conn,$_POST['pricing']);
	$database=$_POST['database'];
	echo "NGN"." ". number_format($pricing*$database);
}

 

  ?>