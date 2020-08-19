<div class="form">
  <form method="post" class="login-form">
    <link rel="stylesheet" href="./css/loginstyle.css">
    <?php
    include '../PHP/connection.php';
    if (is_countable($errors)) {
      foreach ($errors as $error)
        echo '<p>', $error, '</p>';;
    } ?>
    <h1>Login Page</h1>
    <input type="text" name="uname" placeholder="Username" required />
    <input type="password" name="psw" placeholder="Password" required />
    <button type="submit" class="btn" name="login_btn">login</button>
  </form>
</div>
  <?php
  include '../PHP/connection.php';

  if(isset($_POST['login_btn'])) {
    $uname = filter_input(INPUT_POST, 'uname', FILTER_SANITIZE_STRING);
    $password = $_POST['psw'];

    if (empty($username)) {
      array_push($errors, "Username is empty");
      echo "Username is empty";
    }
    if (empty($password)) {
      array_push($errors, "Password is required");
      echo "password is empty";
    }
    if ($uname == 'admin' && $password == 'admin') {
      // header('location: ../Admin_Page/index.php');
      echo "Directed to Admin Page";
    }
    if (count($errors) == 0) {
      $sql = "SELECT * FROM user_data WHERE USERNAME='$uname' AND USER_PASSWORD= '$password'";
      $result = $conn->query($sql);
      if (mysqli_num_rows($result) == 1) {
        $_SESSION['uname'] = $username;
        $_SESSION['sucess'] = "Your are now logged in";
        header('location: ../index.php');
      }
      else{
        array_push($errors, "Wrong username or password combination");
      }
    } else {
      array_push($errors, "Wrong username/password combination");
      echo count($errors);
      echo "array logic error";
    }
  }
  ?>