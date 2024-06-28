<?php
    $servername = "localhost";
    $usernameAdmin = "root";
    $passwordAdmin = "danielle69";
    $dbname = "finals_userdata";

    $connection = new mysqli($servername, $usernameAdmin, $passwordAdmin, $dbname);

    if($connection->connect_errno) {
        die("Connection failed: ". $connection->connect_error);
    }

    
?>