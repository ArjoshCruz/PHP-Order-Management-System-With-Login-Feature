<!DOCTYPE html>
<html lang="en">
<heameta chad>
    <rset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arjosh's Cafe</title>
    <link rel="stylesheet" href="form-reg.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="main-div">
    <h1>Welcome to <span class="arjosh-cafe">Arjosh's Cafe!</span></h1>
    <h2> REGISTER:</h2>

    <form action="handleForm.php" method="POST"> <!--Will proceed to handleform.php once submitted.-->
        <label for="userTextField"><strong>Enter Username:</strong></label>
        <input class="tf" type="text" placeholder="Username" name="regUserTextField"> <br><br>

        <label for="passwordTextField"><strong>Enter Password:</strong></label>
        <input class="tf" type="password" placeholder="Password" name="regPasswordTextField"> <br> <br>

        <div class="button-div">
            <input class="reg-button" type="submit" value="REGISTER" name="registerBtn">
        </div>
    </form>

    <div class="button-div">
        <!--Will proceed to login.php once submitted.-->
        <input class="login-button" type="submit" value="Login Now!" onclick="location.href='login.php'">    
    </div>
    <h6><u>Already have an account? Login Now!</u></h6>
    </div>

</body>
</html>