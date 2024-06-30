<?php
    $host = "localhost";
    $admin = "root";
    $adminPassword = "danielle69";
    $dbname = "finals_userdata";

    $connection = new mysqli($host, $admin, $adminPassword, $dbname);

    if($connection->connect_error) {
        die("Connection failed: ". $connection->connect_error);
    }

    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password-login']);
    $firstName = mysqli_real_escape_string($connection, $_POST['first-name']);
    $lastName = mysqli_real_escape_string($connection, $_POST['last-name']);
    $phoneNumber = mysqli_real_escape_string($connection, $_POST['phone-number']);

    $sql ="INSERT INTO users(Email, Username, Passw, first_name, last_name, contact_number)
    VALUES('$email', '$username', '$password', '$firstName', '$lastName', '$phoneNumber')";

    if($connection->query($sql) === TRUE) {
        echo "Registration Successful<br>";
        echo"<a href='login.php' class='column'> Login Here.</a>";
    }

    else {
        echo "Error: ". $sql. "<br>". $connection->error;
    }

    $connection->close();

?>