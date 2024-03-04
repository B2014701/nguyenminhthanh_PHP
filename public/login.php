<?php
session_start();
define('TITLE', 'Login');
// include '../partials/header.php';
if(isset($_SESSION['user'])){
    if($_SESSION['user']=='me'){
        header("location:./admin.php");
    }
}

$loggedin = false;
$error_message = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['username']) && !empty($_POST['password'])) {

        if ((strtolower($_POST['username']) == 'minhthanh') && ($_POST['password'] == '123')) {
            $_SESSION['user'] = 'me';
            $loggedin = true;
            // echo $_SESSION['user'];
        } else {
            echo '  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <div class="text-center">
                            <strong>Bạn đã nhập sai tài khoản hoặc mật khẩu!</strong> Vui lòng nhập lại
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
        }
    } else {
        echo '  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <div class="text-center">
                            <strong>Vui lòng nhập đầy đủ tài khoản và mật khẩu</strong>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
    }
}

if ($error_message) {
    // include '../partials/error.php';
}
if ($loggedin) {
    echo '<p>Bạn đã đăng nhập!</p>';
    header("location:./admin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="icon" href="https://cdn4.iconfinder.com/data/icons/fitness-bodybuiding/100/sneakernike-1024.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="../css/main.css"> -->
</head>

<body>
    <section class="text-center">
        <div class="cart mb-3">
            <div class="row g-0 d-flex align-items-center">
                <div class="col-lg-6 container">
                    <div class="card-body py-5 px-md-5">
                        <div class="container">
                        <h2>CHÀO MỪNG BẠN ĐẾN VỚI MT STORE</h2> </br>
                        <h3>ĐĂNG NHẬP</h3>
                        </div>

                        <form action="login.php" method="post">
                            <div class="form-outline mb-4">
                                <input type="text" name="username" class="form-control" placeholder="Username">
                                <br>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="row mb-4">
                                <div class="col d-flex justify-content-center">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                                    </div>
                                </div>
        
                                <div class="col">
                                    <!-- Simple link -->
                                    <a href="#!">Forgot password?</a>
                                </div>
                            </div>
        
                            <input type="submit" name="submit" value="Login" class="btn btn-primary btn-block mb-4 col-5">
    
                            <a href="./index.php" class="text-light text-decoration-none"><button type="button" class="btn btn-primary btn-block col-5 mb-4">Back</button></a>
                            <div>
                                <h5>Hoặc Đăng Nhập</h5>
                                <div class="mt-4">
                                    <!-- Facebook -->
                                    <a href="https://www.facebook.com/" type="button" class="btn btn-floating btn-light btn-lg"><i class="bi bi-facebook"></i></a>
                                    <!-- youtube -->
                                    <a href="https://youtube.com" type="button" class="btn btn-floating btn-light btn-lg"><i class="bi bi-youtube"></i></a>
                                    <!-- instagram -->
                                    <a href="https://www.instagram.com" type="button" class="btn btn-floating btn-light btn-lg"><i class="bi bi-instagram"></i></a>
                                    <!-- google -->
                                    <a href="https://myaccount.google.com/" type="button" class="btn btn-floating btn-light btn-lg"><i class="bi bi-google"></i></a>
                                </div>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>