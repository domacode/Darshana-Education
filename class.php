
<?php
session_start();

//IF USER  IS NOT LOGGED IN SEND HIM TO THE LOGIN PAGE
if (!isset($_SESSION['user'])) {
    $_SESSION['status'] = "User is not logged in";
    $_SESSION['status_type'] = "";
    header('location: index.php');
    die();
}



$pageName = 'Class Page';
include_once 'includes/header.php';
?>

<style>
table {
    width: 100%;
    border-collapse: collapse;
}
th, td {
    padding: 10px;
    text-align: left;
    border: 0px solid hsla(0, 0.00%, 0.00%, 0.91);
}
th {
    background-color:rgba(0, 0, 0, 0);
}
</style>
<section>
  <div class="container-xl row mx-auto min-vh-100">  
    <h1 class="text-center mt-5">Class</h1>
    <h3 class="text-center mt-2">Find Your class from "ClassTimeTable"</h3>
    <table class="table table-dark table-striped">
        <tr>
            <th>Subject</th>
            <th>Date</th>
            <th>Time</th>
            <th>Grade</th>
            <th>Option</th>
        </tr> 
        <tr>
            <td>English</tb>
            <td>Friday</tb>
            <td>4.00 P.M - 6.00 P.M</tb>
            <td>1 - A/l</td>
            <td>At class</td>
        </tr>  
        <tr>
            <td>Maths</tb>
            <td>Friday</tb>
            <td>4.00 P.M - 6.00 P.M</tb>
            <td>1 - A/l</td>
            <td>At class</td>
        </tr> 
        <tr>
            <td>Science</tb>
            <td>Friday</tb>
            <td>4.00 P.M - 6.00 P.M</tb>
            <td>1 - A/l</td>
            <td>At class</td>
        </tr>  
        <tr>
            <td>Sinhala</tb>
            <td>Friday</tb>
            <td>4.00 P.M - 6.00 P.M</tb>
            <td>1 - A/l</td>
            <td>At class</td>
        </tr>  
        <tr>
            <td>Maths</tb>
            <td>Friday</tb>
            <td>4.00 P.M - 6.00 P.M</tb>
            <td>1 - A/l</td>
            <td>online</td>
        </tr>
        <tr>
            <td>Maths</tb>
            <td>Friday</tb>
            <td>4.00 P.M - 6.00 P.M</tb>
            <td>1 - A/l</td>
            <td>online</td>
        </tr>  
        <tr>
            <td>Maths</tb>
            <td>Friday</tb>
            <td>4.00 P.M - 6.00 P.M</tb>
            <td>1 - A/l</td>
            <td>online</td>
        </tr>      
    </table>
  </div>    
</section>    

<?php
include_once 'includes/footer.php';
include_once 'includes/errorMessage.php';
?> 