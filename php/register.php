<?php 
include("config.php") ;

// Fetching all POST data
$name = $_POST['register_name'] ;
$email = trim($_POST['register_email']) ;
$_raw_password = $_POST['register_password'] ;
$raw_token = rand(999999999, 999999999999);
$token = md5($raw_token);

$password = password_hash($_raw_password, PASSWORD_DEFAULT);

// Check out all fields entry

if($name==null||$email==null||$password==null) {
    die('<div class="alert my-3 alert-danger">Please fill out all fields!</div>') ;
}

// Validate Email Address
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die('<div class="alert my-3 alert-danger">Invalid Email-address!</div>') ;
}

// Checking existing entry
$query_to_check_existing_entry = mysqli_query($conn,"SELECT * from users WHERE email='$email'") ;
if(mysqli_num_rows($query_to_check_existing_entry)>0) {
    die('<div class="alert my-3 alert-danger">Email already registered!</div>') ;
}

// Inserting into database
$insert_query = "INSERT into users(name,email,password,token) VALUES('$name','$email','$password','$token')";
if(mysqli_query($conn,$insert_query)) {
    echo '<div class="alert my-3 alert-success">Successfully registered!</div><meta http-equiv="refresh" content="1;url=index.php" />' ;

}

else {
    echo '<div class="alert my-3 alert-danger">Error:'.mysqli_error($conn).'</div>' ;
}





?>