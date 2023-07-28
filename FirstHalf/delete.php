

<?php
    require_once "connection.php";

    if(isset($_GET["prescriptionID"])){

        $prescriptionID = $_GET["prescriptionID"];
        $sql = "DELETE FROM prescription WHERE prescriptionID='$prescriptionID'";

        if ($conn->query($sql) === TRUE) {
            header("Location: htmlprescription.php");
            exit();
        } else {
          echo "Error deleting record: " . $conn->error;
        }
        
        $conn->close();
    }


// sql to delete a record
/*
if(isset($_GET["id"])){
    $prescriptionID=$_GET["prescriptionID"];

require_once "connection.php";

$sql= "DELETE FROM prescription where prescriptionID= $prescriptionID";

}
header("location:htmlprescription.php");
exit;*/


?>