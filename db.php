<?php $conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"trustbuy"); 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mailler = new PHPMailer(true);



 ?>