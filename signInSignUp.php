<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | Sign Up</title>

    <!--CSS File-->
    <link rel="stylesheet" href="css/style.css">
    <!--CSS File-->
    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--Bootstrap CDN-->

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Fontawesome CDN-->

</head>

<body>
    <div class="bg d-flex justify-content-center align-items-center">

        <div class="boxcover d-none" id="signIn">
            <h1 class="fw-bold">Sign In</h1>

            <div class="d-flex flex-column col-10">
                <div class="email mb-4 col-12">
                    <input type="text" class="form-control" style="height: 45px;"
                        placeholder="Enter Your Email" />
                </div>

                <div class="col-12 mt-1">
                    <input class="form-control" style="height: 45px;" type="password"
                        placeholder="Enter Your Password">
                </div>

                <div class="col-12 d-flex mt-1 mb-3">
                    <div class="col-6 d-flex justify-content-start ps-2">
                        <input type="checkbox" style="cursor: pointer;" class="me-1" name="" id="">
                        <label for="checkbox" class="fw-bold">Remember Me</label>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <a href="#" class="me-1 fw-bold">Fogot Password</a>
                    </div>
                </div>
                <div class="buttons d-flex flex-column justify-content-center mt-4">
                    <button class="mb-3 fw-bold fs-5 col-8 offset-2 signinbtn">Sign In</button>
                    <label class="mb-1" style="text-align: center;">Don't Have an Account...?</label>
                    <button class="fw-bold fs-5 col-8 offset-2 signupbtn" onclick="signInSignUp();">Register Now</button>
                </div>
            </div>
            <div class="sociallogins">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-google"></i>
                <i class="fa-brands fa-instagram"></i>
            </div>

        </div>

        <div class="boxcover p-4" id="signUp">

            <h2 class="mt-4 mb-4">Create New Account</h2>

            <div class="container row mt-2">
                <div class="col-6 mb-3">
                    <input type="text" class="form-control" placeholder="First Name" id="fname"/>
                </div>

                <div class="col-6 mb-3">
                    <input type="text" class="form-control" placeholder="Last Name" id="lname"/>
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Email" id="email"/>
                </div>

                <div class="mb-3 col-6">
                    <input type="text" class="form-control" placeholder="Password" id="password"/>
                </div>

                <div class="mb-3 col-6">
                    <input type="text" class="form-control" placeholder="Confirm Password" id="cpassword"/>
                </div>

                <div class="mb-3 col-8 pe-0">
                    <div class="form-control pt-0 pb-0 pe-0">
                        <input type="text" class="phn_in" placeholder="Phone Number" id="pnum"/>
                        <button class="codebtn me-0">Get Code</button>
                    </div>
                </div>

                <div class="mb-3 col-4">
                    <input type="text" class="form-control" placeholder="Verify Code" id="vcode"/>
                </div>

                <div class="mb-3 col-6">
                    <input type="text" class="form-control" placeholder="Birth Date" id="bd"/>
                </div>

                <div class="mb-3 col-6">
                    <input type="text" class="form-control" placeholder="Gender" id="gender"/>
                </div>

            </div>

            <div class="d-flex flex-column align-items-center col-12">
                <button class="fw-bold fs-5 col-8 mb-3 mt-3 signupbtn" onclick="signUpProcess();">Sign Up</button>
                <a href="#" onclick="signInSignUp();" class="signInlink" style="color: green;">Already Have an Account... ? </a>
            </div>

            <div class="sociallogins1">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-google"></i>
                <i class="fa-brands fa-instagram"></i>
            </div>

        </div>

    </div>

    <script src="js/script.js"></script>
</body>

</html>