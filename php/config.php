<?php
    //connecting the database
    $username= "root";
    $password = "";
    $database ="jbycakes";
    $server= "localhost";

    $dbcon=mysqli_connect($server, $username, $password, $database);

    // if($dbcon){
    //     echo"connected";
    // }else{
    //     echo"not connected";
    // }
