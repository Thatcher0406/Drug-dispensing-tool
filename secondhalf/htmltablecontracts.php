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
        
        <th>Contract ID</th>
        <th>Pharmaceutical Company</th>
        <th>Pharmacy</th>
        <th>Startdate</th>
        <th>End Date</th>
        <th>Supervisor</th>
        <th>Text</th>
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
        $selectQuery = "SELECT * FROM contracts";
        $result = mysqli_query($conn, $selectQuery);
  
        // Display the table
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {

                echo '<tr>';
                echo '<td>' . $row['contractID'] . '</td>';
                echo '<td>' . $row['pharmaceutical'] . '</td>';
                echo '<td>' . $row['pharmacy'] . '</td>';
                echo '<td>' . $row['startdate'] . '</td>';
                echo '<td>' . $row['enddate'] . '</td>';
                echo '<td>' . $row['supervisor'] . '</td>';
                echo '<td>' . $row['text'] . '</td>';
                

                ?>
               
              
                <td>  <a href="editcontract.php? SSN= <?php print $row["contractID"]; ?> " >Edit </a></td>
                <td>  <a href="deletecontract.php? SSN= <?php print $row["contractID"]; ?> " >Delete </a></td><br>
                
         <?php
            }
        } else {
            echo "0 results";
        }
  ?>



</table>

<button><a href="addcontract.php">Add Contract.
</a></button>

    </body>
    </html>
  
    <?php



// Check if the user ID is provided in the URL
if (isset($_GET['contractID'])) {
    $contractID = $_GET['contractID'];

    // Delete the user from the database
    $deleteQuery = "DELETE FROM users WHERE contractID = $contractID";
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
