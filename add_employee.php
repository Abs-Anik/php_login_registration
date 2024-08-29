<?php
include('dbconn.php');
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}

if(isset($_POST['add_employee_record'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];

    if(empty($first_name)){
        header('location:dashboard.php?message=You Need to Fill the First Name');
    }elseif(empty($last_name)){
        header('location:dashboard.php?message=You Need to Fill the Last Name');
    }elseif(empty($age)){
        header('location:dashboard.php?message=You Need to Fill the Age');
    }else{
        $query = "INSERT INTO students (first_name, last_name, age) VALUES ('$first_name', '$last_name', '$age')";
        $query_run = mysqli_query($dbconnection, $query);
        if($query_run){
            header('location:dashboard.php?message=Employee Added Successfully');
        }else{
            header('location:dashboard.php?message=Employee Not Added');
        }
    }
}




