<?php
 require_once "connection.php";

if (isset($_POST["register-button"])) {
    $prescriptionID = $_POST["prescriptionID"];
    $patient = $_POST["patient"];
    $drug = $_POST["drug"];
    $frequency = $_POST["frequency"];
    $date = $_POST["date"];
    $doctor = $_POST["doctor"];
  
    
    // Check if the connection is successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $register_query = "INSERT INTO prescription (prescriptionID,patient,drug,frequency,date,doctor) 
    VALUES ('$prescriptionID','$patient','$drug','$frequency','$date','$doctor')";

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
        <title> Adding Prescriptions</title>
        <meta charset="UTF=8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="registrationfiles.css">
    </head>
    <body>
        
         <form action="" method="POST">
            <label for="prescriptionID">Prescription ID</label><br>
			<input type="number"id="prescriptionID"name="prescriptionID"><br>

            <label for="patient">Patient:</label><br>
			<input type="text"id="patient"name="patient"><br>

			<label for="drug">Drug:</label><br>
			<input type="text"id="drug"name="drug" ><br>

			<label for="frequency">Frequency:</label><br>
			<input type="text"id="frequency"name="frequency"><br>

            <label for="date">Date:</label><br>
			<input type="date"id="date"name="date"><br>

			<label for="doctor">Doctor:</label><br>
			<input type="text"id="doctor"name="doctor"><br>

			
			<button><input type="reset"></button><br><br>
			<button><input type="submit" id="register-button" name="register-button" value = "Submit"></button>
</body>
</html>


