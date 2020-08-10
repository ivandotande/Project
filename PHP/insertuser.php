<?php
include "./connection.php";

$username = "";
$email    = "";
$errors   = array();

//register button
if (isset($_POST['register_btn'])) {
  register();
}
// escape string
function b($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username    =  b($_POST['username']);
	$email       =  b($_POST['email']);
	$password_1  =  b($_POST['psw']);
  $password_2  =  b($_POST['psw-repeat']);
  $lastid      =  $query ="SELECT USER_ID from user_db ORDER BY id DESC LIMIT 1;";

	// form validation: ensure that the form is correctly filled
	if (empty($username)) { 
		array_push($errors, "Username is required"); 
	}
	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	}
	if (empty($password_1)) { 
		array_push($errors, "Password is required"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
    $password = md5($password_1);
    try{
      $sql = "INSERT INTO user_data (USER_ID, USERNAME,USER_EMAIL, USER_PASSWORD)
      VALUES ('$lastid', '$username', '$email', '$password')";
      var_dump($sql);
      header('Location : ../Builder.html ');
    }
    catch (Exception $e){
      $_SESSION['msg'] = "Unable to insert to database";
    header('Location : ../error404.html');
    }
  }
  else{
    
    $_SESSION['msg'] = "Errors detected";
    header('Location : ../error404.html');
  }
}
// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}

header('Location : ../error404.html');
?>