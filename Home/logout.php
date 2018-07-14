<?php
  
    session_start();
	session_unset();
	session_destroy();
	
	if(isset($_COOKIE['username']) && isset(S_COOKIE['password'])) {
		$username = $_COOKIE['username'];
		$password = $_COOKIE['password'];
		setcookie('username',$username,time()-1);
		setcookie('password',$password,time()-1);
	}
	header("location: login.php");
	
?>