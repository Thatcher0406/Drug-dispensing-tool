<?php

session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $firstname = $_POST["firstname"];
  $Password = $_POST["password"];

  // Connect to the database 
  $conn = new mysqli("localhost", "root", "", "drugdispensing");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Prepare and execute the query
  $stmt = $conn->prepare("SELECT * FROM patients WHERE firstname = ?");
  $stmt->bind_param("s", $firstname);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    
    if ( $Password == $row["Password"]) {
      // Valid login
      $_SESSION["username"] = $row["firstname"];
      header("Location: patientview.php");
      exit();
    } else {
      // Invalid password
      echo "Invalid password. Please try again.";
      echo "<br>";
      echo $row["Password"];
    }
  } else {
    // Invalid username
    echo "Invalid username. Please try again.";
  }

  $stmt->close();
  $conn->close();
}
?>
