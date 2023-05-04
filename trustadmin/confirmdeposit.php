<?php  include "db.php"; 
$update=mysqli_query($conn,"update deposit  where id='".$_GET['id']."'");
//$update=mysqli_query($conn,"update history set status='confirm' where email='".$_GET['userid']."'");
if ($update) {
    echo "<script>swal('success','confirm successful','success');</script>";

}
 ?>
