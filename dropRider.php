<?php

include 'db_connection.php';
$conn = OpenCon();

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $mconn->connect_error);
}

session_start();
if(isset($_SESSION['loginUser'])) {
  echo "Your session is running " . $_SESSION['loginUser'];
  }

//getting id from url
  $bookingID = $_GET['bookingID'];
$driverPhone = $_SESSION['loginUser'];
$info_userPhone = $_SESSION['userPhone'];
 
$sql = "UPDATE driver SET driverStatus ='Idle' WHERE driverPhone ='$driverPhone'";
		
if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully ";
   
	header("Location: http://localhost/ridenow/moneyCharged.php");
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	header("Location: http://localhost/ridenow/gotoRider.php");
	
	
}

$conn->close();
?>