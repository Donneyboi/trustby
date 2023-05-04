<?php session_start(); include"db.php";
if (!isset($_SESSION['user'])) {
  header("location:https://trustbuy.ng");
}


if (1==1) {
  $name=mysqli_escape_string($conn,$_POST['name']);
  $quantity=mysqli_escape_string($conn,$_POST['quantity']);	 
  $productname=mysqli_escape_string($conn,$_POST['productname']);
  $company=mysqli_escape_string($conn,$_POST['company']);
  $email=mysqli_escape_string($conn,$_POST['email']);
  $condition=mysqli_escape_string($conn,$_POST['condition']);
  $productamount=mysqli_escape_string($conn,$_POST['productamount']);
  $location=mysqli_escape_string($conn,$_POST['location']);
  $number=mysqli_escape_string($conn,$_POST['number']);
$tradid="TYTYZX".mt_rand()."QXCB";


 if ($name=="") {
 echo "your name is empty";
 }

 elseif($quantity==""){
 	echo "Item per unit empty";
 }


elseif($productname==""){
 	echo "Item name is empty";
 }

 elseif($quantity==""){
 	echo "email is empty";
 }
 elseif($email==""){
 	echo "email is empty";
 }
 elseif($productamount==""){
 	echo "i no fit rember";
 }
 elseif($location==""){
 	echo "seller's location is empty";
 }
  elseif($number==""){
 	echo "phonenumber is empty";
 }
 else{
$se=mysqli_query($conn,"select * from money where 1");
$arr=mysqli_fetch_array($se);

 $amouti=$arr['money'];
echo "Total Purchase"." ".number_format($total=$productamount+$quantity*$amouti)." "."<br> ";

$selx=mysqli_query($conn,"select * from deposit where user='".$_SESSION['user']."'");
$ee=mysqli_fetch_array($selx);
echo "And your wallet is Blance"." ". number_format($depamount=$ee['amount']);

if ($total>$depamount) {
 echo"<script type='text/javascript'>swal('alert','you account is low','error')</script>"; 
}



else{


 	      $rand=mt_rand().mt_rand();
			$filename=$_FILES['image']['name'];
			$folder="img/";
			$mainfile=$folder.$rand.$filename;
			$mainfile2=$rand.$filename;
			//$filetype=$_FILES['myfile']['name'];
			$filetype2=pathinfo($filename,PATHINFO_EXTENSION);
			$filename2=$_FILES['image']['tmp_name'];
			if (move_uploaded_file($filename2,$mainfile)) {
				
$insert=mysqli_query($conn,"insert into ordershping(name,quantity,productname,company,email,issus,itemamount,location,number,image,total,trackid,status,user)values
 ('$name','$quantity','$productname','$company','$email','$condition','$productamount','$location','$number','$mainfile2','$total','$tradid','pending','".$_SESSION['user']."')");
$inid=mysqli_insert_id($conn);
$messss="You have an Order on Please go to Trustbuy.ng"."Receipt Id".$tradid;
$subject="Trustbuy Receipt";
$headrm="From:TrustbuyTeam";
$mail1=mail($email, $subject, $messss,$headrm);

if ($insert) {
  echo"<script type='text/javascript'>swal('success','Request Processing','success');window.location.href='recipient.php?fff=$inid'</script>";

}
			}
      }
 }

} 
 ?>