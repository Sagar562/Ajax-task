<?php

$localhost = 'localhost';
$user = 'sagar';
$password  = '123456';
$dbName = 'Dynamic_Data';

// connect to database
$connect = mysqli_connect($localhost, $user, $password, $dbName);

    if (!$connect)
    {
        echo "Database not connected";
    }


?>