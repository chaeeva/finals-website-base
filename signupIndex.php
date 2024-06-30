<?php
    $email = "";
    $username = "";
    $password = "";
    $conf_pass = "";
    $fname = "";
    $lname = "";
    $number = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sign-in'])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password-login'];
        $conf_pass = $_POST['confirm-password'];
        $fname = $_POST['first-name'];
        $lname = $_POST['last-name'];
        $number = $_POST['phone-number'];
        
        if($_POST['password-login'] !== $_POST['confirm-password']){
            echo "<p class='column'>Passwords do not match.</p>";
            exit;
        }

        else {
            include "signupQuery.php";
            exit;
        }
    }
?>