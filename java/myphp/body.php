      <script type="text/javascript">
        $(document).ready(function () {
        $('.tracking_form').on('submit',function (para) {
          para.preventDefault();
          $.ajax({
                url:"processtrckid.php",
                 type:"post",
                 data:new FormData(this),
                 contentType:false,
                 cache:false,
                 processData:false,
                 beforeSend:function(){
                   // $('.loadmyp').html('<div class="ajax"><img src="img/loading.gif"></div>');
                     //$('.loadmyp').css({"display":"flex","align-items":"center","justify-content":"center","color":"red"});
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
<div class="loadmyp"></div>
<form class="tracking_form" action="processtrckid.php" method="post">
	<label class="form-check-label">Expecting a shipment?</label>
	<div class="form_div d-flex">
	<input type="text" name="tract" placeholder="Enter Tracking ID" class="form-control">
	<button class="btn btn-warning " type="submit">Track</button>
	</div>
	
</form>

<section class="overview">
	<div class="card1" style="background-color: #879DDC;">
		<label>Total shipments</label>
		<h3><?php $select=mysqli_query($conn,"select * from ordershping where status='pending' and user='".$_SESSION['user']."'");
         $num=mysqli_num_rows($select);
         if ($num<1) {
           echo 0;
         }
         else{
          echo $num;
         }
      ?></h3>
	</div>

	<div class="card1"  style="background-color: #90D364;">
		<label>Unpaid shipments</label>
		<h3><?php $selectt=mysqli_query($conn,"select * from ordershping where status='confirm' and user='".$_SESSION['user']."'");
         $nums=mysqli_num_rows($selectt);
         if ($nums<1) {
           echo 0;
         }
         else{
          echo $nums;
         }
      ?></h3>
	</div>

	<div class="card1"  style="background-color: #8B467E;">
		<label>Wallet balance</label>
		<h3>NGN <?php $se=mysqli_query($conn,"select * from deposit where user='".$_SESSION['user']."'");
       $nu=mysqli_num_rows($se);
       $arrr=mysqli_fetch_array($se);
    

       if ($nu<1) {
        echo 0;
       }
       else{
        $se=mysqli_query($conn,"select * from deposit where  status='confirm' and user='".$_SESSION['user']."'");
           $amoutx=$arrr['amount'];
echo  number_format($amoutx);
       }
      ?></h3>
	</div>
</section>




