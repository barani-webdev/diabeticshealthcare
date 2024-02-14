<?php
require_once(db.php);
?>
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
					       	 <li><a class="menu" href="lab.php">Report</li>
						
							 	
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
						
					</div>
					<div class="col-md-5 contact-info text-left">
						
						<div class="info-detail"><br><br><br>
							<!--<a href="index.php"><img src="img/the.JPG" alt="" class="img-responsive logo" style="width:15px height:100px;"></a>-->
							<a href="index.php"><img src="img/download.PNG" alt="" class="img-responsive logo"  style="width:250px;height:250px;"></a>
						</div>
					</div>
					<div class="col-md-4 col-md-offset-2 contact-form">
						
						<form method="post" action=""><br><br>
							<select name="pid"> 
        <option value="">Select Patient Id</option>
       
	   
	   <?php
	   
	   
  //$sqlup="Select * from bill order by bill_id desc";

  $sqlup="Select * from register";

  $we=mysqli_query($con,$sqlup);
while($res=mysqli_fetch_object($we))
{
?>
<option value="<?php echo $res->pid;?>"><?php echo $res->pid;?></option>
<?php } ?>  
	 </select><br><br>
	 
	 	      <select name="pn"> 
        <option value="">Select Patient Name</option>
       
	   
	   <?php
	   
	   
  //$sqlup="Select * from bill order by bill_id desc";

  $sqlup="Select * from  register";

  $we=mysqli_query($con,$sqlup);
while($res=mysqli_fetch_object($we))
{
?>
<option value="<?php echo $res->name;?>"><?php echo $res->name;?></option>
<?php } ?>  
	 </select><br><br>
	      <select name="dn"> 
        <option value="">Select Docter Name</option>
       
	   
	   <?php
	   
	   
  //$sqlup="Select * from bill order by bill_id desc";

  $sqlup="Select * from  docters";

  $we=mysqli_query($con,$sqlup);
while($res=mysqli_fetch_object($we))
{
?>
<option value="<?php echo $res->name;?>"><?php echo $res->name;?></option>
<?php } ?>  
	 </select><br><br>
							<input class="name" type="text" name="bb" placeholder=" Enter the BB"><br><br>
							<input class="password" type="text" name="sug" placeholder=" Enter the Suger"><br><br>
								<input class="password" type="text" name="cho" placeholder=" Enter the cholesterol"><br><br>
							<input class="password" type="text" name="ecg" placeholder=" Enter the Ecg"><br><br>
								<input class="password" type="text" name="urine" placeholder=" Enter the Urine">
										<input class="password" type="text" name="ra" placeholder=" Enter the X-ray"><br><br>
							
							<input class="submit-btn" type="submit" name="submit" value="SUBMIT"><br><br><br><br>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section><br><br><br><br><br><br><br><br><br><br><br><br>

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
if(isset($_POST['submit']))
{
	$pid=$_POST['pid'];
	$pn=$_POST['pn'];
	$dn=$_POST['dn'];
	$bb=$_POST['bb'];
	$sug=$_POST['sug'];
	$cho=$_POST['cho'];
	$ecg=$_POST['ecg'];
	$urine=$_POST['urine'];
	$ra=$_POST['ra'];
 $ins="INSERT into lab(`pid`,`pn`,`dn`,`bb`,`sug`,`cho`,`ecg`,`urine`,`ra`)
	values('$pid','$pn','$dn','$bb','$sug','$cho','$ecg','$urine','$ra')";
	 $check_res=mysqli_query($con,$ins);
	 if(mysqli_num_rows($check_res)>0)
        {
			echo "<script type='text/javascript'>alert('Added successfully');</script>";
			echo "<meta http-equiv='refresh' content='0;url=lab.php'>";
			
		}

}

?>
