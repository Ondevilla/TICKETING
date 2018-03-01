<!DOCTYPE html>
<html>
<head>
<title>checkout</title>
<?php       include "../connect.php";


 ?>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/jquery.countdown.css" rel="stylesheet" type="text/css" media="all" />

<link href="../css/w3w.css" rel="stylesheet" type="text/css"  />

<script src="../sm/papa/sweetalert2.min.js"></script>
<link rel="stylesheet" type="text/css" href="../sm/papa/sweetalert2.css">



<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.countdown.js"></script>
<script src="js/script.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="SONGLILY Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.useso.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
<script src="js/hover_pack.js"></script>
  <script src="js/jquery.chocolat.js"></script>


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">







    <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="all" />
    <!--light-box-files -->
    <script type="text/javascript" charset="utf-8">
      $(function() {
        $('#example1 a').Chocolat();
      });
    </script>
</head>
<body>
  
<div class="w3w-container">
  <div id="id01" class="w3w-modal" style="background-color: rgba(0,0,0,0.9);position: fixed;z-index: 99999;">
    <div class="w3w-modal-content w3w-card-4 w3w-animate-zoom" style="max-width:60%;" >

      <div class="row" style="margin:0px;background-color: #2196F3; color:white;">
        <span onclick="document.getElementById('id01').style.display='none'" style="z-index:10;" class="w3w-button w3w-xlarge w3w-hover-red w3w-display-topright" title="Close Modal">&times;</span>
        <div class="col-md-12"><center>
          <br><?php   echo strtoupper($_SESSION['fn']); ?>
          <br>
          <br> </center></div>

   <!--      <div class="col-md-8">
        
            <br>
            <br>
            <br><center><h1 >CONCERT</h1></center></div> -->


      </div>

      <?php




     

      $row1=mysqli_query($c1,'SELECT * From `account_tbl` WHERE `user_name`="'.$_SESSION['fn'].'"  ');

$search=mysqli_fetch_assoc($row1);

       ?>

      <form class="w3w-container" action="edit_user.php" method="post">
        <div class="w3w-section">
          <label><b>Username</b></label>
      <?php echo '  <input class="w3w-input w3w-border w3w-margin-bottom" type="text" placeholder="'.$search['user_name'].'" name="UN" >';?>
          <label><b>Password</b></label>
         <?php echo '   <input class="w3w-input w3w-border" type="password" placeholder="'. $search['user_password'].'" name="UP" >';?>
          <label><b>Contact</b></label>
        <?php echo '  <input class="w3w-input w3w-border" type="Contact" placeholder="'. $search['contact_number'].'" name="UC" >';?>

             <label><b>Email</b></label>
            <?php echo ' <input class="w3w-input w3w-border" type="Email" placeholder="'. $search['email'].'" name="UE" >';?>




          <button class="w3w-button w3w-block w3w-blue w3w-section w3w-padding" name="submit" type="submit">SAVE</button>
 
  
        </div>
      </form>

   

    </div>
  </div>
</div>



  <!-- header-section-starts -->
  <div class="header">
        <div class="container">
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" width="50" height="30" alt="" /></a>
            </div>
            <div class="top-menu">
      <span class="menu"> </span>
                <ul class="cl-effect-1">
                    <li><a class="active" href="index.php">Home</a></li>
               
                    <li><a onclick="document.getElementById('id01').style.display='block'" href="#" ><?php echo   $_SESSION['fn']; ?></a></li>
                    <li><a  href="history.php" >HISTORY</a></li>
                       <li><a  href="logout.php"  > Log Out</a></li>
                </ul>
            </div>




      <!-- script-for-menu -->
    <script>
      $("span.menu").click(function(){
        $(".top-menu ul").slideToggle("slow" , function(){
        });
      });
    </script>
    <!-- script-for-menu -->
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- header-section-ends -->
    <!-- banner-section -->
    <div class="banner">
            <div class="banner-info text-center">
                <h1>Singing</h1>
                <h2>That comes from the soul</h2>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
               <div class="clearfix"></div>
         <p>A concert is a live music performance in front of an audience. The performance may be by a single musician, sometimes then called a recital, or by a musical ensemble, such as an orchestra, choir, or band.</p>
              
            </div>
    </div>
    <!-- banner-section -->

    <div class="events-section">
<form action="print.php" method="post">
<?php 

if(isset($_POST["checkout_btn"]))



{

$username = $_POST["username"];		
$transac_id = $_POST["transac_id"];
$transac_number = $_POST["transac_number"];
$get_zone = $_POST["get_zone"];
$get_purchased = $_POST["get_purchased"];
$total_tickets = $_POST["total_tickets"];
$amount_paid = $_POST["amount_paid"];
?>


Thank you for purchasing ! We can't wait to see you there ! 

<br><br>


PAYMENT INFORMATION  <br>

USERNAME : <?php echo $username; ?><br>
TRANSACTION ID : <?php echo $transac_id; ?><br>
TRANSACTION NUMBER : <?php echo $transac_number; ?><br>
TICKET ZONE : <?php echo $get_zone; ?><br>
TICKETS PURCHASED: <?php echo $get_purchased; ?><br>
TOTAL AMOUNT : <?php echo $total_tickets; ?><br>
AMOUNT PAID : <?php echo $amount_paid?> <br>
CHANGE : <?php echo $change = $amount_paid - $total_tickets; ?>



<br><br>

<input type="hidden" value="<?php echo $_SESSION['user_id'];?>" name="user_id"/>
<?php 

$row1s=mysqli_fetch_array(mysqli_query($c1,'SELECT event_name from event_tbl where event_id="'.$_SESSION['get_event'].'"'));

$_SESSION['gename']=$row1s[0];

?>
 <input type="hidden" value="<?php echo $_SESSION['get_event'];?>" name="get_event"/>
 <input type="hidden" value="<?php echo $user_name;?>" name="username"/>
 <input type="hidden" value="<?php echo $transac_id;?>" name="transac_id"/>
 <input type="hidden" value="<?php echo $transac_number;?>" name="transac_number"/>
 <input type="hidden" value="<?php echo $get_zone;?>" name="get_zone"/>
 <input type="hidden" value="<?php echo $get_purchased;?>" name="get_purchased"/>
 <input type="hidden" value="<?php echo $total_tickets;?>" name="total_tickets"/>
 <input type="hidden" value="<?php echo $amount_paid;?>" name="amount_paid"/>
 <input type="hidden" value="<?php echo $change;?>" name="change"/>


 
<button type="submit" class="btn btn-primary" style="width: 200px"> PRINT</button>

</form>
<?php 


}



?>


    </div>
   
  <div class="footer">
    <div class="copy-rights text-center">
    <p>Copyright &copy; 2018. All rights reserved.</p></div>      
  </div>
  <!-- footer-section-ends -->
</body>




<script>

function getState(val) {



   $.ajax({
    type: "POST",
    url: "get_zone.php",
    data:'positionname='+val,
    success: function(data){
        $("#state-list").html(data);
    }
   
            
    });
}




</script>


<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</html>