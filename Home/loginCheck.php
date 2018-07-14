<?php
	
	session_start();

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if($username == "" || $password == ""){

			//echo "invalid submission";
			header("location: login.php?status=nullvalue");

		}else{

			$myfile = fopen("user.txt", 'r');
			$isvalid = "";

			while (!feof($myfile)) 
			{
				
				$data = fgets($myfile);
				$arr = explode("|", $data);
				
				if($arr[3] == $username && $arr[4] == $password){
					$isvalid = "validuser";
				}
			}

			//echo $isvalid;

			if($isvalid == "validuser")
			{

				if(isset($_POST['remember'])) 
				{
					setcookie('username',$username,time()+10);
					setcookie('password',$password,time()+10);
					
				}
				$_SESSION['abc'] = "123";
				header("location: Home.php");
				
			}
			else
			{
				header("location: login.php?status=invaliduser");
			}
			fclose($myfile);

		}
	}

?>