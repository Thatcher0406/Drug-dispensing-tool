<?php

require_once "connection.php";

    if(isset($_GET["drugID"])){

        $drugID = $_GET["drugID"];
        $sql = "DELETE FROM drugs WHERE drugID='$drugID'";

        if ($conn->query($sql) === TRUE) {
            header("Location: htmltabledrugs.php");
            exit();
        } else {
          echo "Error deleting record: " . $conn->error;
        }
        
        $conn->close();
    }




?>