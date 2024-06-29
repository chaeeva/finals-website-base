<?php
    $email = "";
    $username = "";
    $password = "";
    $conf_pass = "";
    $fname = "";
    $lname = "";
    $number = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password-login'];
        $conf_pass = $_POST['confirm_password'];
        $fname = $_POST['first-name'];
        $lname = $_POST['last-name'];
        $number = $_POST['phone-number'];
        
        

        if($_POST['password-login'] !== $_POST['confirm_password']){
            echo "<p class='column'>Passwords do not match.</p>";
            exit;
        }

        else {
            require "signupQuery.php";
            exit();

        }
    }
?>