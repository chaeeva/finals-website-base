<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="LoginSignUpStyle.css">
    <title>Ez Tickets</title>
</head>
<body>
<div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <div class="form-outline">
            <!-- email -->
            <div class="input-line">
                <input type="email" name="email"id="email" class="form-control" placeholder="Email" required>
            </div>
            <br>
            <!-- username -->
            <div class="input-line">
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
            </div>
            <br>
            <!-- first name -->
            <div class="input-line">
                <input type="text" name="first-name" id="first-name" class="form-control" placeholder="First Name" required>
            </div>
            <br>
            <div class="input-line">
                <input type="text" name="last-name" id="last-name" class="form-control" placeholder="Last Name" required>
            </div>
            <br>
            <!-- phone number -->
            <div class="input-line">
                <input type="tel" name="phone-number" id="phone-number" class="form-control" placeholder="Phone Number" required>
            </div>
            <br>
            <!-- password -->
            <div class="input-line">
                <input type="password" name="password-login" id="password=login" class="form-control" placeholder="Password" required>
            </div>
            <br>
            <div class="input-line">
                <input type="password" name="confirm-password" id="confirm-password" class="form-control" placeholder="Confirm Password" required>
            </div>
            <br>
<!-- remember me and forgot password -->
            <div id="button">
                <input type="submit" name="sign-in" id="sign-in" value="Create Account">
            </div>
        </div>
    </form>
</div>
<div class="column"><?php include 'signupIndex.php';?></div>
</body>
</html>