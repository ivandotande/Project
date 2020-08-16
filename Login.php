<?php
    $active = 'Login';
    include './PHP/connection.php';
    include './PHP Component/Navbar.php';
?>
<html>    
    <body>
        <div class="login-page">
            <div class="form">
                <form method ="post" class="login-form" action='./PHP/LoginScript.php'>
                <link rel="stylesheet" href="./css/loginstyle.css">   
                <?php 
                include './PHP/connection.php';
                if(is_countable($errors)){
                    foreach ($errors as $error)
                    echo '<p>',$error,'</p>';               
                } ?>
                <h1>Login Page</h1>
                <input type="text" name= "uname" placeholder="Username" required/>
                <input type="password" name= "psw" placeholder="Password" required/>
                <button type="submit" class="btn" name="login_btn">login</button>
                <p class="message">Not registered? <a href="Register.html">Create an account</a></p>
              </form>
            </div>
          </div>
    <?php
    include './PHP Component/Footer.php';
    ?>
    </body>
</html>