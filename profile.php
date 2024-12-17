<?php
session_start();

//IF USER  IS NOT LOGGED IN SEND HIM TO THE LOGIN PAGE
if (!isset($_SESSION['user'])) {
    $_SESSION['status'] = "User is not logged in";
    $_SESSION['status_type'] = "";    
    header('location: index.php');
    die();
}


$pageName = 'Profile';

include_once 'includes/header.php';
?>

<h1 class="text-center mt-5">Your Profile</h1>

<section>
    <div class="min-vh-100 container col-xxl-8 px-4 py-5 " data-bs-theme="dark">
        <div class="profile-container">
            <img src="Untitled%20design.png" alt="Profile Picture" id="profilePhoto" class="profile-pic" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover;" onclick="triggerFileInput()">
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="profilePhoto" id="fileInput" accept="image/*" onchange="this.form.submit()">
            </form>
            <script>
                // Function to trigger the hidden file input when the photo is clicked
                function triggerFileInput() {
                document.getElementById('fileInput').click();
                }

            </script>
            <p>Index No:</p>
        </div>
    </div> 
</section>


<?php
include_once 'includes/footer.php';
include_once 'includes/errorMessage.php';
?>





 
    
    
    

  