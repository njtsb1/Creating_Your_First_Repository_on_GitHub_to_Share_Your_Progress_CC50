<?php
	// requer código comum
	require_once("includes/common.php");

	if (empty($_POST["username"]) || empty($_POST["password"]))
		apologize("Fill in all fields.");

	if ($_POST["password"] != $_POST["password2"])
		apologize("Different passwords.");

	// escapar nome de usuário e senha para segurança
	$username = mysqli_real_escape_string($connection, $_POST["username"]);
	$password = mysqli_real_escape_string($connection, $_POST["password"]);

	if (!mysqli_query($connection, "INSERT INTO users (username, password, cash) VALUES ('$username', '$password', 10000.0000)"))
		apologize("Username already exists.");

	$uid = mysqli_insert_id($connection);
	$_SESSION["uid"] = $uid;
	redirect("index.php");
?>
