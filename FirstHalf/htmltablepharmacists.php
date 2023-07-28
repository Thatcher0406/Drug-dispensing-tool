<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"href="table.css">
</head>
<body>
<table>
    <caption>
            Pharmacies details.
    </caption>
    <tr> 
        
        <th>Pharmacy ID</th>
        <th>Name</th>
        <th>Email Address</th>
        <th>Password</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>Contracts</th>
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
        $selectQuery = "SELECT * FROM pharmacy";
        $result = mysqli_query($conn, $selectQuery);
  
        // Display the table
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['pharmID'] . '</td>';
                echo '<td>' . $row['name'] . '</td>';
                echo '<td>' . $row['emailaddress'] . '</td>';
                echo '<td>' . $row['password'] . '</td>';
                echo '<td>' . $row['address'] . '</td>';
                echo '<td>' . $row['phone'] . '</td>';
                echo '<td>' . $row['contracts'] . '</td>';
                echo '<td><a href="?delete=' . $row['SSN'] . '" > Delete </a></td>';
            }
        }
  ?>



</table>

<button><a href="pharmacyregistration.php">Add Pharmacy.
</a></button>

    </body>
    </html>
  
    <?php



// Check if the user ID is provided in the URL
if (isset($_GET['pharmID'])) {
    $pharmID = $_GET['pharmID'];

    // Delete the user from the database
    $deleteQuery = "DELETE FROM users WHERE pharmID = $pharmID";
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
