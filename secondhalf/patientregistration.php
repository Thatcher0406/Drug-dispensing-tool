<?php

include "connection.php";

if (isset($_POST["register-button"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $emailaddress = $_POST["emailaddress"];
    $Password = $_POST["Password"];
    $dob = $_POST["dateofbirth"];
    $Gender = $_POST["Gender"];
    $Illness = $_POST["Illness"];
    $primary_physician = $_POST["primary_physician"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $extrainfo = $_POST["extrainfo"];
    $SSN = $_POST["SSN"];

    // Check if the connection is successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
  
    $register_query = "INSERT INTO patients (firstname,lastname,emailaddress,Password,dateofbirth,Gender,Illness,SSN,primary_physician,phone,address,extrainfo) 
    VALUES ('$firstname','$lastname','$emailaddress','$Password','$dob','$Gender','$Illness','$SSN','$primary_physician','$phone','$address','$extrainfo')";

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
    <link rel = "stylesheet" href = "registrationfiles.css" >

<body>
    <form action="" method="POST">

    

</head>
  <title>Profile Picture Upload</title>

<body>

<form action="" method="POST">
        <label for="firstname">First Name:</label><br>
        <input type="text" id="firstname" name="firstname"><br>

        <label for="lastname">Last Name:</label><br>
        <input type="text" id="lastname" name="lastname"><br>

        <label for="emailaddress">Email Address:</label><br>
        <input type="email" id="emailaddress" name="emailaddress" size="50"><br>

        <label for="Password">Password:</label><br>
        <input type="text" id="Password" name="Password"><br>

        <label for="dateofbirth">Date of Birth:</label><br>
        <input type="date" id="dateofbirth" name="dateofbirth"><br>

        <label for="Gender">Gender:<br>Male</label>
        <input type="radio" id="male" name="Gender" value="Male"><br>

        <label for="Gender">Female</label>
        <input type="radio" id="female" name="Gender" value="Female"><br>

        <label for="Gender">Prefer not to say</label>
        <input type="radio" id="prefernottosay" name="Gender" value="Non-Disclosed"><br>


        <label for="Illness">Illness:</label><br>
        <input type="text" id="Illness" name="Illness"><br>

        <label for="SSN">Social Security Number(SSN):</label><br>
        <input type="number" id="SSN" name="SSN"><br>

        <label for="primary_physician">Primary Physician:</label><br>
        <input type="text" id="primary_physician" name="primary_physician"><br>

        <label for="phone">Phone Number:</label><br>
        <input type="number" id="phone" name="phone"><br>

        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address"><br>

        <label for="address">Extra Information:</label><br>
        <input type="text" id="extrainformation" name="extrainformation"><br>

        <button><input type="reset"></button>
       <button> <input type="submit" value="Submit" name="register-button"></button>
    </form>
</body>
</html>
