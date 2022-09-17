<?php
// includde adalah untuk menyambungkan file koneksi ke database
include 'koneksi.php';
// get adalah nama url yang ada di kolom pencarian
$id_pelanggan = $_GET['id_pelanggan'];

$sql = "DELETE FROM pelanggan WHERE id_pelanggan='$id_pelanggan'";
$query = mysqli_query ($connect, $sql);

if ($query){
    header('Location: tampilanpelanggan.php');
    }else{
    header('Location: hapus.php?status=gagal');
    }

?>