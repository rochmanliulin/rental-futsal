<?php

include('connection.php');

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

$insert = mysqli_query($connect, "INSERT INTO booking SET nama='$nama', no_telepon='$no_telepon', tanggal='$tanggal', waktu='$waktu', durasi='$durasi', jumlah_pemain='$jumlah_pemain', no_lapangan='$no_lapangan', harga='$harga', deposito='$deposito', keterangan='$keterangan' ");


if ($insert) {
    header('Location: index.php');
} else {
    echo "Data gagal ditambahkan...";
}

?>