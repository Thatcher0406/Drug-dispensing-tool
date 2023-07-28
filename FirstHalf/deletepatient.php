


<?php
    require_once "connection.php";

    if(isset($_GET["SSN"])){

        $SSN = $_GET["SSN"];
        $sql = "DELETE FROM patients WHERE SSN='$SSN'";

        if ($conn->query($sql) === TRUE) {
            header("Location: htmltablepatient.php");
            exit();
        } else {
          echo "Error deleting record: " . $conn->error;
        }
        
        $conn->close();
    }




?>