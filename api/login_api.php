<?php

session_start();
include "../config/db.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM log_in WHERE username='$username' AND password='$password'";

$result = mysqli_query($conn, $query);

if(!$result){
    die("Query Failed: " . mysqli_error($conn));
}

if(mysqli_num_rows($result) == 1){

    $_SESSION['admin_logged_in'] = true;

    header("Location: ../admin/dashboard.php");
    exit();

}else{

    header("Location: ../admin/login.php?error=1");
    exit();
}