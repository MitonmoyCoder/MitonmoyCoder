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
	<title>BDAPP</title>
	<link rel="stylesheet" type="text/css" href="home.css"/>
</head>
<body>
	<div class="header1">
		<div id="img3" class="header1"><img src=""/></div>
		<div id="searcharea" class="header1"><input type="text" placeholder="search" id="searchbox"/></div>
		<div id="profilearea" class="header1"><a href="profile.php"><img src="profile.png"/></a></div>
		<div id="profilearea1" class="header1"><a href="profile.php">Profile</a></div>
		<div id="profilearea2" class="header1">|</div>
		<div id="profilearea3" class="header1"><a href="Home.php">Home</a></div>
		<a href="frndrequest.php">
			<div id="findf" class="header1"><img src="frn.jpg"/></div>
		</a>
		<a href="chat.php">
			<div id="message" class="header1"><img src="chat.png"/></div>
		</a>
		<a href="notification.php">	
			<div id="notification" class="header1"><img src="noti.png"/></div>
		</a>....	
		<div id="profilearea4" class="header1">|</div>
	<a href="settings.php">	
		<div id="setting" class="header1"><img src="set.png"/></div>
	</a>	
		<div id="logout" class="header1"><a href="logout.php"><img src="log.png"/></a></div>
	</div>

	<div class="bodyn">
		<div id="side1" class="bodyn"><img src="profile.png"/><a href="profile.php">Profile</a></div>
		<div id="side2" class="bodyn"><a href="settings.php">Edit Profile</div>
	<a href="home.php">		
		<div id="side3" class="bodyn">News Feed</div>
	</a>	
	<a href="chat.php">	
		<div id="side4" class="bodyn">Messages</div>
	</a>	
	<a href="event.php">
		<div id="side5" class="bodyn">Events</div>
	</a>	
		<div id="side6" class="bodyn">PAGES</div>
	<a href="likedpages.php">	
		<div id="side8" class="bodyn">Liked Pages</div>
	</a>	
		//<div id="side11" class="bodyn">GROUPS</div>
	<a href="groupmessage.php">
		<div id="side13" class="bodyn">Group Message</div>
	</a>
		<div id="side14" class="bodyn">APPS</div>
	<a href="games.php">	
		<div id="side16" class="bodyn">Games</div>
	</a>	
		
	</div>

	<div class="post1"></div>

	<div class="post2"></div>

	<div class="post3"></div>

	<div class="post4"></div>

	<div class="post5"></div>

	<div class="post6"></div>

	<div class="header2"></div>

	<div class="sidebox"></div>

	<div class="sidebox2"></div>

	<div class="post7">
		<div id="col1" class="post7">update status | add photos/videos | create photo album<hr><br><br><br><br><br><br><hr></div>
		<div id="postpos" class="post7"><input type="submit" id="buttonpost" value="post"></div>
		<div id="postboxpos" class="post7"><textarea placeholder="What's in your mind?" id="postbox" type="text"></textarea></div>
	</div>

	<div class="post8"><img src="profile.png"/><br><br><img src="pic.jpg" height="411" width="580"/><br><br><p6>Like Comment Share</p6>
	<div id="commentprof2" class="post8"><img src="profile.png"/></div>
	<div id="commentboxpos2" class="post8"><input type="textarea" placeholder="comment" id="commentbox"/></div>
	</div>

	<div class="post9"><img src="profile.png"/><br><br><img src="pic2.jpg" height="400" width="580"/><br><br><p6>Like Comment Share</p6>
	<div id="commentprof2" class="post9"><img src="profile.png"/></div>
	<div id="commentboxpos2" class="post9"><input type="textarea" placeholder="comment" id="commentbox"/></div>
	</div>

	<div class="sidebox">
		<div id="sidebox31" class="sidebox">
		<div id="sidebox32">YOUR PAGES</div><hr><br><br><br>See all<hr>
		<div id="sidebox33">This Week</div><br><br><br>See more<hr>
		<div id="sidebox34">Recent Posts</div><br><br><br>See more<hr>
		<div id="sidebox35">You haven't posted in this days</div><br><br><br><br><br><br>See all</div>
		<div id="post1pos" class="sidebox"><input type="submit" id="buttonpost1" value="write a post"/></div>

		<div class="sidebox2">
			<div id="sidebox21" class="sidebox2"><br><hr>
				<div id="sidebox22">Trending</div><br><br><br>See more<hr>
				<div id="sidebox23">Suggested Pages</div><br><br><br>See all<hr>
				<div id="sidebox24">People you may know</div><br><br><br><br><br><br>See all
		</div>
	</div>
	
	<div class="chat-sidebarx"></div>

	<div class="chat-sidebar">
		<div id="chatnamebox1" class="chat-sidebar">pp</div>
		<div id="chatnamebox2" class="chat-sidebar">pp</div>
		<div id="chatnamebox3" class="chat-sidebar">pp</div>
		<div id="chatnamebox4" class="chat-sidebar">pp</div>
		<div id="chatnamebox5" class="chat-sidebar">pp</div>
		<div id="chatnamebox6" class="chat-sidebar">pp</div>
		<div id="chatnamebox7" class="chat-sidebar">pp</div>
		<div id="chatnameboxp1" class="chat-sidebar"><img src="profile.png"/></div>
		<div id="chatnameboxp2" class="chat-sidebar"><img src="profile.png"/></div>
		<div id="chatnameboxp3" class="chat-sidebar"><img src="profile.png"/></div>
		<div id="chatnameboxp4" class="chat-sidebar"><img src="profile.png"/></div>
		<div id="chatnameboxp5" class="chat-sidebar"><img src="profile.png"/></div>
		<div id="chatnameboxp6" class="chat-sidebar"><img src="profile.png"/></div>
		<div id="chatnameboxp7" class="chat-sidebar"><img src="profile.png"/></div>
	</div>
</body>
</html>