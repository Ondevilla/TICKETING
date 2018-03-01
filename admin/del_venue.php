
<?php 

include_once("connect.php");



$del_id = $_POST["delID"];



  $table2c = "DELETE FROM venue_tbl WHERE venue_id = '$del_id'";
  $run_query2d = mysqli_query($c1,$table2c);
  
       echo"<script>window.location.href='admin_venue.php';</script>";	









?>