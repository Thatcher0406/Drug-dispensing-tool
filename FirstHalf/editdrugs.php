<?php
require_once "connection.php";

if(isset($_POST["update"])){
	$drugID = $_POST["drugID"];
    $tradename = $_POST["tradename"];
    $formula = $_POST["formula"];
    $price = $_POST["price"];
    $quantityinstock = $_POST["quantityinstock"];
    $dosage = $_POST["dosage"];
    $pharmaceuticalcompany = $_POST["pharmaceuticalcompany"];
   
    $sql="UPDATE drugs SET drugID='$drugID', tradename='$tradename',formula='$formula',price='$price',quantityinstock='$quantityinstock',dosage='$dosage',pharmaceuticalcompany='$pharmaceuticalcompany' WHERE drugID='$drugID' LIMIT 1";
    if($conn->query($sql)===TRUE){
        header("Location:htmltabledrugs.php");
    
    }else{
        echo "Error updating" . $conn->error;
    }
}


?>
<!DOCTYPE html>
<html>
	<head>
		<title>Drug Information Page</title>
		<meta charset="UTF=8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"href="registrationfiles.css">
	</head>
	<body>
		<form action=""method="POST">
		<label for="drugID">Drug ID:</label><br>
                <input type="number"id="drugID"name="drugID"><br>

                <label for="tradename">Drug Name:</label><br>
                <input type="text"id="tradename"name="tradename"><br>

                <label for="formula">Formula:</label><br>
                <input type="text"id="formula"name="formula"><br>

                <label for="price">Price:</label><br>
                <input type="number"id="price"name="price"><br>

                <label for="quantityinstock">Quantity In Stock:</label><br>
                <input type="text" id="quantityinstock" name = "quantityinstock" ><br>

                <label for="dosage">Dosage</label><br>
                <input type="text"id="dosage"name="dosage"><br>

                <label for="pharmaceuticalcompany">Pharmaceutical company:</label><br>
                <input type="text"id="pharmaceuticalcompany"name="pharmaceuticalcompany"><br>

<br><br><br>
			<button><input type="reset"></button><br><br>
            <button><input type="submit" value="Submit" id="update" name="update"></button>
        </form>
	</body>
</html>

