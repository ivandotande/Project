<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="Author" content="Ivando Tande">
        <title>PCPartPicker Malaysia | Login/Register</title>
        <link rel="stylesheet" href="./css/loginstyle.css">    </head>
    <body>
        <header>
            <div class="container">
                <div id="branding">
                    <h1><span class="highlight">PCpartPicker </span>Malaysia</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="About.html">About Us</a></li>
                        <li><a href="Builder.HTML">Start Building</a></li>          
                        <a href = "login.html"><button class="LRbutton active" >Login</button></a>
                        <a href = "Register.html"><button class="LRbutton" >Register</button></a>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="login-page">
            <div class="form">
              <form method ="post" class="login-form" action="./php/LoginScript.php">
                  <h1>Login Page</h1>
                <input type="text" name= "uname" placeholder="Username"/>
                <input type="password" name= "psw" placeholder="Password"/>
                <button type="submit" class="btn" name="login_user">login</button>
                <p class="message">Not registered? <a href="Register.html">Create an account</a></p>
              </form>
            </div>
          </div>
          <footer class="footer">
            <div>
                <h1>
                PCpartPicker 
                </h1>
            </div>
            <div>
                <p class="Search">Looking for a specific part?<a href="search.html">Click here</a></p> 
                <p class="copyright">Greed House Studio, Copyright &copy; 2019</p>
            </div>
        </footer>
    </body>
</html>