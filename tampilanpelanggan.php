<?php
    include 'koneksi.php' // Include berfungsi untuk menambahkan baris kode pada file tertentu kedalam file yang di inginkan
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
</head>
<body>
    
    <h3>Data Pelanggan</h3>
    <h4><a href="pelanggan.html">[+] Tambah Baru</a></h4>

    <table border="1">
        <tr>
            <th>Id Pelanggan</th>
            <th>Nama Pelanggan</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <?php
            
            $sql = "SELECT * FROM pelanggan"; // Variabel $sql dibuat untuk menampung perintah sql 
            $query = mysqli_query($connect,$sql); // Variabel $query dibuat untuk menampung function yang berguna untuk menjalankan perintah atau instruksi query ke database mysql;
            while($pel = mysqli_fetch_array($query)) {
                echo"
                <tr>
                <td>$pel[id_pelanggan]</td>
                <td>$pel[nama_pelanggan]</td>
                <td>$pel[alamat]</td>
                <td>$pel[telepon]</td>
                <td>$pel[email]</td>
                <td>
                    <a href='form-edit.php?id_pelanggan=".$pel['id_pelanggan']."'>Edit</a>
                    <a href='hapus.php?id_pelanggan=".$pel['id_pelanggan']."'>Hapus</a>
                </td>
                </tr>";
            };

            ?>
        </tr>
    </table>

</body>
</html>