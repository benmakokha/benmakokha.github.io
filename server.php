<?php

// my connect to online auction system database; administrators table

session_start();
//initial variables

	$database = "online auction system";
	$Email = "";
	$FirstName = "";
	$errors =  array();

	//connect to database

	$db = mysqli_connect('localhost', 'root', "", $database) or die ("Your connection to web server failed ");


	if($db)

		echo"connected to web_sever";

		else
		echo"connection to web_server failed";

		// Register users; retrieving data from the form using 

		if(isset($_POST['submit'])){



		$FirstName =  mysqli_real_escape_string($db, $_POST['FirstName']); 

		$SecondName =mysqli_real_escape_string($db, $_POST['SecondName']);

		$UserName = mysqli_real_escape_string($db, $_POST['UserName']);

		$Email =  mysqli_real_escape_string($db, $_POST['Email']);

		$Password_1 = mysqli_real_escape_string($db, $_POST['Password']);
		$Password_2 =  mysqli_real_escape_string($db, $_POST['ConfirmPassword']);

		}
		// Form validation statements

		if(isset($_POST['submit'])){

		if(empty($FirstName))

		{
			array_push($errors, "First Name required");

		}

		if(empty($SecondName))

		{
			array_push($errors, "Second Name required");
		}


		if(empty($UserName))

		{
			array_push($errors, "User Name required");
		}


		if(empty($Email))

		{
			array_push($errors, "Email required");
		}


		if(empty($Password_1))

		{
			array_push($errors, "Password is required");
		}



		if(empty($Password_2))

		{
			array_push($errors, "Confirm password is required");



		}


		if($Password_1 !== $Password_2)
		{

			array_push($errors, "Password dont match");

		}


		// Check existing user with the same user Name


		$user_check_query = "SELECT * FROM administrators where UserName = '$UserName' or Email = ' $Email' limit 1";

		$result = mysqli_query($db, $user_check_query);

		if($result != NULL){

		$user = mysqli_fetch_assoc($result);


		if($user)
		{

		if($user['UserName'] === $UserName)

		{

			array_push($errors, "User Name already exist");
		}

		if($result['Email'] === $Email)
		{

			array_push($errors, "This email has already registered a user name");

		}

	}
}



	//register the user if no errors and encrypt the passoword

	if(count($errors) == 0)

	{

		$Password = md5($Password_1); # encrypts password

	    $query= " INSERT INTO administrators( FirstName, SecondName, UserName, Email, Password) VALUES ('$FirstName', '$SecondName', '$UserName', '$Email', '$Password')";

			   mysqli_query($db, $query);

				$results = mysqli_query($db, $query);

					$_SESSION[ 'FirstName'] = $FirstName;
					$_SESSION['success'] = "LOGED IN";
/*New changes From Resipo
					#login page */

<<<<<<< HEAD
					header('location:index.php');
					header('location: admin_login.php');
=======
					#login page 

					header('location:index.php');
>>>>>>> bb29a865310eecd23475e2a3e8ae0e2e0bccae26


				
	}



}



		//ADMIN LOGIN CODE/SIGN IN CODE


		if(isset($_POST['UserMail']))
		{
		$UserMail = mysqli_real_escape_string($db, $_POST['UserMail']);
		
		}
		if(isset($_POST['Password']))
		{
<<<<<<< HEAD

=======
>>>>>>> bb29a865310eecd23475e2a3e8ae0e2e0bccae26
		$Password = mysqli_real_escape_string($db, $_POST['Password']);
		}


		if(empty($UserMail))

		{
			array_push($errors, "User email required");
		}



		if(empty($Password))

		{
			array_push($errors, "Password is required");
		}


		if(count($errors) == 0)

	{

		$Password = md5($Password); # encrypts password

		$query = "SELECT *FROM administrators WHERE Email = '$UserMail' AND Password = '$Password' ";
		echo $UserMail;

		$results = mysqli_query($db, $query);

		if(mysqli_num_rows($results))
		{
		
			echo $UserMail;


			$_SESSION[ 'UserMail'] = $UserMail;
			$_SESSION['success'] = "LOGED IN";

					#login page

					header('location: index.php');
		}			


		
	}
		else{

			array_push($errors, "Invalid UserMail and Password! Try again");


		}
	
 
<<<<<<< HEAD
	
=======
>>>>>>> bb29a865310eecd23475e2a3e8ae0e2e0bccae26


?>
