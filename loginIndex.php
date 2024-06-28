<?php
    if(isset($_POST['email-username']) && isset($_POST['password-login']) && $_POST['checkbox']) {
        $emailUsername = $_POST['email-username'];
        $password = $_POST['password-login'];
        $checkbox = $_POST['checkbox'];

        require "loginQuery.php";
        
        if($_POST['checkbox']= true && !empty($_POST['email-username']) && !empty($_POST['password-login']) ) {
            setcookie('username', $emailUsername, time() + 86400 * 30, "/");
            setcookie('password', $password, time() + 86400 * 30, "/");
        }
        // Check if email/username and password are valid
        // Perform database query to authenticate user
        // Redirect to home page if successful
        // Redirect to login page if failed
    } 

?>