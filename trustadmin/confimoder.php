<?php include "db.php"; session_start();
if (!isset($_SESSION['admin'])) {
echo "<script>swal('success','Confirm successfuly','success')</script>";
}
$selx=mysqli_query($conn,"select * from ordershping where id='".$_GET['id']."'");
$arr=mysqli_fetch_array($selx);
$user=$arr['user'];
$total=$arr['total'];
$update=mysqli_query($conn,"update deposit set amount=amount-$total where user='$user'");
$update=mysqli_query($conn,"update ordershping set status='confirm' where id='".$_GET['id']."'");

if ($update) {
	echo " <script>swal('success','Confirm successfuly','success')</script>";
}
 ?>
