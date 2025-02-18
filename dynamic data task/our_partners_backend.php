<?php

// include 'dbConnect.php';

$conn=mysqli_connect("localhost","sagar","123456","Dynamic_Data");

    $get_Data = "SELECT * FROM `AboutUs`";
    
    $res = mysqli_query($conn, $get_Data);

    if (mysqli_num_rows($res) == 0)
    {
        echo "No data found";
    }
    else
    {
        $companies = [];
        while ($data = mysqli_fetch_assoc($res))
        {
            $companies[] = $data;
        }
        echo json_encode($companies);
    }
   

?>