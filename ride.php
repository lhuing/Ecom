<?php
include 'db_connection.php';

$conn = OpenCon();

echo "Connected Successfully";


session_start();
if(isset($_SESSION['loginUser'])) {
  echo "Your session is running " . $_SESSION['loginUser'];
  }

if( isset($_POST["confirm"]) ){
		
		$phone = $_SESSION['loginUser'];
		$platformName = $_SESSION["platformName"];
		$current = $_SESSION["current"];
		$destination = $_SESSION["destination"];
		$price = $_SESSION["price"];
  

$sql = "INSERT INTO booking (phone, platformName, current, destination, price) VALUES ('$phone', '$platformName', '$current', '$destination', '$price')";
		
if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully ";
	//session_start();
//	$_SESSION['loginUser'] =$_POST["username"] ;

//	echo 'session create'.$_SESSION['loginUser'];
	//header("Location: http://localhost/ridesnow/booking.php");
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
//	echo"<script> alert('This phone number has been used')</script>";
//	echo '<script>history.back();</script>';
	
}

}


$conn->close();
?>


<html>
<body>
	<h1>We are finding a driver for you...</h1>
	<form action="pickupStatus.php" method="post">
	<input type="submit" name="ok" value="OK">
	</form>

	</body>
</html>

