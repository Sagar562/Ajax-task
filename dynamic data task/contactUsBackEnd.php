<?php

include 'dbConnect.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $first_name = $_POST['fname'];
        $last_name = $_POST['lname'];
        $email = $_POST['email'];
        $phone_number = $_POST['number'];

         // prepare
        $prepare_stmt = mysqli_prepare($connect, "INSERT INTO `ContacUs`(first_name, last_name, email, phone_number) VALUES (?,?,?,?)");

        mysqli_stmt_bind_param($prepare_stmt, "ssss",$first_name, $last_name, $email, $phone_number);

        if (mysqli_stmt_execute($prepare_stmt))
        {
            echo "Data inserted success fully";
        }
        else
        {
            echo "error while inserting data" . mysqli_error($connect);
        }
    }
?>