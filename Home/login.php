<?php
	
	if(isset($_GET['status'])){
		$status = $_GET['status'];

		if($status == "invaliduser"){
			echo "Invalid user info! try again...";
		}else if($status == "nullvalue"){
			echo "Username/password can't be empty";
		}
	}
	elseif (isset($_COOKIE['username']) && isset(S_COOKIE['password'])) {
		$username = $_COOKIE['username'];
		$password = $_COOKIE['password'];
		
		echo "<script>
			document.getElementById('username').value='$username';
			document.getElementById('password').value='$password';
		</script>";
	}
?>

<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="loginc.css">



<body>

	<form method="post" action="loginCheck.php">
	<div class="loginbox">
	<img src="loginlogo.png"  class="loginform">
	<h1>Login Here</h1>
		<form>
			<p>Username</p>
			<input type="text" id="username" name="username" placeholder="Enter Username">
			<p> Password <p>
			<input type="Password" id="password" name="password" placeholder="Enter Password">
			<input type="checkbox" name="remember" value="1">Remember me
			<input type="submit" name="submit" value="Login">	<br>

			<a href="ForgotPassword.php">Forgot your pasword?</a><br><br>
			<a href="CreateAccount.php">Don't have any account? </a>

		</form>
	</div>


</body>
</head>
</html>