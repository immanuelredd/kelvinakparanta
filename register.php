<?php

define('TITLE', 'Register | Kelvin Akparanta');
require_once('includes/head_section.php');

?>


<link rel="stylesheet" href="/static/css/login.css">
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="register_form">
        <div class="image-item column">
            <div class="inner_image">
                <img src="/static/images/KelvinAkparanta-Logo.png" alt="Avatar" class="avatar">
            </div>
        </div>
        <div class="form-item column">
            <div class="inner_form">
                <h1>Register</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>

                <!--  <?php if ((count($errs) > 0)) : ?>
                    <div class="error_msg">
                        <?php foreach ($errs as $err) : ?>
                            <li>
                                <?php echo $err; ?>
                            </li>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>-->

                <div class="uname">
                    <label for="username"><b>Username</b></label><br>
                    <input type="text" placeholder="Enter Username" name="username" id="username" value="">
                </div>
                <div class="email">
                    <label for="email"><b>Email</b></label><br>
                    <input type="text" placeholder="Enter Email" name="email" id="email" value="">
                </div>

                <div class="psw">
                    <label for="psw"><b>Password</b></label><br>
                    <input type="password" placeholder="Enter Password" name="password" id="password" value="">
                </div>

                <div class="uname-repeat">
                    <label for="psw-repeat"><b>Repeat Password</b></label><br>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat">
                </div>

                <hr>
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                <button type="submit" name="registerBtn">Register</button>

                <div class="container signin">
                    <p>Already have an account ? <a href="login.php">Sign in</a>.</p>
                </div>
            </div>
        </div>

    </form>
</body>

</html>