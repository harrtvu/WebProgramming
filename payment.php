<?php
if(isset($_POST["date"])) {
	$date = $_POST["date"];
}
if(isset($_POST["location"])) {
	$location = $_POST["location"];
}
if(isset($_POST["time"])) {
	$time = $_POST["time"];
}
if(isset($_POST["tickets"])) {
	$tickets = $_POST["tickets"];
}
if(isset($_POST["total"])) {
	$total = $_POST["total"];
}
?>





<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>CGV Cinemas - Payment</title>
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
			<div class="container-small payment">
				<!-- CODE STARTS HERE -->
				<h2 class="title">SUMMARY</h2>
				<ul>
					<li>Desired Date: <?php echo $date; ?> </li>
					<li>Location: <?php echo $location; ?></li>
					<li>Desired Time: <?php echo $time; ?></li>
					<li>Number of Tickets: <?php echo $tickets; ?></li>
					<li>Total Price: $<?php echo $total; ?></li>
				</ul>
				<h2 class="title">PAYMENT</h2>
				<form action="action.php" method="POST">
					<ul class="left payment-list">
						<li>First Name: <input type="name" name="firstname" required></li>
						<li>Last Name: <input type="name" name="lastname" required></li>
						<li>Address: <input type="address" name="address" required></li>
						<li>Postal Code: <input type="text" name="postal" maxlength=6 required></li>
						<li>Country: <input type="text" name="country" required></li>
						<li>Telephone: <input type="number" name="telephone" onKeyPress="if(this.value.length>9) return false;" placeholder="(123)-456-7890" required></li>
					</ul>
					<ul class="right payment-list2">
						<li>Payment Method:
							<select name="card">
								<option value="Visa" required>Visa</option>
								<option value="MasterCard">MasterCard</option>
								<option value="American Express">American Express</option>
							</select>
						</li>
						<li>Card Number: <input type="number" name="cardnumber" onKeyPress="if(this.value.length>15) return false;" required></li>
						<li>Expiry: <input type="number" name="expiry" placeholder="YYMM" onKeyPress="if(this.value.length>3) return false;" required></li>
						<li>Security Code: <input type="number" name="ccv" onKeyPress="if(this.value.length>2) return false;" required></li>
						<li><input type="submit" name="submit" value="CONFIRM"></li>
					</ul>
				</form>
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