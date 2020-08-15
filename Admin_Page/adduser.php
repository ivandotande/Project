<?php
    $active = 'UserManagement';
    include '../PHP/connection.php';
    include './Base/navbar.php';
?>
<body>
    <form method="POST" action="../PHP/insertuser.php">
            <div class="form">
                <form class="register-form">
                    <h1>Register</h1>                 
                    <label for="username"><b>username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>
          
                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                    <hr>
                    
                    <button type="submit" name = 'registerbtn'class="registerbtn">Register</button>
                </form>
            </div>
        </form>
</body>