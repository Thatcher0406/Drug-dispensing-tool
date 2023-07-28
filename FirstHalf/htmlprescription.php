<!DOCTYPE html>
<html>
<head>
<link rel= "stylesheet" href= "table.css" >
</head>
<body>
<table>
    <caption>
            Prescriptions.
    </caption>
    <tr> 
        
        <th>Prescription ID</th>
        <th>Patient</th>
        <th>Drug</th>
        <th>Frequency</th>
        <th>Date</th>
        <th>Doctor</th>
        <th>Actions</th>
        
       
    </tr>
    <tbody>

        <?php
        // Database connection details
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "drugdispensing";
  
        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);
  
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $selectQuery = "SELECT * FROM prescription";
                        $result = $conn->query($selectQuery);

                        if ($result->num_rows > 0) {
                        // output data of each row

                        while($row = $result->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?php print $row['prescriptionID']; ?></td>
                                <td><?php print $row['patient'] ; ?></td>
                                <td><?php print $row['drug'] ?></td>
                                <td><?php print $row['frequency']; ?></td>
                                <td><?php print $row['date'] ; ?></td>
                                <td><?php print $row['doctor'] ; ?></td>
                                <td>  <a href="editprescription.php? prescriptionID= <?php print $row["prescriptionID"]; ?> " >Edit </a></td>';
                                <td>  <a href="delete.php? prescriptionID= <?php print $row["prescriptionID"]; ?> " >Delete </a></td>';
                                <td>  <a href="specifiedprescription.php? prescriptionID= <?php print $row["prescriptionID"]; ?> " >View prescription</a></td>';
                            </tr>
                        <?php
                        }
                        } else {
                        echo "0 results";
                        }

                        ?>
</table>

<button><a href="prescriptions.php">Add Prescription.
</a></button>

</a></button>

    </body>
    </html>
  
    <?php



