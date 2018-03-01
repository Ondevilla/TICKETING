<?php  include ('connect.php');?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Report</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<?php include("admin-head-links.php"); ?>

<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">



    <!-- Material Design Bootstrap -->
    <link href="layout/styles/mdb.min.css" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="layout/styles/style.css" rel="stylesheet">
        <link href="layout/styles/simple-sidebar.css" rel="stylesheet">





<script type="text/javascript">
$(document).ready(function(){
    $(".show-text").click(function(){
      $('#myModal').find(".lots-of-text").toggle();
        $('#myModal').modal('handleUpdate');
    });
});
</script>
        <style type="text/css">

#panel {
  
    display: none;
    margin-left: 20px;
    margin-right: 20px;

}
button 
{
  text-decoration: none !important;
}
label
{
  font-size:1em;
  margin-left: 20px;
}
img 
{
  width: 60px;
  height: 60px;
}
</style>














</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php include("admin-header.php"); ?>
  <?php include("main-sidebar.php"); ?>

<div class="content-wrapper">





<br><br>
<div class="wrapper" style="background-color: white;">



<div class="col-md-12">

  <!--Table-->
<table class="table">

    <!--Table head-->
    <thead class="blue-grey lighten-4">
        <tr>
            <th>#</th>
            <th>Event</th>
            <th>User</th>
            <th>Reference</th>
            <th>Zone</th>
            <th>Ticket  </th>

            <th>Total Price</th>     
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
    <?php 
   
    $fetch=mysqli_query($c1,'SELECT * From transac_tbl'); 
    while($row=mysqli_fetch_array($fetch))
    {

  ?>
        <tr>
            <th scope="row" style="vertical-align: middle;"><?php echo $row['0']; ?></th>
            <?php 
       $fetch1=mysqli_query($c1,'SELECT * From event_tbl where event_id="'.$row[1].'" ');
       $row1=mysqli_fetch_array($fetch1) 
       ?>
       
            <th style="color: black;background-color: white; vertical-align: middle;"><?php echo $row1[1]; ?></th>
        
            <?php 
       $fetch2=mysqli_query($c1,'SELECT * From account_tbl where user_id="'.$row[2].'" ');
       $row2=mysqli_fetch_array($fetch2) 
       ?>
       

            <th style="color: black;background-color: white;vertical-align: middle;"><?php echo $row2[1]; ?></th>
            <th style="color: black;background-color: white;vertical-align: middle;"><?php echo $row[3]; ?></th>
            <th style="color: black;background-color: white;vertical-align: middle;"><?php echo $row[4]; ?></th>
            <th style="color: black;background-color: white;vertical-align: middle;"><?php echo $row[5]; ?></th>
            <th style="color: black;background-color: white;vertical-align: middle;"><?php echo $row[6]; ?></th>


      


</tr>




  ?>
      <?php
       }

    ?>
    </tbody>
    <!--Table body-->
</table>
<!--Table-->
</div>
</div>




</div>











<?php include("admin-footer.php"); ?>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<?php include("admin-scripts.php"); ?>
<script>
$(document).ready(function(){

    $("#addbtn").click(function(){
        $("#panel").slideToggle("slow");
    });


});
</script> 
</body>
</html>
