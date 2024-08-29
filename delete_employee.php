<?php
include('dbconn.php');
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Before deleting, show a confirmation alert
    echo "<script>
    var confirmDelete = confirm('Are you sure you want to delete this employee?');
    if(confirmDelete) {
        window.location.href = 'delete_employee.php?confirm=true&id=$id';
    } else {
        window.location.href = 'index.php';
    }
    </script>";
}

// Proceed with deletion only if confirmation is true
if (isset($_GET['confirm']) && $_GET['confirm'] == 'true') {
    $id = $_GET['id'];
    $query = "DELETE FROM students WHERE id = '$id'";
    $query_run = mysqli_query($dbconnection, $query);

    if ($query_run) {
        header('Location: dashboard.php?message=Employee Deleted Successfully');
        exit();
    } else {
        header('Location: dashboard.php?message=Error Deleting Employee');
        exit();
    }
}
?>
