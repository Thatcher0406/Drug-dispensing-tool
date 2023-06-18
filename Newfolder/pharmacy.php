<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $username = $_POST["username"];
  $password = $_POST["password"];

  if ($username === "admin" && $password === "password") {
    // Successful login
    echo "Login successful!";
  } else {
    // Invalid login
    echo "Invalid username or password. Please try again.";
  }
}
?>