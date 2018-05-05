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

<style>
       
        .reveal-if-active{
            display:none;
        }
    </style>


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


			<form action="payment.php" method="post">
			  <input type="radio" name="paymentmethod" id="cash" value="cash" required="" checked="">
				<label for="cash">Cash</label>
    			<br>
    			<input type="radio" name="paymentmethod" id="card" value="card">
				<label for="cash">Credit/Debit Card</label>
					<div class="reveal-if-active">
						
 					 <input type="text" name="cardnum" id="cardnum" placeholder="Card Number">			
 					 <input type="text" name="cvv" id="cvv" placeholder="CVV">
 					 <label for="cash">Expiry Date</label>
 					  <input type="month" name="exp" id="exp">
					</div>
					<br>
					<input type="submit" name="payment" value="Save">
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
 $(document).ready(function () {
            $('input[type=radio][name=paymentmethod]').change(function () {
                if (this.value == 'cash') {        
                    $('.reveal-if-active').hide();
                }
                else if (this.value == 'card') {
                    $('.reveal-if-active').show();
                }
            });
        });
</script>

<script>
	</script>
			
	<!-- //js-scripts-->
	
</body>
</html>