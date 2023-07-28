<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION["username"])) {
  header("Location: doctorlogin.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>User Page</title>
</head>
<body>
  <h2>Welcome, <?php echo $_SESSION["username"]; ?></h2>
  Would you like to log out?
  Do so <a href="logout.html">here</a>.
  <!-- Page content goes here -->
</body>
</html>
