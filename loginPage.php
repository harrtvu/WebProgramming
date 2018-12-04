<?php include "php.php"; ?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>CGV Cinemas</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	<div>
		<!-- HEADER STARTS HERE -->
		<div class="top-util container">
			<ul class="top-util-left">
				<li><a href="#" target="_blank"><img class="util-logo" src="images/facebook-logo.png">Like</a></li>
				<li><a href="#"><img class="util-logo" src="images/twitter-logo.png">Follow</a></li>
				<li><a href="#"><img class="util-logo" src="images/instagram-logo.png">Follow</a></li>
			</ul>
			<ul id="top-util-right">
				<li><a href="#">news</a></li>
				<li>|</li>
				<li><a href="loginPage.php">login</a></li>
				<li>|</li>
				<li><a href="signUpPage.php">sign up</a></li>
			</ul>
		</div>
		<div class="clear"></div>
		<header>
			<div class="container">
				<a style="float: left" href="html.html"><img class="logo" src="images/cgv-logo.png"></a>
				<div class="head-nav">
					<img class="cul-logo" src="images/cul-logo.png">
					<ul>
						<li><a href="#">MOVIES</a></li>
						<li><a href="#">CINEMAS</a></li>
						<li><a href="#">PROMOTION</a></li>
						<li><a href="#">MEMBERSHIP</a></li>
						<li><a href="#">CONCESSION</a></li>
					</ul>
				</div>
			</div>
		</header>
		<div class="clear"></div>
		<!-- HEADER ENDS HERE -->
		<!-- CODE STARTS AFTER HERE --> 
		
		<div class="main-container">
			<div class="container">
				<!-- CODE STARTS HERE -->
	
<title>Login</title>


<div align="center">
<body style="margin-top: 100px 	list-style: none;
	padding: 5px 0;
	font-size: 14px;
	color: #A21F04;
	font-weight: bold;">

<h2 class="title">Login</h2>
<form name="form2" method="POST" action="loginPage.php">

	<label>Username</label><input type="text" name="loginUser">
	<br><label>Password</label><input type="password" name="loginPass">
	<br><input type="submit" name="submit" value="Submit" />
	<br><?php echo $loginError ?>
</form>

<br><input type="button" onclick="location.href='html.html';" value="Go to homepage"/>
</body>
</div>




		</div>
	</div>
</div>
		<!-- FOOTER STARTS HERE -->
		<div class="footer">
			<div class="footer-top"></div>
			<div class="footer-nav container">
				<ul>
					<li><a href="#">About Us</a></li>
					<li>|</li>
					<li><a href="#">Legal Terms</a></li>
					<li>|</li>
					<li><a href="#">Careers</a></li>
					<li>|</li>
					<li><a href="#">Feedback</a></li>
					<li>|</li>
					<li><a href="#">Contact Us</a></li>
				</ul>
				<img class="footer-logo" src="images/cgv-logo.png">
				<p class="copyright">COPYRIGHT 2018. CGV ALL RIGHTS RESERVED.</p>
			</div>
		</div>
		<!-- FOOTER ENDS HERE -->
		
	</div>

</body>
</html>