<?php

    $host = "localhost"; // Host adalah nama dari web server di local
    $user = "root"; // Root adalah nama default dari user pada database kita(Root sendiri adalah superuser yang memiliki hak tertinggi mengubah,mengatur dan lain lain)
    $password = ""; // Password adalah kunci kata sandi dari database yang kita kelola
    $database = "penjualan"; // Penjualan adalah nama dari database yang kita miliki
    $connect = mysqli_connect($host,$user,$password,$database) or die ("Gagal Menghubungkan"); // Pada variabel $connect terdapat function mysqli_connect yang berfungsi sebagai argumen yang nanti akan dijalankan agar terkoneksi ke server mysql atau database

?>