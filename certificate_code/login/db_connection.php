<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vlab_iitk_db";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
