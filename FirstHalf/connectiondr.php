<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "drugdispensing";
 
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
}        

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


?>