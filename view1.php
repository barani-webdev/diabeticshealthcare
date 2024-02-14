<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>DOCTOR</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="js/modernizr.js"></script>
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	
	<!-- ====================================================
	header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 header-logo">
					<br>
					<a href="index.php"><img src="img/logo.png" alt="" class="img-responsive logo"></a>
				</div>

				<div class="col-md-7">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      
					      <ul class="nav navbar-nav navbar-right">
					        <!--<li><a class="menu" href="index.php" >Home</a></li>-->
					        <li><a class="menu active" href="add.php">Add docter</a></li>
					        <li><a class="menu" href="add1.php">Add Nurse </a></li>
					        <li><a class="menu" href="view1.php">Patient</a></li>
					        <li><a class="menu" href="med.php">Medicine</li>
							      <li><a class="menu" href="report.php">Report</li>
						
							 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button><li><a class="menu" href="index.php" style="color:white;background-color:#337ab7;font-size:25px;">Logout</li></button>
					      </ul>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->

<!-- end of slider section -->

	<!-- about section -->
	<!-- end of about section -->


	<!-- service section starts here -->
<!-- end of service section -->


	<!-- team section -->
	<!-- end of team section -->

	<!-- map section -->
	<div class="api-map" id="contact">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 map" id="map"></div>
			</div>
		</div>
	</div><!-- end of map section -->
<br><br><br><br><br>
	<!-- contact section starts here -->
	<section class="contact">
		<div class="container">
			<div class="row">
				<div class="contact-caption clearfix"><br><br><br><br>
				
                  <table border="1" width="75%"bgcolor="white"  align="center">
                           <tr height="80" align="center" bgcolor="olive" style="color:white;">
                               <th> Name</th>
							    <th>Age</th>
								<th>BloodGroup </th>
								 <th>problem </th>
                                 
                               </tr>

<?php
include ('db.php');
  //$sqlup="Select * from bill order by bill_id desc";

  $sqlup="Select * from register";

  $we=mysqli_query($con,$sqlup);
while($res=mysqli_fetch_object($we))
{
?>
 <tr>
    <td height="40" align="center"><?php echo $res->name; ?></td>
    <td align="center"><?php echo $res->ages; ?></td>
       <td align="center"><?php echo $res->bloodgroup; ?></td>
    <td align="center"><?php echo $res->problem; ?></td>
   </tr>
  <?php 
 } ?>




                       </table>   <br><br><br><br>
				
			
				</div>
			</div>
		</div>
	</section><!-- end of contact section -->

	<!-- footer starts here -->
	<footer class="footer clearfix">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 footer-para">
					<p style="font-size:15px;">&copy;rightes2017</p>
				</div>
				<div class="col-xs-6 text-right">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-skype"></i></a>
				</div>
			</div>
			
		</div>
	</footer>

	<!-- script tags
	============================================================= -->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>

