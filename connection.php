<?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $db_name = 'servisno_data_mitra';

    $conn = mysqli_connect($server,$user,$pass,$db_name);
    
    if(!$conn)
    {
        echo "Koneksi Database Gagal" . mysqli_connect_error();
    }
?>

