<?php
include('dbconn.php');
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}
if(isset($_POST['update_employee_record'])){
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }   
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];

    if(empty($first_name)){
        header('location:update_employee.php?message=You Need to Fill the First Name');
    }elseif(empty($last_name)){
        header('location:update_employee.php?message=You Need to Fill the Last Name');
    }elseif(empty($age)){
        header('location:update_employee.php?message=You Need to Fill the Age');
    }else{
        $query = "UPDATE students SET first_name = '$first_name', last_name = '$last_name', age = '$age' WHERE id = '$id'";
        $query_run = mysqli_query($dbconnection, $query);
        if($query_run){
            header('location:dashboard.php?message=Employee Update Successfully');
        }else{
            header('location:dashboard.php?message=Employee Not Updated');
        }
    }
}