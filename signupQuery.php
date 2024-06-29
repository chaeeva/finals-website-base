<?php
$servername = "localhost";
$usernameAdmin = "root";
$passwordAdmin = "danielle69";
$dbname = "finals_userdata";

$connection = new mysqli($servername, $usernameAdmin, $passwordAdmin, $dbname);

if($connection->connect_errno) {
    die("Connection failed: ". $connection->connect_error);
}
$email = mysqli_real_escape_string($connection, $_POST['email']);
$username = mysqli_real_escape_string($connection, $_POST['username']);
$password = mysqli_real_escape_string($connection, $_POST['password-login']);
$conf_pass = mysqli_real_escape_string($connection, $_POST['confirm_password']);
$fname = mysqli_real_escape_string($connection, $_POST['first-name']);
$lname = mysqli_real_escape_string($connection, $_POST['last-name']);
$number = mysqli_real_escape_string($connection, $_POST['phone-number']);

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO user_data (email, username, first_name, last_name, contact_number, passw) 
VALUES ('$email', '$username', '$fname', '$lname', '$number', '$hashedPassword')";

if($connection->query($sql) === TRUE) {
echo "Registration Successful!";
header("Location:login.php");
exit();
}
else {
echo "Error: ". $sql. "<br>". $connection->error;
}

$connection->close();


?>