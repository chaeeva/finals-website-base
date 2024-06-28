<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="LoginSignUpStyle.css">
    <title>Ez Ticketst</title>
</head>
<body>
<div class="container">
    <form action="loginIndex.php">
        <div class="form-outline">
            <!-- email -->
            <div class="input-line">
                <input type="email" name="email-username"id="email-username" class="form-control" placeholder="Email or Username">
            </div>
            <br>
            <!-- password -->
            <div class="input-line">
                <input type="password" name="password-login" id="password=login" class="form-control" placeholder="Password">
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
                <button type="button">Sign In</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>