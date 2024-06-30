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
    <form action="loginIndex.php" method="post">
        <div class="form-outline">
            <!-- email -->
            <div class="input-line">
                <input type="email" name="email-username"id="email-username" class="form-control" placeholder="Email or Username" required>
            </div>
            <br>
            <!-- password -->
            <div class="input-line">
                <input type="password" name="password-login" id="password-login" class="form-control" placeholder="Password" required>
            </div>
            <br>
<!-- remember me and forgot password -->
            <div class="row">
                <div class="column">
                    <div class="form-check">
                        <input type="checkbox" name="checkbox" id="checkbox" class="form-check-input" checked>
                        <label for="checkbox" class="form-check-label">Remember Me</label>
                    </div>
                    <div class="column">
                    &emsp; &emsp; &emsp;<a href="">Forgot Password?</a>
                    </div>
                </div>
            </div>

        
            <div id="button">
                <input type="submit" id="sign-in">
            </div>

            <br>

            <div class="column">
                Not a member?&nbsp;<a href="signup.php"> Register!</a>
            </div>
            <br>
            <div class="column"><a href="home.php">Click to go back.</a></div>
        </div>
    </form>
    

</div>
</body>
</html>