<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"href="table.css">
</head>
<body>
<table>
    <caption>
            Drugs.
    </caption>
    <tr> 
        
        <th>Drug ID</th>
        <th>Trade Name</th>
        <th>Formula</th>
        <th>Price</th>
        <th>Quantity in stock</th>
        <th>Dosage</th>
        <th>Pharmaceutical Company</th>
       
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
        $selectQuery = "SELECT * FROM drugs";
        $result = mysqli_query($conn, $selectQuery);
  
        // Display the table
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
               
?>
                <tr>

                <td><?php print $row['drugID']; ?></td>
                <td><?php print $row['tradename'] ; ?></td>
                <td><?php print $row['formula'] ?></td>
                <td><?php print $row['price']; ?></td>
                <td><?php print $row['quantityinstock'] ; ?></td>
                <td><?php print $row['dosage'] ; ?></td>
                <td><?php print $row['pharmaceuticalcompany'] ; ?></td>
               
                <td>  <a href="editdrugs.php? drugID= <?php print $row["drugID"]; ?> " >Edit </a></td>
                <td>  <a href="deletedrug.php? drugID= <?php print $row["drugID"]; ?> " >Delete </a></td>
            </tr>
            <?php
            }
        }else{
                echo"zero results";
            }
        
  ?>



</table>

<button><a href="drug-entry.html">Add Drugs.
</a></button>

    </body>
    </html>
  
    <?php



// Check if the user ID is provided in the URL
if (isset($_GET['drugID'])) {
    $drugID = $_GET['drugID'];

    // Delete the user from the database
    $deleteQuery = "DELETE FROM users WHERE drugID = $drugID";
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
