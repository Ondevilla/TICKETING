<?php 
include("connect.php");
?>


<form action="buy_tickets.php" method="post">


<?php
$zone_id = $_POST["positionname"];



       $table2 = "SELECT * FROM zone_tbl WHERE zone_id = '$zone_id'";
        $run_query2b = mysqli_query($c1,$table2);         
         while ($row=mysqli_fetch_array($run_query2b))
         {


echo "Ticket Price : "  ;
echo $row["zone_price"];
echo "<br>";
?>


Enter number of tickets <input type="number" min="1"  max="5" name="ticket_purchased" required>;


<?php 


echo '              <input type="hidden" value="'.$zone_id.'" name="zone_id" />';
echo '<button type="submit" class="btn btn-primary" name="buy_ticket"> Purchase</button>';
echo '</form>';
         }





?>