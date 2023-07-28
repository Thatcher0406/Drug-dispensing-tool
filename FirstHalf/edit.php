<?php
require_once "connection.php";

if(isset($_POST["update"])){
    $prescriptionID = $_POST["prescriptionID"];
    $patient = $_POST["patient"];
    $drug = $_POST["drug"];
    $frequency = $_POST["frequency"];
    $date = $_POST["date"];
    $doctor = $_POST["doctor"];
  
    $sql="UPDATE prescription SET prescriptionID='$prescriptionID', patient='$patient',drug='$drug',frequency='$frequency',date='$date',doctor='$doctor' ";
    if($conn->query($sql)===TRUE){
        header("Location:htmlprescription");
    
    }else{
        echo "Error updating" . $conn->error;
    }
}


?>