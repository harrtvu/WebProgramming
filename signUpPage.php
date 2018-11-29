<?php include "php.php"; ?>
<!DOCTYPE html>
<html>
<title>Sign up</title>
<head>
<link src="stylesheet" type="text/css" href="css.css">
</head>
<div align="center">
<body style="margin-top: 100px">
<header>Login</header>
<form name="form1" method="POST" action="signUpPage.php">
	<label>Username</label><input type="text" name="signUser">
	<span><?php echo $registerUserErrors ?></span>
	<br><label>Password</label><input type="password" name="signPass">
	<span><?php echo $registerPassErrors ?></span>
	<br><label>Password Confirm</label><input type="password" name="retypePass">
	<span><?php echo $registerRetypePassErrors ?></span>
	<br><input type="submit" name="submit" value="Submit" />
	<br><?php echo $registerLog1 ?>
</form>
<br><input type="button" onclick="location.href='html.html';" value="Go to homepage"/>
</body>
</div>
</html>