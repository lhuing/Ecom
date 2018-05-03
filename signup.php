<?php
include 'db_connection.php';

$conn = OpenCon();

echo "Connected Successfully";


if( isset($_POST["register"]) ){
		
		$username = $_POST["username"];
		$phone = $_POST["phone"];
		$password = $_POST["password"];
  

$sql = "INSERT INTO user (username, phone, password) VALUES ('$username', '$phone', '$password')";
		
if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully ";
	session_start();
	$_SESSION['loginUser'] =$_POST["phone"] ;

	echo 'session create'.$_SESSION['loginUser'];
	header("Location: http://localhost/ridenow/booking.php");
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	echo"<script> alert('This phone number has been used')</script>";
	echo '<script>history.back();</script>';
	
}

}

else if( isset($_POST["driverRegister"]) ){
		
		$drivername = $_POST["drivername"];
		$driverphone = $_POST["driverphone"];
		$password = $_POST["password"];
  

$sql = "INSERT INTO driver (driverName, driverPhone, password) VALUES ('$drivername', '$driverphone', '$password')";
		
if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully ";
	session_start();
	$_SESSION['loginUser'] =$_POST["driverphone"] ;

	echo 'session create'.$_SESSION['loginUser'];
	header("Location: http://localhost/ridenow/acceptRider.php");
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	echo"<script> alert('This phone number has been used')</script>";
	echo '<script>history.back();</script>';
	
}

}

$conn->close();
?>