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
<title>Cab Booking</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cab Booking Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>


 
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="typeahead.min.js"></script>
    <script>
    $(document).ready(function(){
    $('input.typeahead').typeahead({
        name: 'current',
        remote:'search.php?key=%QUERY',
        limit : 10
    });
});
    </script>
    <style type="text/css">
.bs-example{
    font-family: sans-serif;
    position: relative;
    margin: 50px;
}
.typeahead, .tt-query, .tt-hint {
    border: 2px solid #CCCCCC;
    border-radius: 8px;
    font-size: 24px;
    height: 30px;
    line-height: 30px;
    outline: medium none;
    padding: 8px 12px;
    width: 396px;
}
.typeahead {
    background-color: #FFFFFF;
}
.typeahead:focus {
    border: 2px solid #0097CF;
}
.tt-query {
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
}
.tt-hint {
    color: #999999;
}
.tt-dropdown-menu {
    background-color: #FFFFFF;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 8px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    margin-top: 12px;
    padding: 8px 0;
    width: 422px;
}
.tt-suggestion {
    font-size: 24px;
    line-height: 24px;
    padding: 3px 20px;
}
.tt-suggestion.tt-is-under-cursor {
    background-color: #0097CF;
    color: #FFFFFF;
}
.tt-suggestion p {
    margin: 0;
}
</style>
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
<div class="nav">
<input type="button" value="My Account" onClick="document.location.href='profile.php'">
<input type="button" value="Payment Method" onClick="document.location.href='paymentMethod.php'">
<input type="button" value="Logout" onClick="document.location.href='logout.php'">
</div>


<div class="header">
	<h1>My Account</h1>
</div>

<div class="w3-main">
	<!-- Main -->
	<div class="about-bottom">
		<div class="w3l_about_bottom_right two">
			<h2 class="tittle"><img src="images/cab.png" alt=""><span><?php echo " "?></span></h2>
			<div class="book-form">

			    <form action="verifyLocation.php" method="post">
										
					<div class="form-date-w3-agileits">
						<div class="form-agileits">
							<label> Pickup Location :</label>
						</div>
						<div class="form-agileits-2">

   
    
        <input type="text" name="current" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder="Enter an origin location" required="">
    
 

					
						</div>
						<div class="clear"> </div>
					</div>



					<div class="form-date-w3-agileits">
						<div class="form-agileits">
							<label> Drop Location :</label>
						</div>
						<div class="form-agileits-2">
						   <input type="text" name="destination" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder="Enter a destination location" required="">
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






	
</body>
</html>