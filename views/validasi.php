<?php
error_reporting(E_ALL ^ E_NOTICE);
include_once '../controllers/c_login.php';

if ($_SESSION['role'] == "admin") {
    echo "";
    // header("location:home_user.php);

} elseif ($_SESSION['role'] == "kasir") {
    echo "";
    // header("location:home_user.php);
} elseif ($_SESSION['role'] == "owner") {
    echo "";
} else {
    header("location: ../index.php");
}