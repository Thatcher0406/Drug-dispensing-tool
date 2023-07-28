<?php

    require_once "connection.php";

    if(isset($_GET["contractID"])){

        $contractID = $_GET["contractID"];
        $sql = "DELETE FROM contracts WHERE contractID='$contractID'";

        if ($conn->query($sql) === TRUE) {
            header("Location: htmltablecontracts.php");
            exit();
        } else {
          echo "Error deleting record: " . $conn->error;
        }
        
        $conn->close();
    }




?>