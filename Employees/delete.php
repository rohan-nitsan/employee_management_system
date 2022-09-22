<?php
if (empty($_SESSION)) {
    session_start();
    if ($_SESSION['is_admin'] != 1) {
        header('location:../login.php');
    }
}

if (!empty($_SESSION)) {
include '../App/function.php';
$id = $_GET['id'];
delete($id);
}
?>