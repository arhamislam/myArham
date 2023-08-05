<!--
    Author: Arham Islam
    File Description: Registration page for patients.
    Date Created: August 3, 2023
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
        <title>Registration</title>
    </head>
    <body>
        <div class="d-flex">
            <!-- Logo & Text -->
            <div class="logoContainer">
                <img src="logos/logoBig.png" alt="myArham" class="logoHome">
                <p class="logoText text">
                    Your health, all in one single click. Create an account to 
                    access your portal to see your appointments, test results, <br>
                    lab reports, and others related to your health.
                </p>
            </div>
            
            <!-- Registration -->
            <div class="userContainer">
                <div class="rounded-5 text-center box">
                    <img src="./logos/logo.png" alt="myArham" class="mb-2">
                    <h4 class="fw-bold">Sign Up</h4>

                    <!-- <div class="mt-3 mb-3">
                        <label class="form-label fw-bold">Enter the 6-digit your doctor provided you to create an account.</label>
                        <div class="d-inline-flex w-50">
                            <input type="text" class="form-control m-2" id="1">
                            <input type="text" class="form-control m-2" id="2">
                            <input type="text" class="form-control m-2" id="3">
                            <input type="text" class="form-control m-2" id="4">
                            <input type="text" class="form-control m-2" id="5">
                            <input type="text" class="form-control m-2" id="6">
                        </div>
                    </div> -->

                    <!-- <div class="mt-3 mb-3 text-start">
                        <label for="email" class="form-label fw-bold">Email address</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3 text-start">
                        <label for="password" class="form-label fw-bold">Password</label>
                        <input type="password" class="form-control" id="password">
                        <a href="#" class="forgotPassword"><small id="forgotPassword">Forgot password?</small></a>
                    </div> -->

                    <div class="row mt-3 mb-3">
                        <div class="col">
                            <label for="hcn" class="form-label">Health Card Number</label>
                            <input type="text" class="form-control" id="hcn">
                        </div>
                    </div>

                    <a class="btn btn-danger mb-3 w-100 fw-bold" href="#" role="button">Next</a>
                    <p>Already have an account? <a href="/myArham/" class="fw-bold logRegLink">Sign in</a></p>
                </div>
            </div>
        </div>

        <!-- jQuery & Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>

