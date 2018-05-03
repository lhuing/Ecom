<?php

include 'db_connection.php';

$conn = OpenCon();

echo "Connected Successfully";

session_start();
if(isset($_SESSION['loginUser'])) {
  echo "Your session is running " . $_SESSION['loginUser'];
  }

?>


<html>
<body>
	<h1>You have got a driver</h1>
	<table>
		<?php
		$phone = $_SESSION['loginUser'];
		$get_info= "select booking.driverPhone, driver.driverName, car.carType, car.platNo, car.colour from booking inner join driver on booking.driverPhone = driver.driverPhone inner join car on driver.carID = car.carID where phone='$phone' order by bookingID desc limit 1";

		$run_getdriver = mysqli_query($conn,$get_info);
		
	$res = mysqli_fetch_array($run_getdriver);
	
	
	$info_driverName = $res['driverName'];
		$info_driverPhone = $res['driverPhone'];
		$info_carType = $res['carType'];
		$info_platNo = $res['platNo'];
		$info_colour = $res['colour'];
		
echo "
		
                    <tbody>

                    <tr>
							<td style='width:12em;'>Driver Name</td>
							<td style='width:2em;'>:</td>
							<td style='width:40em;'>$info_driverName</td>

						</tr>
						<tr>
							<td>Driver Phone</td>
							<td>:</td>
							<td>$info_driverPhone</td>
						</tr>
						<tr>
							<td>Car Type</td>
							<td>:</td>
							<td>$info_carType</td>
						</tr>
						<tr>
							<td>Car Plat Number</td>
							<td>:</td>
							<td>$info_platNo</td>
						</tr>
						<tr>
							<td>Car Colour</td>
							<td>:</td>
							<td>$info_colour</td>
						</tr>
						</tbody>
						";?>
<form action="onBoard.php" method="post">
	<input type="submit" name="getdriver" value="Ride Now">
</form>

	</table>
	</body>
</html>