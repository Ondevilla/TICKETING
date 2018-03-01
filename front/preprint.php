<?php 




$user_id=$_POST['user_id'];
$get_event=$_POST['get_event'];
$user_name = $_POST["username"];
$transac_id = $_POST["transac_id"];
$transac_number = $_POST["transac_number"];
$get_zone = $_POST["get_zone"];
$get_purchased = $_POST["get_purchased"];
$total_tickets = $_POST["total_tickets"];
$amount_paid = $_POST["amount_paid"];
$change = $_POST["change"];

$_SESSSION['eventx']=mysqli_fetch_array(mysqli_query($c1,'SELECT event_name from event_tbl where event_id="'.$get_event.'"'));


mysqli_query($c1,'INSERT INTO transac_tbl(event_id,user_id,transac_number,zone_id,ticket,total_price) values ("'.$get_event.'","'.$user_id.'","'.$transac_number.'","'.$get_zone.'","'.$get_purchased.'","'.$total_tickets.'") ');

?>
