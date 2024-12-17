<?php
session_start();

//IF USER  IS LOGGED IN SEND HIM TO THE HOME PAGE
if (isset($_SESSION['user'])) {
    $_SESSION['status'] = "User is logged in already";
    $_SESSION['status_type'] = "success";
    header('location: home.php');
    die();
}


$pageName = 'Register Page';
include_once 'includes/header.php';
?>


<section class="container-xl mx-auto mt-1 min-vh-100">
    <div class="row align-items-center mx-auto">
        <h1 class="text-center my-5">Register</h1>
        <form class="row my-3 mx-auto needs-validation" action="dbh/registerUser.php" method="POST" novalidate>
            <div class="col-md-4 mb-3">
                <label for="exampleInput" class="form-label">First Name</label>
                <input type="text" class="form-control form-control-lg" id="exampleInput" name="fName" required>
                <div class="invalid-feedback">
                    Please provide a valid first name.
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="exampleInput1" class="form-label">Last Name</label>
                <input type="text" class="form-control form-control-lg" id="exampleInput1" name="lName" required>
                <div class="invalid-feedback">
                    Please provide a valid last name.
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="exampleInput2" class="form-label">Date of Birth</label>
                <input type="date" class="form-control form-control-lg" name="dob" id="exampleInput2" required>
                <div class="invalid-feedback">
                    Please select a valid date of birth.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="exampleInput3" class="form-label">Mobile Number</label>
                <input type="text" class="form-control form-control-lg" id="exampleInput3" name="mNum" required
                    pattern="^\d{10,15}$">
                <div class="invalid-feedback">
                    Please provide a valid Mobile number.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="exampleInput5" class="form-label">Parents Number</label>
                <input type="text" class="form-control form-control-lg" id="exampleInput5" name="pNum" required
                    pattern="^\d{10,15}$">
                <div class="invalid-feedback">
                    Please provide a valid Mobile number.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="exampleInput6" class="form-label">Gender</label>
                <select class="form-select form-select-lg" name="gender" id="exampleInput6" required>
                    <option selected>Male</option>
                    <option >Female</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid gender.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="exampleInput4" class="form-label">School</label>
                <input type="text" class="form-control form-control-lg" id="exampleInput4" name="school" required>
                <div class="invalid-feedback">
                    Please provide your school name.
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" name="email" required>
                <div class="invalid-feedback">
                    Please provide a valid email address.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="password1"
                    required minlength="8">
                <div class="invalid-feedback">
                    Password must be at least 8 characters long.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                <input type="password" class="form-control form-control-lg" id="exampleInputPassword2" name="password2"
                    required>
                <div class="invalid-feedback" id="passwordMismatch">
                    Passwords do not match.
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-custom mt-3 col-md-4 mx-auto">Register</button>
            <h5 class="mt-3 text-center">Already have an account? <a href="login.php" class="textLink">Sign In</a></h5>
        </form>
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (() => {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                const forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission if invalid
                Array.from(forms).forEach(form => {
                    form.addEventListener('submit', event => {
                        // Fetch passwords
                        const password1 = document.getElementById('exampleInputPassword1').value;
                        const password2 = document.getElementById('exampleInputPassword2').value;

                        // Check if passwords match
                        if (password1 !== password2) {
                            document.getElementById('exampleInputPassword2').setCustomValidity("Passwords do not match");
                            document.getElementById('passwordMismatch').style.display = 'block';
                        } else {
                            document.getElementById('exampleInputPassword2').setCustomValidity("");
                            document.getElementById('passwordMismatch').style.display = 'none';
                        }

                        // Prevent submission if invalid
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                        }

                        form.classList.add('was-validated');
                    }, false);
                })
            })()
        </script>

    </div>
</section>


<?php
include_once 'includes/footer.php';
include_once 'includes/errorMessage.php';
?>
