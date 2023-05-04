<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form/bootstrap.min.css">
    <link rel="stylesheet" href="form/css.css">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    <script type="text/javascript" src="java/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="java/sweetalert-dev.js"></script>
</head>
<body>
  <div class="container-fluid p-0 d-flex">
    <div class="forimage">
         <img src="img/logo.png">
    </div>


      <script type="text/javascript">
        $(document).ready(function () {
        $('.loginf').on('submit',function (para) {
          para.preventDefault();
          $.ajax({
                url:"process_login.php",
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
    <form class="form loginf" method="post">
  <h1 class="signh1" style="width: 60%;">Welcome Back 
<p>Please sign in to continue</p> </h1>
<label class="loadmyp"></label>


<label>E-mail</label>
  <input type="email" name="email" class="form-control" placeholder="E-mail">
  <label>Password</label>
   <input type="text" name="password" class="form-control" placeholder="PhoneNumber">
   <div class="forget_div">
     <a href="forgetpassword.php">Forgot Password?</a>
   </div>




<button class="btn btn-warning sibt">Log In</button>
<p class="silink">Dont have Account?<a href="signup.php">Create account</a></p>
    </form>
  </div>


</body>
</html>