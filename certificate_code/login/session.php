<?php
session_start(); // Start the session

// Function to check if the user is logged in
function check_login() {
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        header('Location: index_login.php'); // Redirect to login page if not logged in
        exit;
    }
}

// Function to log out and destroy the session
function logout() {
    $_SESSION = array(); // Clear all session variables
    session_destroy(); // Destroy the session
    header('Location: index_login.php'); // Redirect to login page
    exit;
}
?>