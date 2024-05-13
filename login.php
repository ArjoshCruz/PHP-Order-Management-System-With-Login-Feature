<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arjosh's Cafe</title>
    <link rel="stylesheet" href="form.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="main-div">
    <h1>Welcome to <span class="arjosh-cafe">Arjosh's Cafe!</span></h1>
    <h2>LOGIN:</h2>

    <form action="handleForm.php" method="POST"> <!--Will proceed to handleform.php once submitted.-->
        <label for="userTextField"><strong>Enter Username:</strong></label> <br>
        <input class="tf" type="text" placeholder="Username" name="userTextField"> <br><br>

        <label for="passwordTextField"><strong>Enter Password:</strong></label><br>
        <input class="tf" type="password" placeholder="Password" name="passwordTextField"> <br> <br>

        <div class="button-div">
            <label for="loginBtn"></label>
            <input class="login-button" type="submit" value="LOGIN" name="loginBtn">
        </div>
    </form>

    <div class="button-div">  
        <!--Will proceed to register.php once submitted.-->
        <input class="reg-button" type="submit" value="Register Now" onclick="location.href='register.php'">
    </div>
    <h6><u>Don't have an account? Register Now!</u></h6>
    </div>
</body>
</html>