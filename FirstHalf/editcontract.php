<?php
require_once "connection.php";

if(isset($_POST["update"])){
   
    $contractID = $_POST["contractID"];
    $pharmaceutical = $_POST["pharmaceutical"];
    $pharmacy = $_POST["pharmacy"];
    $startdate = $_POST["startdate"];
    $enddate = $_POST["enddate"];
    $supervisor = $_POST["supervisor"];
    $text =  $_POST["text"];
    
  
    $sql="UPDATE patients SET contractID='$contractID,'pharmaceutical='$pharmaceutical',pharmacy='$pharmacy',startdate='$startdate',enddate='$enddate',supervisor='$supervisor',text='$text'";
    if($conn->query($sql)===TRUE){
        header("Location:htmlpharmaceuticalco.php");
    
    }else{
        echo "Error updating" . $conn->error;
    }
}


?>
<!DOCTYPE html>
<html>
    <head>
        <title> Contract Registration</title>
        <meta charset="UTF=8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        
         <form action="" method="POST">
            <label for="contractID">Contract ID</label><br>
			<input type="number"id="contractID"name="contractID"start="10000"><br>

            <label for="pharmaceutical">Pharmaceutical Company:</label><br>
			<input type="text"id="pharmaceutical"name="pharmaceutical"><br>

			<label for="pharmacy">Pharmacy:</label><br>
			<input type="text"id="pharmacy"name="pharmacy" ><br>

			<label for="startdate">Start Date:</label><br>
			<input type="date"id="startdate"name="startdate"><br>

            <label for="enddate">End Date:</label><br>
			<input type="date"id="enddate"name="enddate"><br>

			<label for="supervisor">Supervisor:</label><br>
			<input type="text"id="supervisor"name="supervisor"><br>

			<label for="text">Text:</label><br>
			<input type="text"id="text"name="text" size="200"><br>
			
			<input type="reset">
			<input type="submit" id="update" name="update" value = "Submit">
</body>
</html>




