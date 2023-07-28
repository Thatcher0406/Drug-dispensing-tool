<?php
include "connection.php";

if (isset($_POST["register-button"])) {
    $pharmID = $_POST["pharmID"];
    $name = $_POST["name"];
    $emailaddress = $_POST["emailaddress"];
    $password = $_POST["password"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $contracts = $_POST["contracts"];

    // Check if the connection is successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO pharmacy (pharmID, name, emailaddress, password, address, phone, contracts) 
                           VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issssis", $pharmID, $name, $emailaddress, $password, $address, $phone, $contracts);

    // Check if the query execution is successful
    if ($stmt->execute()) {
        echo "Registered successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pharmacist Information Page</title>
    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="" method="POST">
        <label for="pharmID">Pharmacy ID:</label><br>
        <input type="text" id="pharmID" name="pharmID"><br>

        <label for="name">Pharmacy Name:</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="emailaddress">Email Address:</label><br>
        <input type="email" id="emailaddress" name="emailaddress"><br>

        <label for="password">Password:</label><br>
        <input type="text" id="password" name="password"><br>

        <label for="address">Physical Address:</label><br>
        <input type="text" id="address" name="address"><br>

        <label for="phone">Active Phone Number:</label><br>
        <input type="number" id="phone" name="phone"><br>

        <label for="contracts">Contracts:</label><br>
        <select id="contracts" name="contracts">
            <option value="contract1">Contract 1</option>
            <option value="contract2">Contract 2</option>
            
        </select><br>

        <input type="submit" value="Register" name="register-button">
        <input type="reset">
    </form>
</body>
</html>
