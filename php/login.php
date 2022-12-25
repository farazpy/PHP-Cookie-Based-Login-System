<?php 
include("config.php") ;


$email = trim($_POST['email']) ;
$password = $_POST['password'] ;


if($email==null||$password==null) {
    die('<div class="alert my-3 alert-danger">Please fill out all fields!</div>') ;
}


if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die('<div class="alert my-3 alert-danger">Invalid Email-address!</div>') ;
}
else {
    $auth_user_sql = mysqli_query($conn,"SELECT * from users WHERE email='$email'") ;
    if(mysqli_num_rows($auth_user_sql)>0) {
      $auth = mysqli_fetch_array($auth_user_sql) ;
      $password_in_db = $auth['password'] ;
    }
    else {
        die('<div class="alert my-3 alert-danger">Email is not registered yet!</div>') ;
    }
}

if(PASSWORD_VERIFY($password,$password_in_db)) {
setcookie("login_token",$auth['token'],time() + (1 * 365 * 24 * 60 * 60),'/') ;
echo '<meta http-equiv="refresh" content="0.5;url=dashboard.php" />' ;
}
else {
    die('<div class="alert my-3 alert-danger">Wrong password!</div>') ;
}




?>