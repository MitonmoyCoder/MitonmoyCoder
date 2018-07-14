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
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: black;
}

* {
    box-sizing: border-box;
}


.container {
    padding: 16px;
    background-color: white;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}


hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}


.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

a {
    color: dodgerblue;
}

.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>
</head>
<body>

<form action="/action_page.php">
  <div class="container">
    <h1>Change Password</h1>
    
    <hr>

    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <hr>

    <a href="home.php">Confirm</a>
    <a href="home.php">Home</a>
  </div>
  
</form>

</body>
</html>
