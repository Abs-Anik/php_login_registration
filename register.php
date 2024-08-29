<?php
include('dbconn.php');
if(isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if(empty($username)){
        header('location:registration.php?message=Username is Required');
    }elseif(empty($email)){
        header('location:registration.php?message=Email is Required');
    }elseif(empty($password)){
        header('location:registration.php?message=Password is Required');
    }elseif(empty($confirm_password)){
        header('location:registration.php?message=Confirm Password is Required');
    }elseif($password != $confirm_password){
        header('location:registration.php?message=Password and Confirm Password does not match');
    }else{
        /**
         * insert data into users table
         */
        $sql = "INSERT INTO users (username, email, password, confirm_password) VALUES ('$username', '$email', '$password', '$confirm_password')";
        $result = mysqli_query($dbconnection, $sql);
        if($result){
            header('location:index.php?message=Registration Successful');
        }else{
            header('location:registration.php?message=Registration Failed');
        }   
    }
}
?>