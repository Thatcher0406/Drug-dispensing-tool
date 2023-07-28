<?php

require_once "connection.php";


    if(isset($_GET["prescriptionID"])){
        $prescriptionID  = $_GET["prescriptionID"];

       // header("location:htmlprescription.php");
    
    $sql="SELECT * FROM prescription where prescriptionID=$prescriptionID";
    $result = $conn->query($sql);
    if($result->num_rows > 0){

 $row=$result->fetch_assoc();
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
        
         <form action="edit.php" method="POST">
            <input type="hidden" value="<?php echo $prescriptionID;?>">
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
			<button><input type="submit" id="update" name="update" value = "Update"></button>
</body>
</html>


