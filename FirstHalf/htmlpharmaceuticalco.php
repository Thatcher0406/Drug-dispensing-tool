<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"href="table.css">
</head>
<body>
<table>
    <caption>
            Pharmaceutical Company details.
    </caption>
    <tr> 
        
        
        <th>Pharmaceutical Company ID</th>
        <th>Name Of Company</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Email Address</th>
        <th>Password</th>
        <th>Contracts</th>
        <th>Drugs</th>
        
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
        $selectQuery = "SELECT * FROM pharmaceuticalcompany";
        $result = mysqli_query($conn, $selectQuery);
  
        // Display the table
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                ?>

                <td><?php print $row['pharmcoID'] ; ?></td>
                <td><?php print $row['name'] ; ?></td>
                <td><?php print $row['phone'] ; ?></td>
                <td><?php print $row['address'] ; ?></td>
                <td><?php print $row['emailaddress'] ; ?></td>
                <td><?php print $row['password'] ; ?></td>
                <td><?php print $row['contracts'] ; ?></td>
                <td><?php print $row['drugs'] ; ?></td>
                <td>  <a href="editpharmco.php? SSN= <?php print $row["pharmcoID"]; ?> " >Edit </a></td>
                <td>  <a href="deletepharmco.php? SSN= <?php print $row["pharmcoID"]; ?> " >Delete </a></td>
            </tr>
            <?php
        }
    } else {
        echo "0 results";
    }
  ?>



</table>

<button><a href="pharmaceuticalregistration.php">Add Pharmaceutical Company
</a></button>

    </body>
    </html>
  
    <?php



// Check if the user ID is provided in the URL
if (isset($_GET['pharmcoID'])) {
    $pharmcoID = $_GET['pharmcoID'];

    // Delete the user from the database
    $deleteQuery = "DELETE FROM users WHERE pharmcoID = $pharmcoID";
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
