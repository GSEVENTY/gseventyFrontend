<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="assets/css/style-login-signup.css" />
    <title>Register</title>
</head>

<body>
    <div class="signInContainer">
        <div class="column">
            <div class="header">
                <a href="./index.php">
                    <img src="./assets/images/logo_head.png" title="logo" alt="site logo" />
                </a>
                <h3>Register</h3>
                <span>to continue to Website</span>
            </div>

            <form action="" method="POST">

                <input type="text" name="firstName" placeholder="First name" required />


                <input type="text" name="username" placeholder="User name" required />


                <input type="email" name="email" placeholder="Email" required />

                <input type="password" name="password" placeholder="Password" required />

                <input type="submit" name="register_btn" value="Register" />
            </form>

            <a href="./login.php" class="signInMessage">Already have and account? Sign in here!</a>
        </div>
    </div>
</body>

</html>