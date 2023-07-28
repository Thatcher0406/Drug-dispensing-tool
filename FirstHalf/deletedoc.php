


<?php
    require_once "connection.php";

    if(isset($_GET["docSSN"])){

        $docSSN = $_GET["docSSN"];
        $sql = "DELETE FROM doctors WHERE docSSN='$docSSN'";

        if ($conn->query($sql) === TRUE) {
            header("Location: htmltabledoctors.php");
            exit();
        } else {
          echo "Error deleting record: " . $conn->error;
        }
        
        $conn->close();
    }




?>