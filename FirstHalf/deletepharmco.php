


<?php
    require_once "connection.php";

    if(isset($_GET["pharmcoID"])){

        $pharmcoID = $_GET["pharmcoID"];
        $sql = "DELETE FROM pharmaceuticalcompany WHERE pharmcoID='$pharmcoID'";

        if ($conn->query($sql) === TRUE) {
            header("Location: htmlpharmaceuticalco.php");
            exit();
        } else {
          echo "Error deleting record: " . $conn->error;
        }
        
        $conn->close();
    }




?>