<?php
include 'App/function.php';
include 'Config/connection.php';
session_start();

if (!$_SESSION['email'] and  !$_SESSION['password']) {
    session_unset();
    session_destroy();
    header('location:login.php');
}
if ($_SESSION['email'] and  $_SESSION['password']) {
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $cmd = "SELECT * FROM employee WHERE email='$email' and password='$password'";
    $result = mysqli_query($con, $cmd) or die(mysqli_error($con));
    $data = mysqli_fetch_array($result);

    // if ($data['is_admin'] == 0) {
    //     // echo "Welcome User";
    // }
    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header('location:login.php');
    }


?>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Welcome</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                <div class="navbar-brand">Welcome <?php echo $data['name']; ?></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                       
                    </ul>
                    <form method="POST" class="d-flex">
                        <input type="submit" class="btn btn-danger" value="Logout" name="logout" />
                    </form>
                </div>
            </div>
        </nav>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    </body>

    </html>

<?php
}

if ($data['is_admin'] == 1) {
    $_SESSION['is_admin'] = 1;
    include 'Employees/display.php';
}
if ($data['is_admin'] == 0) {
    $_SESSION['is_admin'] = 0;
    include 'Employees/edit.php';
    $id = $data['id'];
    edit($id);
   
}
?>