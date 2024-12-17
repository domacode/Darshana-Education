<?php
session_start();

//IF USER  IS LOGGED IN SEND HIM TO THE HOME PAGE
if (isset($_SESSION['user'])) {
    $_SESSION['status'] = "You are logged Successfuly. Welcome to D.E.C !";
    $_SESSION['status_type'] = "success";
    header('location: home.php');
    die();
}

$pageName = 'Login Page';
include_once 'includes/header.php';
?>

<h1 class="text-center mt-5">Sign in</h1>

<div class="min-vh-100 col-sm-10 col-md-8 col-lg-5 mx-auto">
    <form class="my-5 needs-validation" action="dbh/userLogin.php" method="POST" novalidate>
      <div class="row d-flex align-items-center justify-content-center">
        <div class="mb-3">
          <!-- Email Input -->
          <input type="email" class="form-control form-control-lg" aria-describedby="emailHelp" id="exampleInputEmail1" name="email"
            placeholder="Email" required>
          <div class="invalid-feedback">
            Please enter a valid email address.
          </div>
        </div>
        <div class="mb-3">
          <!-- Password Input -->
          <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="password"
            placeholder="Password" required minlength="8">
          <div class="invalid-feedback">
            Password must be at least 8 characters long.
          </div>
        </div>
        <div class="row">
          <button type="submit" class="btn btn-primary btn-lg mt-3 col-sm-2 col-lg-10 text mx-auto">Sign In</button>
        </div>
        <h5 class="mt-3 text-center">Don't have an account? <a href="register.php" class="textLink">register now</a></h5>
      </div>  
    </form>
</div>
          

<?php
include_once 'includes/footer.php';
include_once 'includes/errorMessage.php';
?>