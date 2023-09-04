<?php

    $host = "localhost";
    $user = "root";
    $pass =  "";
    $db = "brainiacs POS";

    $conn =  mysqli_connect($host, $user,$pass, $db,3308);

    if (!$conn) {
       echo "Connectin fail";
    }
    // else{
    //     echo "pass";
    // }
?>