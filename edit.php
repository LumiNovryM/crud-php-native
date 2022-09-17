<?php
include 'koneksi.php';

if (isset($_POST ['simpan'])){
    $id_pelanggan = $_POST['id_pelanggan'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];

    $sql = "UPDATE pelanggan SET nama_pelanggan='$nama_pelanggan', alamat='$alamat', telepon='$telepon', email='$email' WHERE id_pelanggan ='$id_pelanggan'";

    $query = mysqli_query ($connect, $sql);
    if ($query){
        header('Location: tampilanpelanggan.php');
    }else{
        header('Location: edit.php?status=gagal');
    }

}
?>