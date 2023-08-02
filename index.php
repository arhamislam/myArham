<!--
    Author: Arham Islam
    File Description: Login page for patients, doctors, and admins.
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
        <div class="pageContainer">
            <!-- Logo & Text -->
            <div class="logoContainer">
                <img src="logos/logoBig.png" alt="myArham" class="logo">
                <p class="logoText text">
                    Your health, all in one single click. Sign in to access your <br>
                    portal to see your appointments, test results, lab reports, <br>
                    and others related to your health.
                </p>
            </div>

            <!-- Sign In -->
            <div class="loginContainer">
                <div class="rounded-5 loginBox text-center">
                    <img src="./logos/logo.png" alt="myArham" class="mb-2">

                    <div class="mt-4 mb-4 logoForms">
                        <label for="email" class="form-label fw-bold">Email address</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-4 logoForms">
                        <label for="password" class="form-label fw-bold">Password</label>
                        <input type="password" class="form-control" id="password">
                        <a href="#" class="forgotPassword"><small id="forgotPassword">Forgot password?</small></a>
                    </div>

                    <a class="btn btn-primary mb-4 w-100 fw-bold" href="#" role="button">Sign In</a>
                    <p>Don't have an account? <a href="#" class="fw-bold createAccount">Sign up</a></p>
                </div>
            </div>
        </div>

        <!-- jQuery & Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>

