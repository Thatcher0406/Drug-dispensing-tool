<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "drugdispensing";
 
// Database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if($conn == true){

}else {
        die("Failed to connect");
}

?>