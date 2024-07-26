<?php
// Database connection details
// $servername = "sg2nlmysql33plsk.secureserver.net:3306";
// $username = "vlcertiverify";
// $password = "5Ii5pw3$1";
// $dbname = "ph15958919426_vlabiitkcerti";

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
