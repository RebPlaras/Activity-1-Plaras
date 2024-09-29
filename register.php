<?php
session_start();


if (isset($_SESSION['username'])) {
   echo '<h2>You must log out before registering a new account.</h2>';
   echo '<a href="logout.php">Logout</a>';
   exit();
}

if (isset($_POST['registerBtn'])) {
   $_SESSION['username'] = $_POST['username'];
   $_SESSION['password'] = md5($_POST['password']);

   header("Location: index.php");
   exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Register</title>
</head>
<body>
   <h2>Register</h2>
   <form action="register.php" method="POST">
       <p><input type="text" placeholder="Username" name="username" required></p>
       <p><input type="password" placeholder="Password" name="password" required></p>
       <p><input type="submit" value="Register" name="registerBtn"></p>
   </form>
   <a href="index.php">Back to Login</a>
</body>
</html>
