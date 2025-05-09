<?php

include("dbCon.php");

$username = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpass = $_POST['re_password'];

$checkQuery = mysqli_query($con, "SELECT * FROM users WHERE username='$username' OR email='$email'");
if (mysqli_num_rows($checkQuery) > 0) {
    echo "Already Exists";
    // exit();
}

$insertQuery = mysqli_query($con, "INSERT INTO users (username, email, password, confirmpass) VALUES ('$username', '$email', '$password', '$confirmpass')");

if ($insertQuery) {
    header('location: home.html');
} else {
    echo "Not Insert";
}

?>
