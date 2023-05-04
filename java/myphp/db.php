<?php $conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"trustbuy"); 

$query=mysqli_query($conn,"select * from setting where id=1");
$paystackKey=mysqli_fetch_array($query);

 ?>