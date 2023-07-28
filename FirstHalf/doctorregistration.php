<?php

require_once "connection.php";
 
if(isset($_POST["register-button"])){
        $docSSN = $_POST["docSSN"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $emailaddress = $_POST["emailaddress"];
        $password = $_POST["password"];
        $phone = $_POST["phone"];
        $yearsofexperience = $_POST["yearsofexperience"];
        $gender = $_POST["gender"];
        $specialty = $_POST["specialty"];
        $additionalinfo = $_POST["extrainfo"];

if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $register_query = "INSERT INTO doctors (docSSN,firstname,lastname,emailaddress,password,phone,yearsofexperience,gender,specialty,extrainfo) 
    VALUES ('$docSSN','$firstname','$lastname','$emailaddress','$password','$phone','$yearsofexperience','$gender','$specialty','$additionalinfo')";

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
		<title>Patient Information Page</title>
		<meta charset="UTF=8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"href="registrationfiles.css">
	</head>
	<body>
		<form action=""method="POST">
			<label for="docSSN">Doctor SSN:</label><br>
			<input type="number"id="docSSN"name="docSSN"><br>

			<label for="firstname">First Name:</label><br>
			<input type="text"id="firstname"name="firstname"><br>

            <label for="lastname">Last Name:</label><br>
			<input type="text"id="lastname"name="lastname"><br>

			<label for="emailaddress">Email Address:</label><br>
			<input type="email"id="emailaddress"name="emailaddress"size="50"><br>

			<label for="password">Password:</label><br>
			<input type="text"id="password"name="password"><br>

			<label for="phone">Phone Number</label><br>
			<input type="number"id="Age"name="Age" size="10"><br>

            <label for="yearsofexperience">Years Of Experience:</label><br>
			<input type="number"id="yearsofexperience"name="yearsofexperience"><br>

			<label for="Gender">Gender:<br>Male</label>
			<input type="radio"id="male"name="Gender"value="Male"><br>

			<label for="Gender">Female</label>
			<input type="radio"id="female"name="Gender"value="Female"><br>

			<label for="Gender">Prefer not to say</label>
			<input type="radio"id="prefernottosay"name="Gender"value="Non-Disclosed"><br>


			<label for="specialty">Specialty:</label><br>
			<input type="text"id="specialty"name="specialty"><br>


            <label for="anyotherinfo">Additional Information</label><br>
			<input type="text"id="anyotherinfo"name="anyotherinfo"><br>

<br><br><br>
			<button><input type="reset"></button><br><br>
            <button><input type="submit" value="Submit" name="register-button"></button>
        </form>
	</body>
</html>

