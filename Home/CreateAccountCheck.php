<?php

	if(isset($_POST['submit'])){

		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$retypepassword = $_POST['retypepassword'];
		$gender   = $_POST['gender'];

/*
		if($first == "" || $last == "" || $email == "" || $username == "" || $password == "" || $retype == "" || $gender == ""){

			//echo "invalid submission";
			header("location: CreateAccount.php");
*/
			if($firstname == "" || $lastname == "" || $email == "" || $username == "" || $password == "" || $retypepassword == "" || $gender == ""){

			//echo "invalid submission";
			header("location: CreateAccount.php");

		}else{

			$myfile = fopen("user.txt", 'a');
			$data = $firstname."|".$lastname."|".$email."|".$username."|".$password."|".$retypepassword."|".$gender."\r\n";
			fwrite($myfile, $data);
			fclose($myfile);

			header("location: login.php");

		}
	}
?>