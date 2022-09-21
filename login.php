<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./Assets//CSS/login.css">
    <title>Welcome</title>
</head>

<body>
    <section class="">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-4">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p- p-md-3">
                            <h1 class="mb-4 pb-2 pb-md-0 mb-md-3">Login</h1>
                            <form method="POST" action="" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-outline">
                                            <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mt-2">
                                        <div class="form-outline">
                                            <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" />
                                            <p class="error" id="login_error"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 mt-2">
                                        <div class="form-outline">
                                            <input type="submit" name="login" class="btn btn-success" value="Login" />
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-2">
                                        <div class="form-outline">
                                            <input type="reset" class="btn btn-danger" value="Reset" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
<?php
include './App/function.php';
if (isset($_POST['login'])) {
    extract($_POST);
    $valid = 1;
    if (empty($email)) {
        validation_error('email_error', '* Please Enter Email');
        $valid = 0;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        validation_error('email_error', '* Please Enter Valid Email');
        $valid = 0;
    }
    if (empty($password)) {
        validation_error('password_error', '* Please Enter Password');
        $valid = 0;
    }
    if ($valid == 1) {
        $valid_data = login($email, $password);
        if ($valid_data->num_rows == 1) {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('location:index.php');
        } else {
            validation_error('login_error', '* Invalid Email or Password');
        }
    }
}
?>