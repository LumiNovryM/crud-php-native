<?php
include 'koneksi.php';

if (isset($_POST['simpan'])){
    $id_pelanggan = $_POST['id_pelanggan']; 
    $nama_pelanggan = $_POST['nama_pelanggan']; 
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon']; 
    $email = $_POST['email'];

    $sql = "INSERT INTO pelanggan (id_pelanggan, nama_pelanggan, alamat, telepon, email) VALUES('$id_pelanggan', '$nama_pelanggan', '$alamat', '$telepon', '$email')";

    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: tampilanpelanggan.php');
    }else {
        header('Location: simpan.php?status=gagal'); 
    }
}
?>