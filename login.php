<?php
include('dbconn.php');
session_start();
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username)){
        header('location:index.php?message=Username is Required');
    }elseif(empty($password)){
        header('location:index.php?message=Password is Required');
    }else{
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        
        $result = mysqli_query($dbconnection, $sql);

        if (mysqli_num_rows($result) > 0) {
            $_SESSION['username'] = $username;
            header('location:dashboard.php');   
        } else {
            header('location:index.php?message=Invalid Username or Password');
        }
    }
}
?>