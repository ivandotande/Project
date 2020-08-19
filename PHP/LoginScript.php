<?php
include 'connection.php';
if(isset($_POST['login_btn'])){
  $uname = filter_input(INPUT_POST,'uname',FILTER_SANITIZE_STRING);
  $password = $_POST['psw'];
  
  if(empty($username)){
    array_push($errors,"Username is empty");
  }
  if(empty($password)){
    array_push($errors,"Password is required");
  }
  if($uname == 'admin' && $password == 'admin'){
    header('location: ../Admin_Page/index.php');
  }
  if (count($errors) == 0) {
    $sql = "SELECT * FROM user_data WHERE USERNAME='$uname' AND USER_PASSWORD= '$password'";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) == 1) {
      $_SESSION['uname'] = $username;
      $_SESSION['sucess'] = "Your are now logged in";
      echo"Sucess"; 
      header('location: ../index.php');
    }
    else{
      array_push($errors, "Wrong username or password combination");
      echo '<script type="text/javascript">';
      echo 'alert("Last  2 Error")';
      echo '</script>';
      sleep(2);
      header('location: ../Login.php');
    }
  }else {
    array_push($errors, "Wrong username/password combination");
    echo '<script language="javascript">';
    echo 'alert("Last Error")';
    echo '</script>';
    echo "last error";
    //header('location: ../Error404.php');
  }
}
?>