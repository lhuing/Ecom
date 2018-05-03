<?php
include 'db_connection.php';

$conn = OpenCon();

echo "Connected Successfully";

session_start();
if(isset($_SESSION['loginUser'])) {
  echo "Your session is running " . $_SESSION['loginUser'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Cab Booking Form Responsive Widget Template :: W3layouts</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cab Booking Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->

<!-- css files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<!-- //css files -->

<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Amaranth:400,400i,700,700i" rel="stylesheet">
<!--//online-fonts -->
</head>
<body>
<div class="header">
	<h1>Cab Booking Form</h1>
</div>

<div class="w3-main">
	<!-- Main -->
	<div class="about-bottom">
		<div class="w3l_about_bottom_right two">
			<h2 class="tittle"><img src="images/cab.png" alt=""><span>Book Cab Now</span></h2>
			<div class="book-form">

			    <form action="verifyLocation.php" method="post">
										
					<div class="form-date-w3-agileits">
						<div class="form-agileits">
							<label> Pickup Location :</label>
						</div>
						<div class="form-agileits-2">
							<input type="text" name="current" placeholder="Enter an origin location" required="">
						</div>
						<div class="clear"> </div>
					</div>
					<div class="form-date-w3-agileits">
						<div class="form-agileits">
							<label> Drop Location :</label>
						</div>
						<div class="form-agileits-2">
							<input type="text" name="destination" placeholder="Enter a destination location" required="">
						</div>
						<div class="clear"> </div>
					</div>
							
					<div class="make">
						  <input type="submit" name="search" value="Book My Cab">
					</div>
				</form>
			</div>

<table>
	<tr>
		<td>

		</td>
	</tr>
</table>


		</div>
		<div class="clear"> </div>
	</div>
</div>
<!-- //Main -->

	<!-- js-scripts-->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
				
			
	<!-- //js-scripts-->




	
</body>
</html>