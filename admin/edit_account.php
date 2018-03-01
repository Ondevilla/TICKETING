
 <?php  
 //insert.php  
require_once('connect.php');






 $ID=$_POST["ID"];


 $UN=$_POST["UN"];
 $UP=$_POST["UP"];
 $UC=$_POST["UC"];
 $UE=$_POST["UE"];






        $table2 = "select * from account_tbl where `user_id`='".$ID."'";
        $run_query2b = mysqli_query($c1,$table2);         

 		$row = mysqli_fetch_assoc($run_query2b);

$a1=$row['user_name'];
$a2=$row['user_password'];
$a3=$row['contact_number'];
$a4=$row['email'];



if (empty($UN))
{
	$UN=$a1;
}
if (empty($UP))
{
	$UP=$a2;
}
if (empty($UC))
{
	$UC=$a3;

}
if (empty($UE))
{
	$UE=$a4;
}



$e1=$UN;
$e2=$UP;
$e3=$UC;
$e4=$UE;







   $run_query2d = mysqli_query($c1,"UPDATE account_tbl SET `user_name`='$e1',`user_password`='$e2',`contact_number`='$e3',`email`='$e4' where `user_id`='$ID'");
   echo"<script>window.location.href='admin_accounts.php';</script>";

 
 ?>  