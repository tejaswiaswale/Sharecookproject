<?php

    $servername="localhost";
    $username="root";  
    $password=""; 
    $dbname="sharecook_db";

    $conn=new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error)
    {
        die("connection failed");
    }
    
?>