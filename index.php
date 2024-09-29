<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
</head>
<body>
	<?php session_start(); ?>
	
	<?php
	if (isset($_SESSION['username'])) {
		echo "<h2>You are logged in as: " . $_SESSION['username'] . "</h2>";
		echo "<p>Please log out before logging in as a different user.</p>";
		echo '<a href="logout.php">Logout</a>';
	} else {
		echo "<h2>No one is currently logged in.</h2>";
	}
	?>

	<form action="handleforms.php" method="POST">
		<p><input type="text" placeholder="Username" name="username" required></p>
		<p><input type="password" placeholder="Password" name="password" required></p>
		<p><input type="submit" value="Submit" name="submitBtn"></p>
	</form>
	<a href="register.php">Register</a><br>
	
</body>
</html>