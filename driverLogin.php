<?php
	include "verifyLogin.php";
?>

<!DOCTYPE html>
<html>
	
	<body>
  

    <form action="verifyLogin.php" method="post">
       
          <label for="phone">Phone Number</label>
          <input type="phone" id="driverphone" name="driverphone" placeholder="Phone Number" required>
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Password" required>
  
            
                <input type="submit" class="btn btn-primary" id="driversubmit" name="driversubmit" value="Login">
         
            </form>
    

   
	</body>
</html>