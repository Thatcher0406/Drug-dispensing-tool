<!DOCTYPE html>
<html>
    <head>
        <title>Doctor View All Page</title>
        <meta charset="UTF=8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="viewbuttons.css">
    </head>
    <body>
    <?php
session_start();

// Check if user is logged in
if (!isset($_SESSION["username"])) {
  header("Location: doctorlogin.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>User Page</title>
</head>
<body>
    <style> body
    {
        background-color: white;

    }</style>
  <h2>Welcome, Dr. <?php echo $_SESSION["username"]; ?></h2>

</body>
</html> <br><br><br><br>
        <a class="button" href="http://localhost/WebApp/Patients/htmltablepatient.php">View All Patients</a>

        <a class="button" href="http://localhost/WebApp/Patients/htmlprescription.php">View All Prescriptions</a>

        <a class="button" href="http://localhost/WebApp/Patients/htmltablepatient.php">View All Patients</a>
        

    </body>
</html>