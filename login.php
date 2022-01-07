<?php


session_start();
//--------------------Config to database-------------------
error_reporting(0);

	$con = mysqli_connect("localhost", "root", "", "dishtansya") or die
	("Unable to Connect");
//-------------------------------------------------------

//-----------------login backend process--------------

$email = $_POST['email'];
$password = $_POST['password'];

$email_log = stripslashes($email);
$password_log = stripslashes($password);

	
	$user_query = mysqli_query($con, "SELECT * FROM users WHERE email = '$email_log' ");	
	while ($fetch_user = mysqli_fetch_assoc($user_query)) 
	{
		$DBuserEmail = $fetch_user['email'];
		$DBuserPassword = $fetch_user['password'];
	}

		if ($email_log==$DBuserEmail&&$password_log==$DBuserPassword) 
		{
			access_token: "<JSON Web Token>";

		}
		else
		{
			echo "Invalid Credentials";
		}

?>