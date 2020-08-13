<?php
include "./connection.php";
try{
  $uname = filter_input(INPUT_POST,'uname',FILTER_SANITIZE_STRING);
  $password = $_POST['psw'];

  if(empty($username)){
    array_push($ERRORS,"Username is empty");
  }
  if(empty($password)){
    array_push($ERRORS,"Password is required");
  }

  if(count($ERRORS == 0)){
    $sql = "SELECT * FROM user_data WHERE username='$uname' AND user_password= '$password'";
    $result = $conn->query($sql);
    if($mysqli_num_rows($result) == 1){
      $_SESSION['uname'] = $username;
      $_SESSION['sucess'] = "Your are now logged in";
      header('location:index.php');
    }
  }else{
    array_push($ERRORS, "Wrong username/passowrd comb2ination");
  }
}catch(Exception $e){
  echo $e->getMessage();
}

?>
   
