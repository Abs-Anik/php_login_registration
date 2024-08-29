<?php

define("HOSTNAME",'localhost');
define("USERNAME",'root');
define("PASSWORD",'');
define("DBNAME",'crud_app');

$dbconnection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME);

if(!$dbconnection){
    die("Connection failed: " . mysqli_connect_error());
}
