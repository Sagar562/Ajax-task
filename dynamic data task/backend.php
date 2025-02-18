<?php

include 'dbConnect.php';

    $get_Data = 'select first_name, last_name, email, address from `Form` limit 1';
    $res = mysqli_query($connect, $get_Data);

    if (mysqli_num_rows($res) == 0)
    {
        echo "No data found";
    }
    
    $data = mysqli_fetch_assoc($res);

    echo json_encode($data);

    // mysqli_close($connect);  

?>