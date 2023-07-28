<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"href="table.css">
</head>
<body>
<table>
    <caption>
        Doctor details.
    </caption>
    <tr> 
        
        <th>docSSN</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email Address</th>
        <th>Password</th>
        <th>Phone Number</th>
        <th>Years of experience</th>
        <th>Gender</th>
        <th>Specialty</th>
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
        $selectQuery = "SELECT * FROM doctors";
        $result = mysqli_query($conn, $selectQuery);
  
        // Display the table
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>

                <td><?php print $row['docSSN']; ?></td>
                <td><?php print $row['firstname'] ; ?></td>
                <td><?php print $row['lastname'] ?></td>
                <td><?php print $row['emailaddress']; ?></td>
                <td><?php print $row['password'] ; ?></td>
                <td><?php print $row['phone'] ; ?></td>
                <td><?php print $row['yearsofexperience'] ; ?></td>
                <td><?php print $row['gender'] ; ?></td>
                <td><?php print $row['specialty'] ; ?></td>
                <td><?php print $row['extrainfo'] ; ?></td>
                <td>  <a href="editdoctor.php? docSSN= <?php print $row["docSSN"]; ?> " >Edit </a></td>
                <td>  <a href="deletedoc.php? docSSN= <?php print $row["docSSN"]; ?> " >Delete </a></td>
            </tr>
            <?php
            } 
        } else {
                echo "0 results";
                }

        
  ?>



</table>

<button><a href="doctorregistration.php">Add Doctor
</a></button>

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
