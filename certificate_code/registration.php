<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('authentication.php'); // Ensure this file sets up the $con connection

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


        $sql = "INSERT INTO certificate (sr_no., certificate_title,registration_no, name, course, email, contact_no, course_duration_from, 
        course_duration_to,college_name) 
                VALUES ('$sr_no', '$certificate_title', '$registration_no', '$name', '$course', '$email', 
                        '$course_duration_from', '$course_duration_to', '$contact_no', '$college_name');";

        if (mysqli_query($con, $sql)) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    } else {
        echo "<h1>Form submission not recognized.</h1>";
    }
// } else {
//     echo "<h1>Invalid request method.</h1>";
// }



// $sql = "SELECT pf_no FROM registration_tbl";
// $result = $con->query($sql);
// ?>