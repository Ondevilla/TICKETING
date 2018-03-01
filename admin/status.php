
 <?php  
 //insert.php  
require_once('connect.php');






 $ID=$_POST["ID"];


 $sts=$_POST["sts"];











   $run_query2d = mysqli_query($c1,"UPDATE event_tbl SET `status`='$sts' where `event_id`='$ID'");
   echo"<script>window.location.href='admin_events.php';</script>";

 
 ?>  