<?php
    session_start();

    $host ='localhost';
    $user = 'root';
    $pass = '';
    $db   = 'db_rumahsakit';

    $koneksi = mysqli_connect($host, $user, $pass, $db) or die ("gagal menghubungkan ke database");


?>