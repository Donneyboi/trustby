

<?php session_start(); include "db.php";  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>confirm</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
  <script type="text/javascript" src="java/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="java/sweetalert-dev.js"></script>
</head>
<style type="text/css">
  td{
   
    text-align: center;

  }
  img{
  	width: 100%;
  	height: 400px;
  	object-fit: contain;
  		margin-top:100px;
  }
  .t{
  	margin-top: 30px;
width: 100%;
display: flex;
align-items: center;
justify-content: center;
  }
  .t>h4{
width: 80%;
font-size: 14px;
font-weight: lighter;
word-break: break-all;
  }
  a{
  	margin-left: 40px;
  }
</style>
<body>

<?php  include "head.php" ?>
 
<?php 
$sx=mysqli_query($conn,"select * from ordershping where id='".$_GET['id']."'");
$eee=mysqli_fetch_array($sx);
 $image=$eee['image'];

echo "<img src='../myphp/img/$image'>";
echo "<div class='t'><h4 class='myh4'>". $issus=$eee['issus']."</h4></div>";
 ?>
<a href="updateorder.php">Back to homepage</a>