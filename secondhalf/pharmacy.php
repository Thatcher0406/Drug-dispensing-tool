<?php
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $emailaddress = $_POST["emailaddress"];
    $password = $_POST["password"];

    // Connect to the database
    $conn = new mysqli("localhost", "root", "", "drugdispensing");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the query
    $stmt = $conn->prepare("SELECT * FROM pharmacy WHERE emailaddress = ?");
    $stmt->bind_param("s", $emailaddress);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Use password_verify() to compare hashed passwords
        if (password_verify($password, $row["password"])) {
            // Valid login
            $_SESSION["emailaddress"] = $row["emailaddress"];
            header("Location: pharmacistsview.html");
            exit();

        } else {
            // Invalid password
            header("Location: pharmacistsview.html");
        }
    } else {
        // Invalid username
        echo "Invalid email. Please try again.";
    }

    $stmt->close();
    $conn->close();
}
?>
