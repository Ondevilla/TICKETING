<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<?php

    include "../connect.php";

    ?>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery.countdown.css" />

<link href="../css/w3w.css" rel="stylesheet" type="text/css"  />

<script src="../sm/papa/sweetalert2.min.js"></script>
<link rel="stylesheet" type="text/css" href="../sm/papa/sweetalert2.css">



<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.useso.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
<script src="js/hover_pack.js"></script>
	<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="all" />
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
			$(function() {
				$('#example1 a').Chocolat();
			});
		</script>
		<script type="text/javascript" src="js/jquery-hover-effect.js"></script>
		<script type="text/javascript">
	//Image Hover
	jQuery(document).ready(function(){
	jQuery(function() {
		jQuery('ul.da-thumbs > li').hoverdir();
	});
	});
	</script>
</head>
<body>
	 <div class="w3w-container">
  <div id="id01" class="w3w-modal" style="background-color: rgba(0,0,0,0.9);position: fixed;z-index: 99999;">
    <div class="w3w-modal-content w3w-card-4 w3w-animate-zoom" style="max-width:60%;" >

      <div class="row" style="margin:0px;background-color: #2196F3; color:white;">
        <span onclick="document.getElementById('id01').style.display='none'" style="z-index:10;" class="w3w-button w3w-xlarge w3w-hover-red w3w-display-topright" title="Close Modal">&times;</span>
        <div class="col-md-12"><center><img src="images/logo.png" height="250" width="250" ></center></div>

   <!--      <div class="col-md-8">
        
            <br>
            <br>
            <br><center><h1 >CONCERT</h1></center></div> -->


      </div>

      <form class="w3w-container" action="index.php" method="post">
        <div class="w3w-section">
          <label><b>Username</b></label>
          <input class="w3w-input w3w-border w3w-margin-bottom" type="text" placeholder="Enter Username" name="username" required>
          <label><b>Password</b></label>
          <input class="w3w-input w3w-border" type="password" placeholder="Enter Password" name="password" required>
          <button class="w3w-button w3w-block w3w-blue w3w-section w3w-padding" name="submit" type="submit">Login</button>
 
  
        </div>
      </form>

   

    </div>
  </div>
</div>


	<!-- header-section-starts -->
	<div class="header">
        <div class="container">
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" width="50" height="30"  alt="" /></a>
            </div>
            <div class="top-menu">
			<span class="menu"> </span>
                <ul class="cl-effect-1">
                      <li><a href="index.php">Home</a></li>
               
                    <li><a class="active"  href="registration.html">registration</a></li>
                       <li><a  onclick="document.getElementById('id01').style.display='block'" href="#">Login</a></li>
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
	<!-- contact -->
	<div class="contact-main" style="">
			<div class="contact">
				<div class="container">
					<div class="contact-section">
					<h3>Registration</h3>
					 <form method="post" action="registration.php">
						<center> <input type="text" class="text" name="UN"  placeholder="Enter Username" required onfocus="this.value = '';" onblur="if (this.value == '') ">
						 <br>
						 <input type="password" class="password" name="UP" placeholder="Enter Password" required onfocus="this.value = '';" onblur="if (this.value == '')">
						  <br>
						   <input type="text" class="text" name="UC"  placeholder="Enter Contact Number" required onfocus="this.value = '';" onblur="if (this.value == '') ">
						 <br>
						  <input type="email" class="email" name="UE"  placeholder="Enter Email" required onfocus="this.value = '';" onblur="if (this.value == '') ">
						 <br>

						</center>
				<!-- 		 <textarea onfocus="if(this.value == 'Enter Message...') this.value='';" onblur="if(this.value == '') this.value='Enter Message';" >Enter Message...</textarea>	 -->
						
						 <div class="clearfix"> </div>
						 <input type="submit" name="submit" value="REGISTER NOW !">
					 </form>
			 	 </div>
			   </div>
			</div>



<?php


if(isset($_POST['submit']))
{

$row2=mysqli_query($c1,'SELECT * From `account_tbl` WHERE `user_name`="'.$_POST["UN"].'" ');

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
		 
		 window.location.href='registration.php';

		  } 
		  else 
		  {

		  }
		})


		  </script> 
		    <?php


		}

		else
		{

			$runs = mysqli_query($c1,'SELECT  MAX(user_id)  FROM account_tbl ');
			$runs1=$runs+1;
			$runsx=$runs1+900000;
			

		mysqli_query($c1,'INSERT INTO account_tbl(user_name,user_password,contact_number,email,accessright,transac_id,transac_number) values ("'.$_POST['UN'].'","'.$_POST['UP'].'","'.$_POST['UC'].'","'.$_POST['UE'].'","2","'.$runs1.'","'.$runsx.'") ');

		$row1=mysqli_query($c1,'SELECT * From `account_tbl` WHERE `user_name`="'.$_POST["UN"].'" AND `user_password`="'.$_POST["UP"].'" ');

		$search=mysqli_fetch_assoc($row1);
		  $_SESSION['fn']=$search['user_name'];
		  $_SESSION["user_id"] = $search["user_id"];
		?>

									  <script>
									 
									  var user="<?php echo $_POST['UN'] ?>";


									swal({

									    title: 'Successfully Added !',
									    text: 'Welcome '+ user

									}).then(result => {
									  if (result.value) {
									 
									 window.location.href='index_user.php';

									  } 
									  else 
									  {
									  	 window.location.href='registration.php';

									  }
									})


									  </script> 
		    <?php

					}

}// traping error
else
{


}


?>

<!-- 	<div class="social-network">
        <div class="social-network1">
				<a href="#">
				<i class="facebook"></i>
                <p>like Us On Facebook</p>
				<div class="clearfix"></div>
				</a>
        </div>
        <div class="social-network2">
			<a href="#">
			<i class="twitter"></i>
			<p>Follow us On Twitter</p>
			</a>
        </div>
        <div class="social-network3">
			<a href="#">
			<i class="googlepluse"></i>
			<p>Follow Us On Google+</p>
			</a>
        </div>
        <div class="clearfix"></div>
    </div> -->
		</div>
   <!-- contact -->
    <!-- footer-section-starts -->
	<div class="footer">
		<div class="copy-rights text-center">
				<p>Copyright &copy; 2018.Company Prince All rights reserved.</p>
		</div>			
	</div>
	<!-- footer-section-ends -->
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>