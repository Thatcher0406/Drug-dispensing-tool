<?php
require_once "connection.php";

if(isset($_POST["update"])){
    $pharmcoID = $_POST["pharmcoID"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $emailaddress = $_POST["emailaddress"];
    $password = $_POST["password"];
    $contracts = $_POST["contracts"];
    $drugs = $_POST["drugs"];
    

   
  
    $sql="UPDATE patients SET name='$name,'phone='$phone',address='$address',emailaddress='$emailaddress',password='$password',contracts='$contracts',drugs='$drugs'";
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
        <title> Adding Pharmaceutical</title>
        <meta charset="UTF=8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="registrationfiles.css">
    </head>
    <body>
        
    <form action="" method="POST">
    <label for="pharmcoID">Pharmaceutical Company ID:</label><br>
        <input type="number" id="pharmcoID" name="pharmcoID"><br>

        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="phone">Phone Number:</label><br>
        <input type="number" id="phone" name="phone"><br>

        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address"><br>

        <label for="emailaddress">Email Address:</label><br>
        <input type="email" id="emailaddress" name="emailaddress" size="50"><br>

        <label for="password">Password:</label><br>
        <input type="text" id="password" name="password"><br>

        <label for="contracts">Contracts:</label><br>
        <input type="text" id="contracts" name="contracts"><br>

        <label for="drugs">Drugs:</label><br>
        <input type="text" id="drugs" name="drugs"><br>

        <button><input type="reset"></button>
			<button><input type="submit" id="update" name="update" value = "Update"></button>
</body>
</html>


