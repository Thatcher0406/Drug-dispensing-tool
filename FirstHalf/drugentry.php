<?php

 require_once ("connection.php");

    $drugID = $_POST["drugID"];
    $tradename = $_POST["tradename"];
    $formula = $_POST["formula"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];
    $dosage = $_POST["dosage"];
    $pharmaceutical = $_POST['pharmaceutical'];

    $sql = "INSERT INTO drugs(drugID,tradename,formula,price,quantityinstock,dosage,pharmaceuticalcompany) 
    VALUES ('$drugID','$tradename','$formula','$price','$quantity','$dosage','$pharmaceutical')";

    // Check if the query execution is successful
    if ($conn->query($sql) === TRUE) {
        echo "Registered successfully";
    } else {
        echo "Error: " .$sql."<br>". $conn->error;
    }

    $conn->close();
?>

