<?php
include('dbconn.php');
session_start();
session_unset();
session_destroy();
header('location:index.php?message=You are Logged Out');   
?>