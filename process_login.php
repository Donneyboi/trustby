<?php session_start(); include "db.php";
if (1==1) {
$email=mysqli_escape_string($conn,$_POST['email']);
$password=mysqli_escape_string($conn,$_POST['password']);
if ($email=="") {
	echo "email is empty";
}
elseif($password==""){
	echo "password is empty";
}
else{
     $selectadmin=mysqli_query($conn,"select * from admin where email='$email' and password='$password'");
     $numadmin=mysqli_num_rows($selectadmin);
     $arradmin=mysqli_fetch_array($selectadmin);




	$selectuser=mysqli_query($conn,"select * from signup where email='$email' and password='$password'");
	 $numuser=mysqli_num_rows($selectuser);
     $arruser=mysqli_fetch_array($selectuser);


     if ($numadmin>0) {
     	$adminid=$arradmin['id'];
     	$_SESSION['admin']=$adminid;
     	echo"<script>
     	swal('success','login success','success');
     	window.location.href='trustadmin/index.php';
     	</script>";

     }
     
     elseif($numuser>0){
     	$userid=$arruser['id'];
     	$_SESSION['user']=$userid;
      $_SESSION['email']=$arruser['email'];
     // die($_SESSION['email']);
     	echo"<script>
     	swal('success','login success','success');
     	window.location.href='myphp/index.php';
     	</script>";	
     }


    else{
    	echo " user not found";
    }




}
}
  ?>