<?php 

include_once("connect.php");




$username = $_POST["username"];
$password = $_POST["password"];




$row2=mysqli_query($c1,'SELECT * From `account_tbl` WHERE `user_name`="'.$_POST["username"].'" ');

			if( !empty (mysqli_fetch_assoc($row2)))
			{


		?>

		  <script>
		 
		  var user="<?php echo $_POST['UN'] ?>";


		swal({

		    title: 'Failed !',
		    text: user + ' has already taken !'

		}).then(result => {
		  if (result.value) {
		 
		 window.location.href='admin_accounts.php';

		  } 
		  else 
		  {

		  }
		})


		  </script> 
 <?php

$runs = mysqli_query($c1,'SELECT  MAX(user_id)  FROM account_tbl ');
$runs1=$runs+1;
$runsx=$runs1+900000;

  $table2c = "INSERT INTO account_tbl (`user_name`, user_password, accessright,transac_id,transac_number) VALUES ('$username','$password', '2','$runs1','$runsx')";
  $run_query2d = mysqli_query($c1,$table2c);
  
       echo"<script>window.location.href='admin_accounts.php';</script>";	










?>