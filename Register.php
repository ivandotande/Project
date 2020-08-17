<?php
unset($active);
$active = 'register';
include './PHP/connection.php';
include './PHP Component/Navbar.php';
?>
<html>

<body>
    <form method="POST" action="./PHP/insertuser.php">
    <link rel="stylesheet" href="../css/registerStyle.css">
        <div class="form">
            <form class="register-form">
                <h1>Register</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <label for="username"><b>username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                <hr>
                <button type="submit" class="registerbtn">Register</button>
            </form>
            <div class="container signin">
                <p>Already have an account? <a href="Login.php">Sign in</a>.</p>
            </div>
        </div>
    </form>
</body>
<?php
include './PHP Component/Footer.php';
?>
<html>