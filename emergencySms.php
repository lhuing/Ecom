
<?php
include 'db_connection.php';

$conn = OpenCon();

echo "Connected Successfully";

session_start();
if(isset($_SESSION['loginUser'])) {
  echo "Your session is running " . $_SESSION['loginUser'];
  }

$phone = $_SESSION['loginUser'];
$get_userinfo= "select * from user where phone = '$phone'";

    $run_getuser = mysqli_query($conn,$get_userinfo);
    
  $result = mysqli_fetch_array($run_getuser);

 $get_emergency= "select * from booking where phone = '$phone'";

    $run_getemergency = mysqli_query($conn,$get_emergency);
    
  $emerResult = mysqli_fetch_array($run_getemergency);  


  // Authorisation details.
  $username = "alysia_ng@yahoo.com";
  $hash = "b671545d3b605b8d3478f69ab868e9e556df6f00ce165eb6efcaa3a15b1b4db4";

  // Config variables. Consult http://api.txtlocal.com/docs for more info.
  $test = "0";

  // Data for text message. This is the text message data.
  $sender = "RideNow"; // This is who the message appears to be from.
  $numbers = $result['emergencyPhone']; // A single number or a comma-seperated list of numbers
  $message = "RideNow. ". $result['username']. " is in dangerous! He/She is now taking a cab under our platform and traveling from ". $emerResult['current']. " to " . $emerResult['destination'] ;
  // 612 chars or less
  // A single number or a comma-seperated list of numbers
  $message = urlencode($message);
  $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
  $ch = curl_init('http://api.txtlocal.com/send/?');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch); // This is the result from the API
  curl_close($ch);
  header("Location: http://localhost/ridenow/onBoard.php");
?>