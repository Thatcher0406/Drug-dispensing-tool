<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "Form submitted.";
  // Retrieve form data
  $firstname = $_POST["firstname"];
  $password = $_POST["password"];

  if ($firstname === "firstname" && $password === "Password") {
    // Successful login
    echo "Login successful!";
  } else {
    // Invalid login
    echo "Invalid username or password. Please try again.";
  }
}
?>
