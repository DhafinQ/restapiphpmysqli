<?php

    $hostname = "localhost";
    $database_name = "test";
    $username = "root";
    $password = "";

    $mysqli = new mysqli($hostname,$username,$password,$database_name);


    if(!$mysqli){
        die("Koneksi Error". mysqli_connect_error());
    }

?>