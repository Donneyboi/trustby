<?php  session_start(); include "db.php";

if (1==1) {
$firstname=mysqli_escape_string($conn,$_POST['firstname']);
$lastname=mysqli_escape_string($conn,$_POST['lastname']);
$email=mysqli_escape_string($conn,$_POST['email']);
$number=mysqli_escape_string($conn,$_POST['number']);
$state=mysqli_escape_string($conn,$_POST['state']);
$city=mysqli_escape_string($conn,$_POST['city']);
$password=mysqli_escape_string($conn,$_POST['password']);
$cpassword=mysqli_escape_string($conn,$_POST['cpassword']);
$date=time();

if ($firstname=="") {
	echo "firstname is empty";
}
elseif ($lastname=="") {
	echo "lastname is empty";
}
elseif ($email=="") {
	echo "email is empty";
}
elseif ($number=="") {
	echo "input your phonenumber";
}
elseif ($state=="") {
	echo "state filed is empty";
}
elseif ($city=="") {
	echo "city filed is empty";
}
elseif ($password=="") {
	echo "password is empty";
}

elseif ($password!=$cpassword) {
	echo "password doest match";
}
else{
	$sql=mysqli_query($conn,"select * from signup where email='$email'");
	$nums=mysqli_num_rows($sql);
	if ($nums>0) {
		echo "Email already exit";
	}
	else{

		$mt=mt_rand(0,999999);

		$otpcode=str_pad($mt, 0,6);


		$inset=mysqli_query($conn,"insert into signup(firstname,lastname,email,number,state,city,password,date,otp)values('$firstname','$lastname','$email','$number','$state','$city','$password','$date','$otpcode')");
		if ($inset) {
			$userid=mysqli_insert_id($conn);
			$_SESSION['user']=$userid;

			$usercode=$otpcode.",".$email;
			$code = base64_encode($usercode);

		$url = "http://localhost/trustbuy/very_email.php?code=$code";
			try{

			//Server settings
			   // $mailler->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
			    $mailler->isSMTP();                                            //Send using SMTP
			    $mailler->Host       = 'smtp.trustbuy.ng';                     //Set the SMTP server to send through
			    $mailler->SMTPAuth   = true;                                   //Enable SMTP authentication
			    $mailler->Username   = 'support@trustbuy.ng';                     //SMTP username
			    $mailler->Password   = 'sammy800';                               //SMTP password
			    $mailler->SMTPSecure = 'tls';            //Enable implicit TLS encryption
			    $mailler->Port       = 587;                                   


			    //Recipients
			    $mailler->setFrom('support@trustbuy.ng', 'Trustbuy');
    			$mailler->addAddress($email, $firstname." ".$lastname); 
			    //Content
			    $mailler->isHTML(true);                                  //Set emailler format to HTML
			    $mailler->Subject = 'Emailler Verification';
			    $mailler->Body    = 'Hello '.$firstname.', <br />
			    	Kindly click on the link below to verify your emailler <br />
			    	<a href="'.$url.'">'.$url.'</a>  <br />

			    	Regards, <br />
			    	TrustBuy Team.
			    ';
			  


			    $mailler->send();
    		echo 'Message has been sent';
		} catch (Exception $e) {
		    echo "Message could not be sent. maillerer Error: {$mailler->ErrorInfo}";
		}
			// echo "<script>
   //            swal('success','signup successful','success');
   //           window.location.href='myphp/index.php'

			// </script>";
		}
	}
}







}




?>