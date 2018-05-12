<?php

include 'db_connection.php';

$conn = OpenCon();

echo "Connected Successfully";

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

			    <form action="signup.php" method="post">
										
					<div class="form-date-w3-agileits">
						<div class="form-agileits">
							<label> Username :</label>
						</div>
						<div class="form-agileits-2">
							<input type="text" name="username" placeholder="Enter Username" required="">
						</div>
						<div class="clear"> </div>
					</div>
					<div class="form-date-w3-agileits">
						<div class="form-agileits">
							<label> Phone Number :</label>
						</div>
						<div class="form-agileits-2">
							<input type="text" name="intno" value="+60" readonly>
							<input type="text" name="phone" id="phone" oninput="checkdupphone()" placeholder="Enter Phone Number" required="">
							<small ><p id="duplabelphone"></p></small>
						</div>
						<div class="clear"> </div>
					</div>

					<div class="form-date-w3-agileits">
						<div class="form-agileits">
							<label> Email Address :</label>
						</div>
						<div class="form-agileits-2">
							<input type="email" name="email" id="email"  placeholder="Enter Email Address" required="">
						</div>
						<div class="clear"> </div>
					</div>

							<div class="form-date-w3-agileits">
						<div class="form-agileits">
							<label> Password :</label>
						</div>
						<div class="form-agileits-2">
							<input type="password" name="password" placeholder="Enter Password" required="">
						</div>
						<div class="clear"> </div>
					</div>


					<div class="form-date-w3-agileits">
						<div class="form-agileits">
							<label> Emergency Contact <br> Phone Number:</label>
						</div>
						<div class="form-agileits-2">
							<input type="text" name="emerPhone" placeholder="Enter Emergency Contact Number" required="">
						</div>
						<div class="clear"> </div>
					</div>

					<div class="form-date-w3-agileits">
						<div class="form-agileits">
							<label> Emergency Contact <br> Name:</label>
						</div>
						<div class="form-agileits-2">
							<input type="text" name="emerName" placeholder="Enter Emergency Contact Name" required="">
						</div>
						<div class="clear"> </div>
					</div>
							
					<div class="make">
						  <input type="submit" name="register" value="Register">
					</div>
				</form>
			</div>
		</div>
		<div class="clear"> </div>
	</div>
</div>
<!-- //Main -->

	<!-- js-scripts-->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		
	<script>
function checkdupphone() {
    var phone = $("#phone").val();
	$.ajax({
        type: 'POST',
        url: "ajax/checkdupphone.php",
        data: { phone: phone},

        error: function(data) {

            alert(" Can't do because: " + data);
        },
        success: function(data) {
			if(data == "false"){
			if((phone.length)<9){
			document.getElementById("duplabelphone").style.color = "red";
			document.getElementById("duplabelphone").innerHTML = "Phone number must be more than 9 digits";
			}
			else {document.getElementById("duplabelphone").style.color = "green";
			document.getElementById("duplabelphone").innerHTML = "Phone number is valid";}
			}
			else if(data == "true"){
			document.getElementById("duplabelphone").style.color = "red";
			document.getElementById("duplabelphone").innerHTML = "Phone number is invalid";}
			
        }
	});
	
}
</script>
			
	<!-- //js-scripts-->
	
</body>
</html>