
 <?php  
 //insert.php  
require_once('connect.php');






 $ID=$_POST["id"];


 $UN=$_POST["venue_name"];
 $UP=$_POST["address"];







        $table2 = "select * from venue_tbl where `venue_id`='".$ID."'";
        $run_query2b = mysqli_query($c1,$table2);         

 		$row = mysqli_fetch_assoc($run_query2b);

$a1=$row['venue_name'];
$a2=$row['address'];




if (empty($UN))
{
	$UN=$a1;
}
if (empty($UP))
{
	$UP=$a2;
}




$e1=$UN;
$e2=$UP;








$a1=$row['venue_name'];
$run_query2d = mysqli_query($c1,"UPDATE venue_tbl SET `user_name`='$e1',`address`='$e2' where `venue_id`='$ID'");
   echo"<script>window.location.href='admin_venue.php';</script>";

 
 ?>  