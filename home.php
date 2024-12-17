<?php
session_start();

//IF USER  IS NOT LOGGED IN SEND HIM TO THE LOGIN PAGE
if (!isset($_SESSION['user'])) {
    $_SESSION['status'] = "User is not logged in";
    $_SESSION['status_type'] = "";    
    header('location: index.php');
    die();
}

$pageName = 'Home Page';
include_once 'includes/header.php';
?>

<h1 class="text-center mt-5">Home</h1>

<section data-bs-theme="black">
    <div class="min-vh-100 container col-xxl-8 px-4 py-5" >
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="Black%20and%20Blue%20Initials%20Creative%20Logo%20(1).png" class="d-block mx-lg-auto img-fluid" alt="Image by freepik"
                    width="600" height="600" loading="lazy">                        
            </div>
            <div class="col-lg-6">
                <p class="lead"><b>Find Your Class From</b></p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" onclick="window.location.href = 'class.php'"
                    class="btn btn-primary btn-lg px-4 me-md-2">"ClassTimeTable"</button>
                </div>
            </div>
        </div>
    </div> 
</section>


<?php
include_once 'includes/footer.php';
include_once 'includes/errorMessage.php';
?>


