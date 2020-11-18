<?php define('TITLE', 'Register | Kelvin Akparanta'); ?>
<?php require_once('includes/head_section.php'); ?>

<link rel="stylesheet" href="/static/css/login.css">
</head>

<body>
    <form action="login.php" method="post" class="login_form">
        <div class="image-item column">
            <div class="inner_image">
                <img src="/static/images/KelvinAkparanta-Logo.png" alt="Avatar" class="avatar">
            </div>
        </div>

        <div class="form-item column">
            <div class="inner_form">
                <h1>Login</h1>
                <p>Please fill in to signIn to you account</p>
                <hr>
                <div class="uname">
                    <label for="uname"><b>Username</b></label><br>
                    <input type="text" placeholder="Enter Username" name="username" required>

                </div>
                <div class="psw">
                    <label for="psw"><b>Password</b></label><br>
                    <input type="password" placeholder="Enter Password" name="password" required>
                </div>

                <button type="submit">Login</button>

                <div class="container">
                    <p>Don't have an Account ? <a href="register.php">register.</a>
                    </p>
                    <span class="fpsw">Forgot <a href="#">password ?</a></span>
                </div>

            </div>
        </div>
    </form>

</body>

</html>