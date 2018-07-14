<?php

	session_start();

	if(!empty($_SESSION['abc']))
	{
        
		$myfile = fopen("user.txt", 'r');
		$data = fread($myfile, filesize("user.txt"));
		$arr = explode("|", $data);
		fclose($myfile);

	}
	else
	{		
		header("location: login.php");
	}
	
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
	
	<link rel="stylesheet" href="profilestyle.css" >
	
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	
	
	
	<title> Profile </title>
  </head>
  <body>
    <header>
	
	  <div class = "container">
        <span>Profile </span>
	     <ul>
	   
	       <li><a href = "Home.php"> Home </a> </li>
           <li><a href = "#"> Contact </a> </li>	   
	       <li><a href = "#"> Photo </a> </li>
		   <li><a href = "#"> Video </a> </li>	   
	       <li><a href = "login.html"> Logout </a> </li>
	   
	   
         </ul>     
	  </div> 
    </header>
	<div class = "transparent">
	   
	    <div class="all-upload">	
	    <div class = "upload">	
	    <input type="file" name=""  value="">
		<textarea name="name" rows="2" cols="50"></textarea>
        <button type="submit" name="button">upload</button>
	
	    </div>
        </div>
		<br><br>
		
    	<img class="circleimage" src="tnm.jpg" >
		<div class="name">
		<h1 > <font color=#b3b3b3> Mobusshar islam</font></h1>
		</div>
		<div class="add">
		<img class="af" src="addfriend.png">
		
		</div>
		
		<div class="icon">
	    <img class="icons" src="fb.png">
		<img class="icons" src="insta.png">
	    <img class="icons" src="twitter.png">
		<img class="icons" src="snap.png">
	
	    </div>
		
	</div>
	<div class = "uploads">
		<h1><font color=#b3b3b3>WALL</font></h1>
		<p>HI </p>
		</div>

  </body>
  
  
</html>