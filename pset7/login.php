<?php
	// require common code
	require_once("includes/common.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="css/styles.css"/>
	<title>CC50 Finance: Log in</title>
</head>
<body>
	<div id="top">
		<a href="index.php"><img alt="CC50 Finance" src="images/logo.png" style="height: 200px;"></a>
	</div>

	<div id="middle">
		<form action="login2.php" method="post">
			<table>
				<tr>
					<td>User:</td><td><input name="username" type="text"></td>
				</tr>
				<tr>
					<td>Password:</td><td><input name="password" type="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Log In"></td>
				</tr>
			</table>
		</form>
		<p>or <a href="register.php">register</a> in the website</p>
	</div>

	<div id="bottom">
		<span>© njtsb1</span>
	</div>
</body>
</html>
