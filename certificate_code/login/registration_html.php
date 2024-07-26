<?php
include('session.php'); // Include the session management file
check_login(); // Ensure the user is logged in
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles.css" />
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <h4 class="text-center pt-5 pb-5">Registration Form</h4>
        <form class="mx-auto" action="registration.php" method="POST">
            <div class="row pt-5 justify-content-center">
                <!-- <div class="col-md-6 col-lg-4 mb-2 me-lg-3">
                    <label for="srno">Sr. No. :</label>
                    <input type="text" class="form-control input-field" placeholder="sr. no." id="srno" name="srno" />
                </div> -->
                <div class="col-md-6 col-lg-4 mb-3 me-lg-3 text-center">
                    <label for="certificatetitle">Certificate Title :</label>
                    <input type="text" class="form-control input-field" placeholder="certificate title"
                        id="certificatetitle" name="certificatetitle" required />
                </div>
            </div>
            <!-- ----------------------------------------- -->
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 me-lg-3">
                    <label for="registration_no">Registration No. :</label>
                    <input type="text" class="form-control input-field" placeholder="registration no"
                        id="registration_no" name="registration_no" required/>
                </div>
                <div class="col-md-6 col-lg-4 mb-3 me-lg-3">
                    <label for="name">Name :</label>
                    <input type="text" class="form-control input-field" placeholder="name" id="name" name="name" required />
                </div>
            </div>

            <!-- --------------------------------------- -->

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-3 me-lg-3">
                    <label for="course">Course :</label>
                    <input type="text" class="form-control input-field" placeholder="course" id="course"
                        name="course" required />
                </div>
                <div class="col-md-6 col-lg-4 mb-2 me-lg-3">
                    <label for="email">Email Id :</label>
                    <input type="email" class="form-control input-field" placeholder="email id" id="email"
                        name="email" required/>
                </div>

            </div>

            <!-- ---------------------------------------- -->

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-3 me-lg-3">
                    <label for="duration_from">Course Duration From :</label>
                    <input type="date" class="form-control input-field" placeholder="course duration from"
                        id="duration_from" name="duration_from" required/>
                </div>
                <div class="col-md-6 col-lg-4 mb-3 me-lg-3">
                    <label for="duration_to">Course Duration To :</label>
                    <input type="date" class="form-control input-field" placeholder="course duration to"
                        id="duration_to" name="duration_to" required/>
                </div>
            </div>

            <!-- ----------------------------------------- -->

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 me-lg-3">
                    <label for="contact">Contact :</label>
                    <input type="text" class="form-control input-field" placeholder="contact" id="contact"
                        name="contact" required/>
                </div>
                <div class="col-md-6 col-lg-4 mb-3 me-lg-3">
                    <label for="college_name">College Name :</label>
                    <input type="text" class="form-control input-field" placeholder="college name" id="college_name"
                        name="college_name" required/>
                </div>
            </div>
            <!-- submit button -->
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 d-flex justify-content-center mb-5">
                    <button type="submit" class="btn-submit" name="register_submit">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>