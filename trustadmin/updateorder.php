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
</style>
<body>

<?php  include "head.php" ?>
 
    <?php  include "side.php" ?>
   

  <main id="main" class="main table-responsive">
     <table class="table">
      <thead>
        <th>
          <td>Name</td>
          <td>Q/A</td>
          <td>Productname</td>
          <td>Location</td>
          <td>Number</td>
          <td>Productamount</td>
          <td>Total</td>
          <td>image</td>
          <td>confirm</td>
         
          
        </tr>
      </thead>
        <tbody>
          <?php $sep=mysqli_query($conn,"select * from ordershping where status='pending' order by id desc");
         
   while($arr=mysqli_fetch_array($sep)){
    $name=$arr['name'];
     $quantity=$arr['quantity'];
      $productname=$arr['productname'];
       $number=$arr['number'];
        $location=$arr['location'];
         $itemamount=$arr['itemamount'];
          $total=$arr['total'];
            $id=$arr['id'];
   
             ?>

        <th>
          <td><?php echo $name;  ?></td>
          <td><?php echo $quantity;  ?></td>
          <td><?php echo $productname  ?></td>
          <td><?php echo  $location  ?></td>
          <td><?php echo $number;  ?></td>
          <td><?php echo number_format($itemamount);  ?></td>
          <td><?php echo number_format($total);  ?></td>
          <td><a href="viwimage.php?id=<?php echo $id;  ?>" class="btn btn-secondary" >view</a></td>
          <td><button class="btn btn-secondary" onclick="confimoder(<?php echo $id; ?>)">confirm</button></td>
         
          
        </tr>
      <?php } ?>
      </tbody>
     
    </table>
 <tfoot>
        <?php echo  $nums=mysqli_num_rows($sep);  ?>
      </tfoot>
  
   </main><!-- End #main -->
  <!--------------------------xxxxxx------>
      <script type="text/javascript">
  function confimoder(a) {
        confimoderx="id="+a;
          $.ajax({
        url:"confimoder.php",
                 type:"GET",
                 data:confimoderx,
                 contentType:false,
                 cache:false,
                 crossDomain:true,
                 processData:false,
                 beforeSend:function(data){
                  //$('.welcome').hide();
                  //$('.dashboard').html('<div class="ajaxload" style="display:flex;"><img src="img/ajax.gif"></div>');
                 },
                 success:function(data){
                   $('.welcome').show();
                  $('.welcome').show();
                  $('.welcome').html(data);
                 },
                 error:function(){
                  alert('error typing to processData');
                 }

        })
    
  }

  </script>
  <div class="welcome" style="position: absolute;"></div>
  <footer id="footer" class="footer">
   
  

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>