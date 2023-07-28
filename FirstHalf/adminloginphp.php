<?php

session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $name = $_POST["name"];
  $password = $_POST["password"];
  echo"success";

  // Connect to the database 
  $conn = new mysqli("localhost", "root", "", "drugdispensing");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Prepare and execute the query
  $stmt = $conn->prepare("SELECT * FROM administrator WHERE name = ?");
  $stmt->bind_param("s", $name);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    
    if ( $password == $row["password"]) {
      // Valid login
      $_SESSION["username"] = $row["name"];
      echo"success";
      header("Location: adminviewpage.php");
      exit();
    } else {
      // Invalid password
      echo "Invalid password. Please try again.";
      echo "<br>";
      echo $row["password"];
    }
  } else {
    // Invalid username
    echo "Invalid username. Please try again.";
  }

  $stmt->close();
  $conn->close();
}
?>
