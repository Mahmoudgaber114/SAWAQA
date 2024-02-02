<?php

session_start();
include 'connection.php';

if (isset($_POST['isLogin'])) {
    $userType=$_POST['userType'];
    $email = $_POST['email'];
    $password  = $_POST['password'];

    $que = "SELECT * FROM $userType WHERE email = '$email' AND Password = '$password'";
    $res = mysqli_query($con, $que);

    if (mysqli_num_rows($res) > 0) {

        $_SESSION['isLogin'] = true;
        $row = mysqli_fetch_assoc($res);
        $_SESSION['email'] = $row["email"];
        $_SESSION['id']=$row['id'];
        $_SESSION['userType']=$userType;

        header('location:profile.php');
    } else {
        header('location: index.php');
    }
}




?>