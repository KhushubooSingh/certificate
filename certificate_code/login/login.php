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

        // Use prepared statements for security
        $sql = "SELECT * FROM login WHERE username = ? AND password = ?";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result) {
            $count = mysqli_num_rows($result);
            if ($count == 1) {
                $_SESSION['loggedin'] = true; // Set session variable
                header("Location: index_registration.php"); // Redirect to registration page
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
