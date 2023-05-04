<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form/bootstrap.min.css">
    <link rel="stylesheet" href="form/css.css">
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    <script type="text/javascript" src="java/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="java/sweetalert-dev.js"></script>
    <title>Sign up</title>
</head>
<body>
  <div class="container-fluid p-0 d-flex">
    <div class="forimage">
      <img src="img/logo.png">
    </div>
      <script type="text/javascript">
        $(document).ready(function () {
        $('.signupf').on('submit',function (para) {
          //para.preventDefault();
          $.ajax({
                url:"process_signup.php",
                 type:"post",
                 data:new FormData(this),
                 contentType:false,
                 cache:false,
                 processData:false,
                 beforeSend:function(){
                   // $('.loadmyp').html('<div class="ajax"><img src="img/loading.gif"></div>');
                     $('.loadmyp').css({"display":"flex","align-items":"center","justify-content":"center","color":"red"});
                 },
                 success:function(para2){
                  $('.loadmyp').html(para2);
                 },
                 error:function(){
                  //alert('error typing to processData');
                 }

          })
        });
        })
      </script>
    <form class="form signupf" action="process_signup.php" method="post">
  <h1 class="signh1">Welcome To <br>TrustBuy
<p>Please sign up to continue</p> </h1>
<label class="loadmyp"></label>
<div class="inholder">
  <input type="text" name="firstname" class="form-control" placeholder="Firstname">
   <input type="text" name="lastname" class="form-control" placeholder="lastname">
</div>

  <input type="text" name="email" class="form-control" placeholder="E-mail">
   <input type="number" name="number" class="form-control" placeholder="PhoneNumber">


  <input type="text" name="state" class="form-control" placeholder="State">
   <input type="text" name="city" class="form-control" placeholder="city">

  <input type="text" name="password" class="form-control" placeholder="Password">
   <input type="text" name="cpassword" class="form-control" placeholder="Repeat Password">

<button class="btn btn-warning sibt">Sign Up</button>
<p class="silink">Already have an account?<a href="login.php">Sign In</a></p>
    </form>
  </div>


</body>
</html>