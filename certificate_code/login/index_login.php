<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="login_style.css" />
    <title>Log In</title>
</head>

<body>
    <div class="container-fluid">
        <form action="login.php" method="POST" class="mx-auto" style="max-width: 400px;">
            <h4 class="text-center">Login</h4>
            <div class="mb-3 mt-5">
                <label for="username" class="form-label">User Name</label>
                <input type="text" class="form-control input" id="username" placeholder="user name" name="username" />
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control input" id="password" placeholder="Password" name="password" />
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn">Log in</button>
            </div>
        </form>
    </div>

    <script src="index.js"></script>
</body>

</html>
