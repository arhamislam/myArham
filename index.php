<!--
    Author: Arham Islam
    File Description: Login page for patients.
    Date Created: July 26, 2023
-->

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        <link rel="stylesheet" href="styles.css">
        <link rel="icon" href="logos/favicon.ico">
        <title>myArham</title>
    </head>
    <body>
        <div class="d-flex">
            <!-- Logo & Text -->
            <div class="logoContainer">
                <img src="logos/logoBig.png" alt="myArham" class="logoHome">
                <p class="logoText text">
                    Your health, all in one single click. Sign in to access your <br>
                    portal to see your appointments, test results, lab reports, <br>
                    and others related to your health.
                </p>
            </div>

            <!-- Login -->
            <div class="userContainer">
                <div class="rounded-5 text-center box">
                    <img src="./logos/logo.png" alt="myArham" class="mb-2">
                    <h4 class="fw-bold">Sign In</h4>

                    <div class="mt-3 mb-3 text-start">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3 text-start">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password">
                        <a href="#" class="forgotPassword"><small id="forgotPassword">Forgot password?</small></a>
                    </div>

                    <a class="btn btn-danger mb-3 w-100 fw-bold" href="#" role="button">Sign In</a>
                    <p>Don't have an account? <a href="/myArham/registration.php" class="fw-bold logRegLink">Sign up</a></p>
                </div>
            </div>
        </div>

        <!-- jQuery & Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>

