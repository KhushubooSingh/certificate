<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Student Details</title>
    <style>
        .centered-box {
            max-width: 800px;
            margin: 20px auto;
        }
        .card-header {
            background-color: #007bff;
            color: white;
            text-align: center;
        }
        .card-body {
            background-color: #f8f9fa;
        }
        .details-row {
            border-bottom: 1px solid #dee2e6;
            padding: 10px 0;
        }
        .details-row:last-child {
            border-bottom: none;
        }
        .back-button {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // $servername = "sg2nlmysql33plsk.secureserver.net:3306";
        // $username = "vlcertiverify";
        // $password = "5Ii5pw3$1";
        // $dbname = "ph15958919426_vlabiitkcerti";

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "vlab_iitk_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];

            // Update SQL query to use LIKE for partial matches
            $sql = "SELECT * FROM certificate WHERE name LIKE ?";
            $stmt = $conn->prepare($sql);

            // Use '%' wildcard for LIKE query to match names starting with the given string
            $param = $name . "%";
            $stmt->bind_param("s", $param);

            $stmt->execute();
            $result = $stmt->get_result();

            echo "<div class='centered-box'>";
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='card mb-4'>";
                    echo "<div class='card-header'><h4 class='mb-0'>Student Details</h4></div>";
                    echo "<div class='card-body'>";
                    echo "<div class='details-row'><strong>Certificate Title:</strong> " . htmlspecialchars($row["certificate_title"]) . "</div>";
                    echo "<div class='details-row'><strong>Registration Number:</strong> " . htmlspecialchars($row["registration_no"]) . "</div>";
                    echo "<div class='details-row'><strong>Name:</strong> " . htmlspecialchars($row["name"]) . "</div>";
                    echo "<div class='details-row'><strong>Course:</strong> " . htmlspecialchars($row["course"]) . "</div>";
                    echo "<div class='details-row'><strong>Email:</strong> " . htmlspecialchars($row["email"]) . "</div>";
                    echo "<div class='details-row'><strong>Contact No.:</strong> " . htmlspecialchars($row["contact_no"]) . "</div>";
                    echo "<div class='details-row'><strong>Course Started From:</strong> " . htmlspecialchars($row["course_duration_from"]) . "</div>";
                    echo "<div class='details-row'><strong>Course Ended to:</strong> " . htmlspecialchars($row["course_duration_to"]) . "</div>";
                    echo "<div class='details-row'><strong>College Name:</strong> " . htmlspecialchars($row["college_name"]) . "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<div class='alert alert-warning text-center'>No results found for the name: " . htmlspecialchars($name) . "</div>";
            }
            echo "<div class='back-button' id='backButton'><button class='btn btn-secondary' onclick='history.back()'>Back</button></div>";
            echo "</div>";

            $stmt->close();
        }

        $conn->close();
        ?>
    </div>

    <script src="script.js"></script>
</body>
</html>
