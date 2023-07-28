<?php
 require_once "connection.php";

if (isset($_POST["register-button"])) {
    $adminSSN = $_POST["adminSSN"];
    $name = $_POST["name"];
    $emailaddress = $_POST["emailaddress"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    
    
    // Check if the connection is successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $register_query = "INSERT INTO administrator (adminSSN,name,emailaddress,password,phone,address) 
    VALUES ('$adminSSN','$name','$emailaddress','$password','$phone','$address')";

    // Check if the query execution is successful
    if ($conn->query($register_query) === TRUE) {
        echo "Registered successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Administrator Registration</title>
        <meta charset="UTF=8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="registrationfiles.css">
    </head>
    <body>
        
         <form action="admin.php" method="POST">
            <label for="adminSSN">Social Security Number(SSN):</label><br>
			<input type="number"id="adminSSN"name="adminSSN"><br>

            <label for="name">Name:</label><br>
			<input type="text"id="name"name="name"><br>

			<label for="emailaddress">Email Address:</label><br>
			<input type="email"id="emailaddress"name="emailaddress" ><br>

			<label for="password">Password:</label><br>
			<input type="text"id="password"name="password"><br>


			<label for="phone">Phone Number:</label><br>
			<input type="number"id="phone"name="phone"><br>

			<label for="address">Address:</label><br>
			<input type="text"id="address"name="address"><br><br><br>
			
			<button><input type="reset"></button>
			<button><input type="submit" id="register-button" name="register-button" value = "Submit"></button>
</body>
</html>


