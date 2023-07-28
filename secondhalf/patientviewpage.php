
      <!DOCTYPE html>
       <html>
           <head>
               <title>Admin View All Page</title>
               <meta charset="UTF=8">
               <meta name="viewport" content="width=device-width, initial-scale=1">
               <link rel="stylesheet" href="viewbuttons.css">
           </head>
           <body>
            <?php
session_start();

// Check if user is logged in
if (!isset($_SESSION["username"])) {
  header("Location: patientlogin.php");
  exit();
}
?>

<!DOCTYPE html>
<html>

<body>
  <h2>Welcome, <?php echo $_SESSION["username"]; ?></h2><br><br><br>
  </body>
</html>
             <!--
               <a class="button" href="htmltablepatient.php">View All Patients</a>
       
               <a class="button" href="htmltabledoctors.php">View All Doctors</a><br><br>
       
               <a class="button" href="htmltabledrugs.php">View All Drugs</a>
       
               <a class="button" href="htmlpharmaceuticalco.php">View All Pharmaceutical Companies</a><br><br>
       
               <a class="button" href="htmlprescription.php">View All Prescriptions</a>
       
               <a class="button" href="htmltablepharmacists.php">View All Pharmacists</a><br><br>
       
               <a class="button" href="htmltablecontracts.php">View All Contracts</a>-->
               <a class="button" href="htmltabledoctors.php">Choose a Doctor:</a><br><br><br><br><br><br><br><br>
               <a class="button" href="specifiedprescription.php">View my Prescriptions</a>
               <a href></a>
       
           </body>
       </html>

    </body>
</html>