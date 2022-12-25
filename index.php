<!--
TITLE : RESPONSIVE NAVIGATION BAR - HTML CSS
MADE BY : FARAZ KHAN (WEB DESIGNER/DEVELOPER)
INSTAGRAM: @faraz_py
-->
<?php 
include("php/config.php") ;
if(isset($_COOKIE['login_token'])) { header("Location:dashboard.php"); }
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



    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6">
                <div class="me-lg-5">
                    <img src="https://cdni.iconscout.com/illustration/premium/thumb/login-enter-the-metaverse-world-5830875-4857593.png"
                        class="img-fluid d-block mx-auto" alt="">
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="card shadow-none login-page bg-white rounded border-0">
                    <div class="card-body shadow-none">
                        <h4 class="card-title text-dark text-center">Php Cookie Based Login <i class="fal fa-key"
                                aria-hidden="true"></i></h4>

                        <div id="response"></div>


                        <form class="login-form mt-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-user fea icon-sm icons">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                            <input type="email" class="form-control ps-5" id="email" placeholder="Email"
                                                name="email" required="">
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Password <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-key fea icon-sm icons">
                                                <path
                                                    d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4">
                                                </path>
                                            </svg>
                                            <input type="password" id="password" class="form-control ps-5"
                                                placeholder="Password" required="">
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-between">
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="remember">
                                                <label class="form-check-label" for="remember">Remember
                                                    me</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-12 mb-0">
                                    <div class="d-grid">
                                        <button type="button" id="submit" class="btn btn-primary">Sign in</button>
                                    </div>
                                </div>
                                <!--end col-->


                                <div class="col-12 text-center">
                                    <p class="mb-0 mt-3"><small class="text-dark me-2">Don't have an account ?</small>
                                        <a href="register.php" class="text-dark fw-bold">Register here</a>
                                    </p>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>
                    </div>
                </div>
                <!---->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>



    <script src="assets/main.js"></script>
</body>

</html>