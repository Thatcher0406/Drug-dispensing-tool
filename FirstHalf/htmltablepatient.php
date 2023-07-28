<!DOCTYPE html>
<html>
<head>


<link rel="stylesheet" type="text/css" href="table.css"></link>

</head>
<body>
<table>
    <caption>
        Patient details.
    </caption>
    <tr> 
        
        <th>SSN</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email Address</th>
        <th>Password</th>
        <th>Date of birth</th>
        <th>Gender</th>
        <th>Illness</th>
        <th>Primary Physician</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>Any Extra Information</th>
        <th>Actions</th>
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
        $selectQuery = "SELECT * FROM patients";
        $result = mysqli_query($conn, $selectQuery);
  
        // Display the table
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
               <tr>
                <td><?php print $row['SSN'] ; ?></td>
                <td><?php print $row['firstname'] ; ?></td>
                <td><?php print $row['lastname'] ; ?></td>
                <td><?php print $row['emailaddress'] ; ?></td>
                <td><?php print $row['Password'] ; ?></td>
                <td><?php print $row['dateofbirth'] ; ?></td>
                <td><?php print $row['Gender'] ; ?></td>
                <td><?php print $row['Illness'] ; ?></td>
                <td><?php print $row['primary_physician'] ; ?></td>
                <td><?php print $row['phone'] ; ?></td>
                <td><?php print $row['address'] ; ?></td>
                <td><?php print $row['extrainfo'] ; ?></td>
                <td>  <a href="editpatient.php? SSN= <?php print $row["SSN"]; ?> " >Edit </a></td>
                <td>  <a href="deletepatient.php? SSN= <?php print $row["SSN"]; ?> " >Delete </a></td>
            </tr>

                <?php
            }
        } else {
            echo "0 results";
        }
  ?>

</table>

<a href="patientregistration.php">Add Patient</a>
    </body>
    </html>
