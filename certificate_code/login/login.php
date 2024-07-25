<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('db_connection.php'); // Ensure this file sets up the $con connection
include('session.php'); // Include the session management file

session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = stripcslashes($username);
        $password = stripcslashes($password);
        $username = mysqli_real_escape_string($con, $username);
        $password = mysqli_real_escape_string($con, $password);

        $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($con, $sql);

        if ($result) {
            $count = mysqli_num_rows($result);
            if ($count == 1) {
                $_SESSION['loggedin'] = true; // Set session variable
                header("Location: registration_html.php"); // Redirect to registration page
                exit();
            } else {
                echo "<h1>Login failed. Invalid username or password.</h1>";
            }
        } else {
            echo "Error executing query: " . mysqli_error($con);
        }
    }
}
?>
