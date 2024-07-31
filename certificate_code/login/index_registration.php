<?php
include('session.php'); // Include the session management file
check_login(); // Ensure the user is logged in

// Check for messages in the URL
$message = '';
if (isset($_GET['status'])) {
    switch ($_GET['status']) {
        case 'success':
            $message = '<div class="alert alert-secondary">Registration successful!</div>';
            break;
        case 'error':
            $message = '<div class="alert alert-danger">Error: ' . htmlspecialchars($_GET['message']) . '</div>';
            break;
        case 'warning':
            $message = '<div class="alert alert-warning">Form submission not recognized.</div>';
            break;
        case 'invalid':
            $message = '<div class="alert alert-warning">Invalid request method.</div>';
            break;
    }
}

// Include database connection
include('db_connection.php'); // Include the database connection file

// Fetch existing records from the database
$sql = "SELECT * FROM certificate ORDER BY sr_no DESC";
$result = mysqli_query($con, $sql);
$certificates = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles.css" />
    <title>Registration Form</title>

</head>
<body>
    <div class="container-fluid">
        <h4 class="text-center pt-5 pb-2">Registration Form</h4>
        <?php if (!empty($message)) { ?>
            <div class="text-center mb-3">
                <?php echo $message; ?>
            </div>
        <?php } ?>
        <form class="mx-auto" action="registration.php" method="POST" onsubmit="return validateDates()">
            <!-- Certificate Title -->
            <div class="row justify-content-center pt-1">
                <div class="col-md-6 col-lg-4 mb-3">
                    <label for="certificatetitle" class="title"></label>
                    <input type="text" class="form-control input-field" placeholder="Certificate title"
                        id="certificatetitle" name="certificatetitle" required />
                </div>
            </div>
            <!-- Registration No -->
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-3">
                    <label for="registration_no"></label>
                    <input type="text" class="form-control input-field" placeholder="Registration no"
                        id="registration_no" name="registration_no" required />
                </div>
            </div>
            <!-- Name -->
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-3">
                    <label for="name"></label>
                    <input type="text" class="form-control input-field" placeholder="Name" id="name" name="name" required />
                </div>
            </div>
            <!-- Course -->
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-3">
                    <label for="course"></label>
                    <input type="text" class="form-control input-field" placeholder="Course" id="course"
                        name="course" required />
                </div>
            </div>
            <!-- Email -->
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-3">
                    <label for="email"></label>
                    <input type="email" class="form-control input-field" placeholder="Email id" id="email"
                        name="email" required />
                </div>
            </div>
            <!-- Course Duration From -->
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-3">
                    <label for="duration_from"></label>
                    <input type="date" class="form-control input-field" placeholder="Course duration from"
                        id="duration_from" name="duration_from" required />
                </div>
            </div>
            <!-- Course Duration To -->
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-3">
                    <label for="duration_to"></label>
                    <input type="date" class="form-control input-field" placeholder="Course duration to"
                        id="duration_to" name="duration_to" required />
                </div>
            </div>
            <!-- Contact -->
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-3">
                    <label for="contact"></label>
                    <input type="text" class="form-control input-field" placeholder="Contact" id="contact"
                        name="contact" required />
                </div>
            </div>
            <!-- College Name -->
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-3">
                    <label for="college_name"></label>
                    <input type="text" class="form-control input-field" placeholder="College name" id="college_name"
                        name="college_name" required />
                </div>
            </div>
            <!-- Submit Button -->
            <div class="row mx-auto text-center justify-content-center">
                <div class="col-md-6 col-lg-4 d-flex justify-content-center mb-3">
                    <button type="submit" class="btn-submit" name="register_submit">Submit</button>
                </div>
            </div>
            <!-- back button -->
            <div class="row mx-auto text-center justify-content-center">
                <div class="col-md-6 col-lg-4 d-flex justify-content-center mb-3">
                    <button type="reset" id="backButton" class="btn-submit" name="register_submit">Back</button>
                </div>
            </div>
        </form>
    </div>

    <!-- display existing record -->
    <h4 class="text-center pt-5 pb-3">Existing Records</h4>
        <div class="table-container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sr. No.</th>
                        <th>Certificate Title</th>
                        <th>Registration No.</th>
                        <th>Name</th>
                        <th>Course</th>
                        <th>Email</th>
                        <th>Course Duration From</th>
                        <th>Course Duration To</th>
                        <th>Contact</th>
                        <th>College Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($certificates as $cert): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($cert['sr_no']); ?></td>
                        <td><?php echo htmlspecialchars($cert['certificate_title']); ?></td>
                        <td><?php echo htmlspecialchars($cert['registration_no']); ?></td>
                        <td><?php echo htmlspecialchars($cert['name']); ?></td>
                        <td><?php echo htmlspecialchars($cert['course']); ?></td>
                        <td><?php echo htmlspecialchars($cert['email']); ?></td>
                        <td><?php echo htmlspecialchars($cert['course_duration_from']); ?></td>
                        <td><?php echo htmlspecialchars($cert['course_duration_to']); ?></td>
                        <td><?php echo htmlspecialchars($cert['contact_no']); ?></td>
                        <td><?php echo htmlspecialchars($cert['college_name']); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    <!--  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="index.js"></script>
</body>
</html>