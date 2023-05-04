<?php include "db.php"; session_start();
if(isset($_POST['wall'])){

	$wallet=mysqli_escape_string($conn,$_POST['wallet']);
	$time=time();
	if ($wallet=="") {
	
	  $_SESSION['error']="enter amount";
			header("location:https://trustbuy.ng/myphp/wallet.php");

	}

	if($wallet <=100){

		
	  $_SESSION['error']="Minimium value should be 100";
			header("location:https://trustbuy.ng/myphp/wallet.php");
	}

	

			$deposit=mysqli_query($conn,"insert into history(user,amount,time)values('".$_SESSION['user']."','$wallet','$time')");
                $deposite_id=mysqli_insert_id($conn);
			if($deposit){

			$curl = curl_init();
	
			$email = $_SESSION['email'];
			$amount = $wallet."00";  //the amount in kobo. This value is actually NGN 300
			
			//paystack key
			
		

			// url to go to after payment
			$callback_url = "location:https://trustbuy.ng/myphp/wallet_process.php";
			
			
			curl_setopt_array($curl, array(
			  CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_SSL_VERIFYHOST =>false,
			  CURLOPT_SSL_VERIFYPEER =>false,
			  CURLOPT_CUSTOMREQUEST => "POST",
			  CURLOPT_POSTFIELDS => json_encode([
				'amount'=>$amount,
				'email'=>$email,
				'callback_url' => $callback_url,
				'metadata'=>['deposite_id'=>$deposite_id],
			  ]),
			  CURLOPT_HTTPHEADER => [
				"authorization: Bearer ".$paystackKey['paystack_sk_key']."", //replace this with your own test key sk_test_b0469f08244486eac6153bbd5931a767910047ac
				"content-type: application/json",
				"cache-control: no-cache"
			  ],
			));
			
			$response = curl_exec($curl);
			$err = curl_error($curl);
			
		
			if($err){
			    
			    
			  // there was an error contacting the Paystack API
			  $_SESSION['error']=$err;
			header("location:https://trustbuy.ng/myphp/wallet.php");
			 // die('Curl returned error: ' . $err);
			}
			
			$tranx = json_decode($response, true);
			
			if(!$tranx['status']){
			    
			  // there was an error from the API
			 // print_r('API returned error: ' . $tranx['message']);
			  $_SESSION['error']=$tranx['message'];
			  header("location:https://trustbuy.ng/myphp/wallet.php");
			}
			 
			 mysqli_query($conn,"UPDATE history SET reference='".$tranx['data']['reference']."' WHERE id='".$deposite_id."' AND user='".$_SESSION['user']."' ");


			// comment out this line if you want to redirect the user to the payment page
			//print_r($tranx);
			// redirect to page so User can pay
			// uncomment this line to allow the user redirect to the payment page
			 header("location:".$tranx['data']['authorization_url']);

		}
}


		if(isset($_GET['reference'])){


			$curl = curl_init();
						$reference = isset($_GET['reference']) ? $_GET['reference'] : '';
						if(!$reference){
							 $_SESSION['error']='Payment failed, No reference supplied';
			 				header("location:https://trustbuy.ng/myphp/wallet.php");
						
						die('No reference supplied');
						}
	
						curl_setopt_array($curl, array(
						CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
						CURLOPT_RETURNTRANSFER => true,
						CURLOPT_SSL_VERIFYHOST =>false,
			  			CURLOPT_SSL_VERIFYPEER =>false,
						CURLOPT_HTTPHEADER => [
							"accept: application/json",
							"authorization: Bearer ".$paystackKey['paystack_sk_key']."",
							"cache-control: no-cache"
						],
						));
	
						$response = curl_exec($curl);
						$err = curl_error($curl);
	
						if($err){
							 $_SESSION['error']='Curl returned error'. $err;
			 				header("location:https://trustbuy.ng/myphp/wallet.php");
									// there was an error contacting the Paystack API
						die('Curl returned error: ' . $err);
						}
	
						$tranx = json_decode($response);
						// echo "<pre>";
						// print_r($tranx);
						// echo "</pre>";
						// die();
						//var_dump($tranx->data->metadata->cart_id);
						//die();
						if(!$tranx->status){
						// there was an error from the API
				
						 $_SESSION['error']='API returned error:'. $tranx->message;
			 				 header("location:https://trustbuy.ng/myphp/wallet.php");
						die('API returned error: ' . $tranx->message);
						}
						
						if('success' == $tranx->data->status){
	
						$amount = $tranx->data->amount / 100;
						mysqli_query($conn,"INSERT INTO deposit (user, amount) VALUES ('".$_SESSION['user']."','$amount') ON DUPLICATE KEY UPDATE amount=amount+$amount") or die(mysql_error($conn));

		
								mysqli_query($conn,"UPDATE history SET status='confirm' WHERE user='".$_SESSION['user']."' AND reference='$reference'");

 								$_SESSION['success']='You have successfully funded yoru account';
			 				 header("location:https://trustbuy.ng/myphp/wallet.php");	


						}
					
		}
 ?>