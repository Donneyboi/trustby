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

<body>

<?php  include "head.php" ?>
 
    <?php  include "side.php" ?>
   

  <main id="main" class="main table-responsive">
    <table class="table">
      
        <tr>
          <td>Name</td>
          <td>time</td>
          <td>Amount</td>
          
          <td>Payment</td>
          <td>Notification</td>
        </tr>
     <?php $sql=mysqli_query($conn,"select * from deposit where 1");
   while ($arr=mysqli_fetch_array($sql)) {
   $amount=$arr['amount'];
   $user=$arr['user'];
    $id=$arr['id'];
  
  
  
   $slx=mysqli_query($conn,"select * from signup where id='$user'");
   $er=mysqli_fetch_array($slx);
   $firstname=$er['firstname'];
   $lastname=$er['lastname'];
   

          ?>
        <tr>
          <td><?php  echo $firstname." ".$lastname?></td>
          <td><?php echo $rela;  ?></td>
          <td>NGN <?php  echo number_format($amount);?></td>
          
          <td><button class="btn btn-danger" onclick="kkp('<?php echo  $id;?>')">Payment</button></td>
          <td><button class="btn btn-danger" onclick="kkn('<?php echo  $user;?>')">Notification</button></td>
        </tr>
      <?php   } ?>
     
    </table>

  </main><!-- End #main -->
  <!--------------------------xxxxxx------>
    <div class="welcome"></div>
  <script type="text/javascript">
    function kkp (a) {
    
        checklogin="id="+a;
          $.ajax({
        url:"confirmdeposit.php",
                 type:"GET",
                 data:checklogin,
                 contentType:false,
                 cache:false,
                 crossDomain:true,
                 processData:false,
                 beforeSend:function(data){
                  //$('.welcome').hide();
                  //$('.dashboard').html('<div class="ajaxload" style="display:flex;"><img src="img/ajax.gif"></div>');
                 },
                 success:function(data){
                   //$('.welcome').hide();
                  $('.welcome').show();
                  $('.welcome').html(data);
                 },
                 error:function(){
                  alert('error typing to processData');
                 }

        })
    

    }

  </script>


      <div class="welcome"></div>
  <script type="text/javascript">
    function kkn (x) {
    
        checkloginx="id="+x;
          $.ajax({
        url:"confirmnoti.php",
                 type:"GET",
                 data:checkloginx,
                 contentType:false,
                 cache:false,
                 crossDomain:true,
                 processData:false,
                 beforeSend:function(data){
                  //$('.welcome').hide();
                  //$('.dashboard').html('<div class="ajaxload" style="display:flex;"><img src="img/ajax.gif"></div>');
                 },
                 success:function(data){
                   //$('.welcome').hide();
                  $('.welcome').show();
                  $('.welcome').html(data);
                 },
                 error:function(){
                  alert('error typing to processData');
                 }

        })
    

    }

  </script>
 

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>