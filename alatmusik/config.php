<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db_name = "praktikum_b2";

    $conn = mysqli_connect($server, $user, $password, $db_name);

    if (!$conn){
        die("Gagal terhubung ke database : " . mysqli_connect_error());
    }
?>