<?php
include 'App/function.php';
include 'Config/connection.php';
session_start();
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if ($email and $password) {
    $cmd = "SELECT * FROM employee WHERE email='$email' and password='$password'";
    $result = mysqli_query($con, $cmd) or die(mysqli_error($con));
    $data = mysqli_fetch_array($result);
    if ($data['is_admin'] == 1) {
        echo "Welcome Admin";
    }
    if ($data['is_admin'] == 0) {
        echo "Welcome User";
    }
    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header('location:login.php');
    }
}

?>
<form method="POST">
    <input type="submit" value="Logout" name="logout" />
</form>
<?php ?>