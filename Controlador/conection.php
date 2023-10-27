<?php
    $con  = mysqli_connect('localhost','root','','tablered_bd');
    if(mysqli_connect_errno())
    {
        echo 'Database Connection Error';
    }
        mysqli_set_charset($con, "utf8mb4");
?>