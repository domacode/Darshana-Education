


<?php
session_start();

//IF USER  IS NOT LOGGED IN SEND HIM TO THE LOGIN PAGE
if (!isset($_SESSION['user'])) {
    $_SESSION['status'] = "User is not logged in";
    $_SESSION['status_type'] = "";
    header('location: index.php');
    die();
}
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the new product details from the form
    $newProduct = [
        "title" => $_POST['title'],
        "date" => $_POST['date'],
        "start time" => $_POST['start time'],
        "end time" => $_POST['end time'],
        "image" => $_POST['image'],
    ];

    // Store the new product in the session
    if (!isset($_SESSION['products'])) {
        $_SESSION['products'] = [];
    }
    $_SESSION['products'][] = $newProduct;

    // Redirect to the classes page
    header("Location: class.php");
    exit();
}


$pageName = 'Teach Page';
include_once 'includes/header.php';
?>

<h1 class="text-center mt-5">Welcome to Teaching Page</h1>
<h3 class="text-center mt-2">Teach with us And Earn with us</h3>

<section>
     <div class="min-vh-100 col-sm-10 col-md-8 col-lg-5 mx-auto">
        <div class="container mt-5">
            <h2>Add class</h2>
            <form method="POST">
                <div class="mb-3">
                    <label for="title" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="text" class="form-control" id="date" name="date" required>
                </div>
                <div class="mb-3">
                    <label for="start time" class="form-label">Start time</label>
                    <input type="time" class="form-control" id="start" name="start" required>
                </div>
                <div class="mb-3">
                    <label for="end time" class="form-label">End time</label>
                    <input type="time" class="form-control" id="end" name="end" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image URL</label>
                    <input type="url" class="form-control" id="image" name="image" required>
                </div>
                <button type="submit" href="contectus.php" class="btn btn-primary">Add your class and Contect us</button>
            </form>
        </div>

    </div>    

    
</section>

<section class="container-fluid mx-auto pb-5 mb-5 min-vh-100" style="background-color: hsla(227, 10.30%, 17.10%, 0.32); padding-bottom: 45px; padding-top: 70px; margin-bottom: 0;">
    <h1 class="text-center mt-5">Teach</h1>
    <h3 class="text-center mt-2">Teach with us And Earn with us</h3>

    <div class="min-vh-100 col-sm-10 col-md-8 col-lg-5 mx-auto">
        <div class="container mt-5">
            <h2>Add class</h2>
            <form method="POST">
                <div class="mb-3">
                    <label for="title" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="text" class="form-control" id="date" name="date" required>
                </div>
                <div class="mb-3">
                    <label for="start time" class="form-label">Start time</label>
                    <input type="time" class="form-control" id="start" name="start" required>
                </div>
                <div class="mb-3">
                    <label for="end time" class="form-label">End time</label>
                    <input type="time" class="form-control" id="end" name="end" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image URL</label>
                    <input type="url" class="form-control" id="image" name="image" required>
                </div>
                <button type="submit" href="contectus.php" class="btn btn-primary">Add your class and Contect us</button>
            </form>
        </div>

    </div>    

    
</section>

<?php
include_once 'includes/footer.php';
include_once 'includes/errorMessage.php';
?>
 