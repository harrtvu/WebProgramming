<?php include "php.php"; ?>
<!DOCTYPE html>
<html>
<title>Login</title>
<head>
<link src="stylesheet" type="text/css" href="css.css">
</head>
<div align="center">
<body style="margin-top: 100px">

<header>Login</header>
<form name="form1" method="POST" action="loginPage.php">

	<label>Username</label><input type="text" name="loginUser">
	<br><label>Password</label><input type="password" name="loginPass">
	<br><input type="submit" name="submit" value="Submit" />
	<br><?php echo $loginError ?>
</form>
<br><input type="button" onclick="location.href='html.html';" value="Go to homepage"/>
</body>
</div>
</html>