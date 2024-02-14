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
					        <li><a class="menu" href="index.php" >Home</a></li>
					        <!--<li><a class="menu" href="#about">about us</a></li>-->
					        <li><a class="menu" href="admin.php">Admin </a></li>
					        <li><a class="menu" href="patient.php">Patient</a></li>
					     <li><a class="menu" href="doc.php">Docter</a></li>
						   <li><a class="menu active" href="nu1.php">Nurse</a></li>
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
				<div class="contact-caption clearfix">
					<div class="contact-heading text-center"><br><br>
						<h2 style="font-size:50px;">Nurse Login</h2><br><br>
						
					<div class="col-md-5 contact-info text-left">
						
						<div class="info-detail"><br><br>
							<a href="index.php"><img src="img/images.JPG" alt="" class="img-responsive logo"></a><br><br>
						</div>
					</div>
					<div class="col-md-4 col-md-offset-2 contact-form" style="text-align:right;">
						
						<form method="post" action=""><br><br>
							<input class="name" type="text" name="uname" placeholder=" Enter the  UserName"><br><br>
							<input class="password" type="password" name="pwd" placeholder=" Enter the  Password"><br><br>
							<input class="submit-btn" type="submit" name="submit" value="SUBMIT">
						</form>
					</div>
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

			<?php
include 'db.php';
if(isset($_REQUEST['submit']))
{
$names=$_REQUEST['uname'];
$pass=$_REQUEST['pwd'];
 echo $sel="select * from `nurse` where  uname='$names' AND  pwd='$pass'";
$res=mysqli_query($con,$sel);
$res1=mysqli_fetch_object($res);
if($res1 > 0)
{


echo "<script type='text/javascript'>alert('Nurse Login successfully');</script>";
echo "<meta http-equiv='refresh' content='0;url=rep.php'>";
}else
{
echo "<script type='text/javascript'>alert('Invalid login');</script>";

}
}
?>