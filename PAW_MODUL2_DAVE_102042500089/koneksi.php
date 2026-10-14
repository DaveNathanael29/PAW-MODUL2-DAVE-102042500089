<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "paw_modul2_showroom";
    $port = 3307;

    $conn = new mysqli($host, $username, $password, $database, $port);
    if ($conn -> connect_error){
        die ("Koneksi Kedatabase Gagal!!" .$conn -> connect_error);
    }
    

    $conn -> set_charset("utf8mb4")

    
?>