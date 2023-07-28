<!DOCTYPE html>
<html>
  <?php
session_start();

// Check if user is logged in
if (!isset($_SESSION["username"])) {
  header("Location: patientlogin.html");
  exit();
}
?>
<!DOCTYPE html>

<head>
  <title>User Page</title>
  <link rel="stylesheet" href="styling.css">
</head>
<body>
<h2>Heyy, <?php echo $_SESSION["username"]; ?></h2>
<p class="login"> <a href = "http://localhost/WebApp/Patients/overalllogin.html">Log In To Your Account. </a></p>
  <div class="container">
    <h1>Welcome to MyDrugs</h1>
 
    <h2 class="welcome-message"></h2>
    <p class="app-description">Thank you for logging in to MyMeds Drug Dispenser. We are committed to bringing healthcare closer to the masses.</p>
  <p>
   
   <a class="text" >Here are some user testimonials!<br></a>
   <a class="text1">I am a pharmacist. This is the very best app to use for all your record-keeping for contracts and other stuff.<br>~Pharmacist, Medikol Pharmacies<br></a><br><br><br><br><br>
    <p> <button> <a class="button" href="logout.html">Logout</a><br></p></button>
      <p> Contact info:<br>Call:0700000000<br>Email: webapp@gmail.com</p>
    </div>
  </div>
 
  
  </div>
</body>
</html>
<!--p.button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #4CAF50;
  color: #4CAF50; 
  text-decoration: none;
  font-size: 18px;
  border-radius: 4px;
  margin-right: 10px;
}
<button> <a class="btn" href="pharmacy.html">Are you a pharmacist?</a><br></button>
    <br><br>
    <p>
   <button> <a class="btn" href="administrator.php">Are you a new admin?</a><br></button>
    <br><br>
   <button> <a class="btn" href="doctorview.html">Are you a doctor?</a><br></button>
    <br><br>
  <button><a class="btn1" href="patientregistration.php">Register as a new patient here.</a><br></button>
    <br><br>
  <button> <a class="btn" href="companyinfo.html">Company Information</a><br></button>
   </p>
   <img class="spec" src="D:\xamppnew\htdocs\WebApp\Patients\medical.jpg" background="cover">