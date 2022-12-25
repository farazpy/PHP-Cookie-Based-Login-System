<?php 
include("php/config.php") ;
$login_token = $_COOKIE['login_token'] ;
$get_user_sql = mysqli_query($conn,"SELECT * from users WHERE token='$login_token'") ;
if(mysqli_num_rows($get_user_sql)>0) {
    $user = mysqli_fetch_array($get_user_sql) ;
}
else {
    die("You're not authenticated!") ;
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width">
    <title>Cookie Based Login System</title>

    <link rel="stylesheet" href="https://lib.instander.in/frontend/land/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://i.instander.in/css/style.css">
    <script src="https://i.instander.in/js/jquery-3.6.0.min.js"></script>
    <script src="https://i.instander.in/instander/js/fontawesome_6.js"></script>
</head>

<body>

    <div class="card m-4 mt-5 rounded bg-light overflow-hidden border-0 m-2">
        <div class="row align-items-center g-0">
            <div class="col-md-5">
                <img src="https://i.pinimg.com/564x/49/60/32/496032fb38b76e5bc22f8eb1d4a5d9be.jpg"
                    class="img-fluid bg-white" alt="">
            </div>
            <!--end col-->

            <div class="col-md-7">
                <div class="card-body client-testi">
                    <h6 class="text-primary fw-bold"><?php echo $user['name'] ?>
                        <small class="text-muted mt-3 d-block"><?php echo $user['about'] ?></small>
                    </h6>
                    <button onclick="javascript:location.href='logout.php'"
                        class="btn btn-sm mt-3 btn-danger">LOGOUT</button>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>


</body>

</html>