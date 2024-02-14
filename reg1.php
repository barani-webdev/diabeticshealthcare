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
					        <li><a class="menu active" href="reg1.php">Add patient</a></li>
					        <li><a class="menu" href="add1.php">Add Nurse</a></li>
							  <li><a class="menu" href="vh.php">View Medicine</a></li>
							
					       
					    
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
				<div class="contact-caption clearfix">
					<div class="contact-heading text-center"><br><br>
						<h2 style="font-size:50px;">Add Patient</h2><br><br>
					</div>
					<div class="col-md-5 contact-info text-left">
						
						<div class="info-detail"><br><br><br>
							<!--<a href="index.php"><img src="img/the.JPG" alt="" class="img-responsive logo" style="width:15px height:100px;"></a>-->
							<a href="index.php"><img src="img/images.JPG" alt="" class="img-responsive logo"  style="width:250px;height:250px;"></a>
						</div>
					</div>
					<div class="col-md-4 col-md-offset-2 contact-form">
						
						<form method="post" action=""><br><br>
						<input class="name" type="text" name="pid" placeholder=" Enter the pId"><br><br>
						<input class="name" type="text" name="name" placeholder=" Enter the Name"><br><br>
							<input class="password" type="text" name="email" placeholder=" Enter the Email "><br><br>
							<input class="name" type="text" name="mob" placeholder=" Enter the Mobile No"><br><br>
							<input class="password" type="text" name="adder" placeholder=" Enter the Address"><br><br>
								<input class="password" type="text" name="age" placeholder=" Enter the Age"><br><br>
								<input class="password" type="date" name="date" placeholder=" Enter the Date"><br><br>
							<input class="password" type="text" name="bg" placeholder=" Enter the Blood Group"><br><br>
							 <select name="gender">
							   <option value="Gender">gender</option>
	  <option value="male">Male</option>
	     <option value="Female">Female</option>
	 
	 
	 </select><br><br>
									<input class="password" type="text" name="problem" placeholder=" Enter the problem"><br><br>
									<input class="password" type="text" name="uname" placeholder=" Enter the User name"><br><br>
								<input class="password" type="password" name="pwd" placeholder=" Enter the Password">
							
							<input class="submit-btn" type="submit" name="submit" value="SUBMIT"><br><br><br><br>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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
include ('db.php');
if(isset($_REQUEST['submit']))
{
	
 $ins="insert into register(`pid`,`name`,`email`,`mob`,`adder`,`ages`,`bloodgroup`,`problem`,`gender`,`uname`,`upass`)
	values('".$_REQUEST['pid']."','".$_REQUEST['name']."','".$_REQUEST['email']."','".$_REQUEST['mob']."','".$_REQUEST['adder']."','".$_REQUEST['age']."','".$_REQUEST['bg']."','".$_REQUEST['gender']."','".$_REQUEST['problem']."','".$_REQUEST['uname']."','".$_REQUEST['pwd']."')";
	mysqli_query($con,$ins);
echo "<script type='text/javascript'>alert('Added successfully');</script>";
echo "<meta http-equiv='refresh' content='0;url=patient.php'>";
}
?>
