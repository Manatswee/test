<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Web Application for Developing English Language Skills.</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="background"></div>
    <div class="container">
        <div class="item">
            <h1>Web Application for Developing English Language Skills.</h1>
            <div class="text-item">
                <h2>WELCOME!!!! <br><span>
                To ......        
                </span></h2>
                <p>Attractions in Chumphon</p>
            </div>
        </div>

        <div class="login-section">
            <div class="form-box login">
                <form action="home.html">
                    <h2>Sign Ins</h2>
                    <div class="input-box">
                        <input type="text" required>
                        <label>E - mail</label>
                    </div>
                    <div class="input-box">
                        <input type="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-password">
                        <a href="forget_password.php"><br>Forget Password</a>
                    </div>

                    <form method="post" action="home.php">
                        <br><button class="btn">Login In</button>

                        <div class="creater-account"></div>
                        <p><br>Create A New Account?
                            <a href="register.php" class="register-link">Sign Up</a>
                        </p>

                    </form>

                </form>
            </div>
        </div>
    </div>
    <!-- <script src="index.js"></script> -->
</body>

</html>