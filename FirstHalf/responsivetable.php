<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"href="table.css">
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
                echo '<tr>';
                echo '<td>' . $row['SSN'] . '</td>';
                echo '<td>' . $row['firstname'] . '</td>';
                echo '<td>' . $row['lastname'] . '</td>';
                echo '<td>' . $row['emailaddress'] . '</td>';
                echo '<td>' . $row['Password'] . '</td>';
                echo '<td>' . $row['dateofbirth'] . '</td>';
                echo '<td>' . $row['Gender'] . '</td>';
                echo '<td>' . $row['Illness'] . '</td>';
                echo '<td>' . $row['primary_physician'] . '</td>';
                echo '<td>' . $row['phone'] . '</td>';
                echo '<td>' . $row['address'] . '</td>';
                echo '<td>' . $row['extrainfo'] . '</td>';
                echo '<td><a href="?delete=' . $row['SSN'] . '" > Delete </a></td>';
            }
        }
  ?>
<a href="patientregistration.php">Add Patient</a>
</table>
    </body>
    </html>

    <?php



// Check if the user ID is provided in the URL
if (isset($_GET['SSN'])) {
    $SSN = $_GET['SSN'];

    // Delete the user from the database
    $deleteQuery = "DELETE FROM users WHERE SSN = $SSN";
    $result = mysqli_query($conn, $deleteQuery);

    // Check if the deletion was successful
    if ($result) {
        echo "User deleted successfully.";
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
