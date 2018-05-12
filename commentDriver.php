<?php 


include 'db_connection.php';

$conn = OpenCon();

echo "Connected Successfully";

session_start();
if(isset($_SESSION['loginUser'])) {
  echo "Your session is running " . $_SESSION['loginUser'];
  }
$phone = $_SESSION['loginUser'];
$driverName = $_SESSION['driverName'];
$driverPhone = $_SESSION['driverPhone'];

?>
<html>

<body>
<label>Comment your driver</label>
<form action="commentSubmit.php" method="POST">
<input type="text" name="commentMsg" placeholder="Enter your comment"> 
<input type="submit" name="comment" value="Submit">
</form>
</body>

</html>

