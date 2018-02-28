<?php 

include("connect.php");




?>




<!DOCTYPE html>
<!--
Template Name: Ossibird
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="topspacer bgded overlay" style="background-image:url('images/demo/backgrounds/atl.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="fl_left">
        <ul class="nospace">
          <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
          <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
        </ul>
      </div>
      <div class="fl_right">
        <ul class="nospace">
          <li><a href="index.html"><i class="fa fa-lg fa-home"></i></a></li>


<!--           <li><a href="profile.php"> //<?php //echo "Welcome,";echo $row_user["user_name"]; ?></a></li> -->
<!--           <li><a href="logout.php">Logout</a></li> -->
  
<?php 
session_start();
if(isset($_SESSION["loggedin"]))
{
echo $_SESSION["loggedin"];
}
if($_SESSION["loggedin"] = "1")

{
  $xQx_account = "SELECT * FROM account_tbl WHERE user_id = '1'";
  $query_account=mysqli_query($c1,$xQx_account);
   while($row_account=mysqli_fetch_assoc($query_account))
            {
              $get_name = $row_account["user_name"];
            }


?>

          <li><a href="profile.php">Welcome,<?php echo $get_name; ?></a></li>

          <li><a href="#" data-toggle="modal" data-target="#modalLogoutForm">Logout</a></li>
<?php 
}



elseif ($_SESSION["loggedin"] = "0")
{
  ?>
  

          <li><a href="#" data-toggle="modal" data-target="#modalLoginForm">Login</a></li>

          <li><a href="#" data-toggle="modal" data-target="#modalRegisterForm">Register</a></li>



<?php
}


?>
        </ul>
      </div>
      <!-- ################################################################################################ -->
    </div>
  </div>

  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">EventMoto</a></h1>
      </div>
      <!-- ################################################################################################ -->
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a class="drop" href="#">Events</a>
<!--             <ul>
              <li><a href="pages/gallery.html">Gallery</a></li>
              <li><a href="pages/full-width.html">Full Width</a></li>
              <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
              <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
              <li><a href="pages/basic-grid.html">Basic Grid</a></li>
            </ul> -->
          </li>
<!--           <li><a class="drop" href="#">Dropdown</a>
            <ul>
              <li><a href="#">Level 2</a></li>
              <li><a class="drop" href="#">Level 2 + Drop</a>
                <ul>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                </ul>
              </li>
              <li><a href="#">Level 2</a></li>
            </ul>
          </li> -->
<!--           <li><a href="#">Link Text</a></li>
          <li><a href="#">Link Text</a></li> -->
        </ul>
      </nav>
    </header>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="pageintro" class="hoc clear">
     <article>
      <h2 class="heading"></h2>
      <p>Home of Good Music</p>
      <footer>
        <ul class="nospace inline pushright">
<!--           <li><a class="btn" href="#">Condimentum</a></li>
          <li><a class="btn inverse" href="#">Maximus</a></li> -->
        </ul>
      </footer>
    </article> 
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <article class="one_quarter first">
      <h6 class="heading font-x3">Grab your tickets now! </h6>
      <p class="btmspace-30">Check out the hottest events here<!-- <a href="#">[&hellip;]</a> --></p>
 <!--      <footer><a class="btn" href="#">Read More &raquo;</a></footer> -->
    </article>
<?php 

        $fetch=mysqli_query($c1,'SELECT * From event_tbl'); 
    while($row=mysqli_fetch_assoc($fetch))
    {



?>



    <article class="one_quarter">
      <h6 class="heading"><!-- Pretium --> <a href="#"><?php echo $row["event_name"];  ?></a></h6>




      <a href="#"><img class="btmspace-15" <?php echo 'src="admin/'.$row["event_image"].'" '; ?> alt="" style="width: 320px; height: 200px;"></a>





      <p class="btmspace-30"><?php echo $row["description"]; ?> <!-- <a href="#">[&hellip;]</a> --></p>
      <footer><a class="btn medium" href="#" data-toggle="modal" data-target="#PurchaseModal" >Fringilla malesuada &raquo;</a></footer>
    </article>
<?php 

}

?>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="group">
      <section class="one_half first"> 
        <!-- ################################################################################################ -->
        <h6 class="heading">Ligula ac egestas mauris</h6>
        <p class="btmspace-30">Aliquam sit amet lectus ac velit nec eu dolor nullam in ante vel nunc iaculis euismod vestibulum sodales.</p>
        <ul class="nospace group">
          <li class="one_half first">
            <article><a href="#"><i class="icon btmspace-30 fa fa-language"></i></a>
              <h6 class="heading font-x1">Tortor rhoncus</h6>
              <p>Odio dignissim eros pretium bibendum ligula ultricies eros ut tincidunt nunc tortor sit <a href="#">[&hellip;]</a></p>
            </article>
          </li>
          <li class="one_half">
            <article><a href="#"><i class="icon btmspace-30 fa fa-leaf"></i></a>
              <h6 class="heading font-x1">Nibh aliquam non</h6>
              <p>Amet felis maecenas dapibus tellus diam sollicitudin ac congue leo molestie non nullam <a href="#">[&hellip;]</a></p>
            </article>
          </li>
        </ul>
        <!-- ################################################################################################ -->
      </section>
      <section class="one_half"> 
        <!-- ################################################################################################ -->
        <h6 class="heading">Maecenas et erat elit</h6>
        <p class="btmspace-30">Risus eu mattis felis blandit eu nam bibendum ullamcorper mi ut lacinia nulla ullamcorper a mauris risus.</p>
        <article class="group">
          <div class="one_half first"><a href="#"><img src="images/demo/320x320.png" alt=""></a></div>
          <div class="one_half">
            <h6 class="heading nospace font-x1">John Doe</h6>
            <em class="block font-xs">Managing Director</em>
            <p>Lacus vestibulum at ipsum ac dignissim consequat sem proin id lobortis erat integer quis dictum orci id sollicitudin purus duis a tortor vestibulum rhoncus feugiat magna.</p>
            <footer><a href="#">Our Team &raquo;</a></footer>
          </div>
        </article>
        <!-- ################################################################################################ -->
      </section>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/02.png');">
  <article class="hoc container clear cta"> 
    <!-- ################################################################################################ -->
    <div class="three_quarter first">
      <h6 class="nospace">At posuere neque nam magna</h6>
      <p class="nospace">Dui interdum eu purus in cursus egestas mauris in sed rutrum turpis integer id</p>
    </div>
    <footer class="one_quarter"><a class="btn medium" href="#">Fringilla malesuada &raquo;</a></footer>
    <!-- ################################################################################################ -->
  </article>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section id="latest" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h2 class="heading">Sapien at urna fringilla</h2>
      <p>Urna etiam commodo leo ultricies venenatis tristique praesent risus enim aliquet</p>
    </div>
    <ul class="nospace group">
      <li class="one_quarter first">
        <article><img src="images/demo/320x320.png" alt="">
          <div class="postexcerpt">
            <h6 class="heading">Nec posuere ut fringilla</h6>
            <p>Duis vestibulum euismod at risus malesuada vitae cursus integer placerat risus sed cursus <a href="#">[&hellip;]</a></p>
          </div>
          <footer><a href="#">More</a></footer>
        </article>
      </li>
      <li class="one_quarter">
        <article><img src="images/demo/320x320.png" alt="">
          <div class="postexcerpt">
            <h6 class="heading">Maecenas nec massa</h6>
            <p>Sodales ipsum sed cursus quam vestibulum ante ipsum primis in faucibus orci luctus ultrices <a href="#">[&hellip;]</a></p>
          </div>
          <footer><a href="#">More</a></footer>
        </article>
      </li>
      <li class="one_quarter">
        <article><img src="images/demo/320x320.png" alt="">
          <div class="postexcerpt">
            <h6 class="heading">Dui in sapien aliquet</h6>
            <p>Massa mauris vehicula ac bibendum in viverra eget neque maecenas vehicula tempor quam luctus <a href="#">[&hellip;]</a></p>
          </div>
          <footer><a href="#">More</a></footer>
        </article>
      </li>
      <li class="one_quarter">
        <article><img src="images/demo/320x320.png" alt="">
          <div class="postexcerpt">
            <h6 class="heading">Vel egestas nunc pulvinar</h6>
            <p>Morbi tristique senectus et malesuada netus et turpis suspendisse potenti quis dui fringilla <a href="#">[&hellip;]</a></p>
          </div>
          <footer><a href="#">More</a></footer>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4 bgded overlay" style="background-image:url('images/demo/backgrounds/03.png');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="heading">Ossibird</h6>
      <nav>
        <ul class="nospace">
          <li><a href="index.html"><i class="fa fa-lg fa-home"></i></a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Cookies</a></li>
          <li><a href="#">Disclaimer</a></li>
          <li><a href="#">Online Shop</a></li>
          <li><a href="#">Sitemap</a></li>
        </ul>
      </nav>
      <p>Malesuada in ornare imperdiet nisi et commodo sem blandit a curabitur</p>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">Enim nunc vulputate ut</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-fax"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">Ac hendrerit euismod</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">Quam nulla vel aliquam sem</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
            <p class="nospace">Elit praesent laoreet rutrum placerat suspendisse suscipit ex ut nibh <a href="#">[&hellip;]</a></p>
          </article>
        </li>
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">Aliquet arcu adipiscing</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
            <p class="nospace">Tortor laoreet praesent nec molestie justo ut non consequat tortor iaculis <a href="#">[&hellip;]</a></p>
          </article>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->





<div class="modal fade" id="LogModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login Now!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                


    <div class="form-group col">
      <label >Username :</label>
      <input type="text" class="form-control btn btn-primary"   name="username" style="width: 300px;" required>
    </div>

        <div class="form-group">
      <label >Password :</label>
      <input type="password" class="form-control btn btn-primary" name="password" style="width: 300px;" required>
    </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div> 




<form action="login.php" method="post">

            
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-bold">Sign in</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="defaultForm-email" class="form-control validate" name="username" required>
                    <label  for="defaultForm-email">Your Username<br></label>
                </div>

                <div class="md-form">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" id="defaultForm-pass" class="form-control validate" name="password" required>
                    <label  for="defaultForm-pass">Your password<br></label>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="submit" name="login_user" class="btn btn-default">Login</button>
            </div>
        </div>
    </div>
</div>

<div class="text-center">
    <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Launch Modal Login Form</a>
</div>
     </form>     








<form action="logout.php" method="post">

            
<div class="modal fade" id="modalLogoutForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-bold"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form">
                    
          Would you like to log out?
                </div>


            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="submit" name="login_user" class="btn btn-default">Logout</button>
            </div>

        </div>
    </div>
</div>

<div class="text-center">
    <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Launch Modal Login Form</a>
</div>
     </form>     



<form action="index.php" method="post">

            
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-bold">Sign in</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="defaultForm-email" class="form-control validate" name="username" required>
                    <label  for="defaultForm-email">Your Username<br></label>
                </div>

                <div class="md-form">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" id="defaultForm-pass" class="form-control validate" name="password" required>
                    <label  for="defaultForm-pass">Your password<br></label>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="submit" name="login_user" class="btn btn-default">Login</button>
            </div>
        </div>
    </div>
</div>

<div class="text-center">
    <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Launch Modal Login Form</a>
</div>
     </form>     









<!-- JAVASCRIPTS -->

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
</body>
</html>