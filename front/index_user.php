<!DOCTYPE html>
<html>
<head>
<title>Home</title>
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
    <div class="popular-section">
        <div class="popular-section-left">
            <div class="popular-section-list">
            <ul>
                <li><i class="song"></i></li>
                <li><a style="cursor:pointer;color:white;">ONE </a></li>
            </ul>
            <ul>
                <li><i class="album"></i></li>
                <li><a style="cursor:pointer;color:white;">Music</a></li>
            </ul>
            <ul>
                <li><i class="event"></i></li>
                <li><a style="cursor:pointer;color:white;">ONE</a></li>
            </ul>
            <ul>
                <li><i class="artist"></i></li>
                <li><a style="cursor:pointer;color:white;">SOUL</a></li>
            </ul>
                </div>
        </div>
        <div class="popular-section-right">
            <div class="popular-section-right-top">
                <h3>CONCERTS</h3>
               
            </div>
            <div class="popular-section-right-grids">
<!--                 <div class="col-md-3 popular-section-right-grid text-center">
                    <img src="images/p1.jpg" alt="" />
                    <h4>Lorem Ipsum dolor</h4>
                    <p>Mirum est notare</p>
                </div>


 -->
        <?php 
  
              $query=mysqli_query($c1,"SELECT * FROM event_tbl WHERE  `status`='Admission' ORDER BY event_date ASC LIMIT 4 ;");
                    while ($row=mysqli_fetch_array($query)){

                        $Mymodal="Mymodal".$row[0];
                        $gete_id = $row[0];
                echo'          
                <div class="col-md-3 popular-section-right-grid text-center">
                    <img src="../admin/images/'.$row[3].'" alt="" />
                    <h4>'.$row[1].'</h4>
                    <p></p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#'.$Mymodal.'">RESERVE NOW</button>
                </div>


<div class="modal fade" id="'.$Mymodal.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Purchase Tickets!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                


Event Name 
<br>
<h3>'.$row[1] .'</h3>


<center><img src="../admin/images/'.$row[3].'" style="width:5 50px; height:400px;"></center>


<br><br>
<center>
<table>

<tr>
<td style="width:300px;">
Event time : 
</td>

<td>
'.$row[4].'
</td>
</tr>
<tr>
<td>
Event Date : 
</td>
<td>
'.$row[5].'
</td>
</tr>

<tr>

<td>
Event Venue : 
</td>
<td>
'.$row[6].'

</td>

</tr>

</table>
</center>

<form action="buy_tickets.php" method="post">
Select seat zone ( 5 seats per zone only )
<br>

';
?>
<?php 

 $this_event = $row[0];
$_SESSION["get_event"] = $this_event; 

 ?>




 <br>

Seat zone:
<select name="get_seat_zone">
<?php 
       $table2 = "SELECT * FROM zone_tbl WHERE event_id = '$this_event'";
        $run_query2b = mysqli_query($c1,$table2);         
         while ($row=mysqli_fetch_array($run_query2b))
         {
            echo '

            <option value="'.$row[0].'">'.$row[1].' </option> ';
            
         }
?>
</select>

        <br>  
Quantity:
 <input type="number" max="5" name="ticket_purchased" />

<br>


<?php 
echo'
            </div>
            <div class="modal-footer">

              <input type="hidden" value="'.$row[0].'" name="zone_name" />
                <button type="submit" name="get_ticket" class="btn btn-primary">Get tickets  </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</form>
            </div>
        </div>
    </div>
</div> 
                  '





                  ;


}
                  ?>


                <div class="clearfix"></div>
            </div>
       </div>
       <div class="clearfix"></div>
    </div>
    <div class="events-section">
            <div class="events-section-head">
                <h3>upcoming Events</h3>
            </div>
            <div class="events-section-grids">
               

                             <?php 
              
              
              $query=mysqli_query($c1,"SELECT * FROM event_tbl WHERE  `status`='Upcoming' ORDER BY event_date ASC LIMIT 4 ;");
          
                      
          
                              while ($row=mysqli_fetch_array($query))
                              {
                        
                               
                                
                                
          ?> 
                          <div class="col-md-4 events-section-grid">
                              <div class="events-section-grid-left">
                                   <h2><?php  echo  substr($row['event_date'],5,-3); ?>/</h2>
                                  <h2><?php   echo  substr($row['event_date'],8); ?></h2>
                              </div>
                              <div class="events-section-grid-right">
                                  <h4><?php echo $row['event_name']; ?></h4>
                                  <p><?php echo $row['description']; ?></p>
                              </div>
                              <div class="clearfix"></div>
                          </div>
                     
                              <?php }?>


                <div class="clearfix"></div>
            </div>
    </div>
   
  <div class="footer">
    <div class="copy-rights text-center">
    <p>Copyright &copy; 2018. All rights reserved.</p>
        </div>      
  </div>
  <!-- footer-section-ends -->






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