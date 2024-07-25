<?php
include('db_connection.php'); // Ensure this file sets up the $con connection
include('session.php'); // Include the session management file

check_login(); // Ensure the user is logged in

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['register_submit'])) {
        // Handle registration form submission
        $sr_no = mysqli_real_escape_string($con, $_POST['srno']);
        $certificate_title = mysqli_real_escape_string($con, $_POST['certificatetitle']);
        $registration_no = mysqli_real_escape_string($con, $_POST['registration_no']);
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $course = mysqli_real_escape_string($con, $_POST['course']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $course_duration_from = mysqli_real_escape_string($con, $_POST['duration_from']);
        $course_duration_to = mysqli_real_escape_string($con, $_POST['duration_to']);
        $contact_no = mysqli_real_escape_string($con, $_POST['contact']);
        $college_name = mysqli_real_escape_string($con, $_POST['college_name']);

        $sql = "INSERT INTO certificate (sr_no, certificate_title, registration_no, name, course, email, contact_no, course_duration_from, course_duration_to, college_name) 
                VALUES ('$sr_no', '$certificate_title', '$registration_no', '$name', '$course', '$email', '$contact_no', '$course_duration_from', '$course_duration_to', '$college_name')";

        if (mysqli_query($con, $sql)) {
            $message = '<div class="alert alert-success">Registration successful!</div>';
        } else {
            $message = '<div class="alert alert-danger">Error: ' . $sql . '<br>' . mysqli_error($con) . '</div>';
        }
    } else {
        $message = '<div class="alert alert-warning">Form submission not recognized.</div>';
    }
} else {
    $message = '<div class="alert alert-warning">Invalid request method.</div>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Status</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="message-container">
        <?php echo $message; ?>
    </div>
</body>
</html>
