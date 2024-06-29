<?php
$servername = "localhost";
$usernameAdmin = "root";
$passwordAdmin = "danielle69";
$dbname = "finals_userdata";

$connection = new mysqli($servername, $usernameAdmin, $passwordAdmin, $dbname);

if($connection->connect_errno) {
die("Connection failed: ". $connection->connect_error);
}
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password-login'];
$conf_pass = $_POST['confirm_password'];
$fname = $_POST['first-name'];
$lname = $_POST['last-name'];
$number = $_POST['phone-number'];

$sql = "INSERT INTO user_data (email, username, first_name, last_name, contact_number, passw) 
VALUES ('$email', '$username', '$fname', '$lname', '$number', '$password')";

if($connection->query($sql) === TRUE) {
echo "Registration Successful!";
header("Location:login.php");
}
else {
echo "Error: ". $sql. "<br>". $connection->error;
}

$connection->close();

    // to be continued
?>