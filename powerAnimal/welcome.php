<?php
session_start();
$timeout = 86400; // Number of seconds until it times out.

// Check if the timeout field exists.
if(isset($_SESSION['timeout'])) {
    // See if the number of seconds since the last visit is larger than the timeout period.
    $duration = time() - (int)$_SESSION['timeout'];
    if($duration > $timeout) {
        // Destroy the session and restart it.
        session_destroy();
        session_start();
        $_SESSION[$username]=1;
    }
}
 
// Update the timout field with the current time.
$_SESSION['timeout'] = time();
 

if($_SERVER["REQUEST_METHOD"]=="POST"){
	$username=$_POST['username'];
	$fullname=$_POST['fullname'];
	$email=$_POST['email'];
	if (isset($_COOKIE[$username]))
	 {//already signed in
  		if(empty($username) || empty($fullname) || empty($email))
		{//check if all fields have values otherwise redirect to the login page
				header('Location: http://localhost/login.html');
			}
			
		else{ //increment the visit count only if all fields are non-empty
			if(isset($_SESSION[$username])){
				$power_animal = $_SESSION[$username."animals"];
			
				$_SESSION[$username]+=1;//increment page visit count

			}

		}
  		
  		echo nl2br("Welcome back!! \n");  		
  		echo nl2br("Username: $username. \nFullname: $fullname. \nEmail ID: $email. \n");
  		echo nl2br("Your power animal, $power_animal. \n");
  		
  		print("Visit number: " .$_SESSION[$username]);
  		
	} 

		
	else { //first time visit
			$animals = array("bee", "llama", "octopus", "rabbit", "squirrel", "yak", "tiger", "shark", "frog", "cat");
			$power_animal = $animals[rand(0, count($animals) - 1)];
			
			$_SESSION[$username."animals"] = $power_animal;
			
			$username=$_POST['username'];
			$fullname=$_POST['fullname'];
			$email=$_POST['email'];
			if(empty($username) || empty($fullname) || empty($email))
			{//check if all fields have values
				
				header('Location: http://localhost/login.html');
			}
			else{//set the cookie value
				
				setcookie($username, $username, time()+86400);
				$_SESSION[$username]=1;
				echo nl2br("Welcome!! This is your first visit!\n");
		  		
		  		echo nl2br("Username: $username. \nFullname: $fullname. \nEmail ID: $email. \n");
		  		
		  		echo nl2br("Your power animal: $power_animal. \n");
		  		
			}
	}
	
}

?>