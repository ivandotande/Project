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
  if(!empty($errors)){
    echo 'error';
    array_push($errors, "Wrong username/password combination");
    foreach($errors as $error) :
    echo $error;
    endforeach;
    
  }else{
    $sql = "SELECT * FROM user_data WHERE USERNAME='$uname' AND USER_PASSWORD= '$password'";

    $result = $conn->query($sql);
    if(mysqli_num_rows($result) == 1){
      $_SESSION['uname'] = $username;
      $_SESSION['sucess'] = "Your are now logged in";
      header('location: ../index.html');
    }
  }
}else{
  header('location: ../error404.html');
}
?>
   
