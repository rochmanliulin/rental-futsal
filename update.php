<?php
// Koneksi
include('connection.php');

// Mengambil data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$no_telepon = $_POST['no_telepon'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$durasi = $_POST['durasi'];
$jumlah_pemain = $_POST['jumlah_pemain'];
$no_lapangan = $_POST['no_lapangan'];
$harga = $_POST['harga'];
$deposito = $_POST['deposito'];
$keterangan = $_POST['keterangan'];

// Update semua data dari form ke database
$update = mysqli_query($connect, "UPDATE booking SET nama='$nama', no_telepon='$no_telepon', tanggal='$tanggal', waktu='$waktu', durasi='$durasi', jumlah_pemain='$jumlah_pemain', no_lapangan='$no_lapangan', harga='$harga', deposito='$deposito', keterangan='$keterangan' WHERE id='$id' ");

// Event Handler
if ($update) {
    echo "<script>alert('Data telah terupdate!'); window.location.replace('index.php');</script>";
} else {
    echo "Gagal update data...";
}

?>