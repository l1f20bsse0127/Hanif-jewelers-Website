 <?php
include("dbCon.php");

$username = $_POST['email'];
$password = $_POST['password'];

$q = mysqli_query($con, "SELECT * FROM users WHERE email = '$username' AND password = '$password'");

$total_rows = mysqli_num_rows($q);

if ($total_rows > 0) {
    header('Location: home.html');
} else {
    echo "Not registered or invalid username or password";
}
?> 


