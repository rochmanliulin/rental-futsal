<?php
// Koneksi
include('connection.php');

// Reset semua data
$reset = mysqli_query($connect, "DELETE FROM booking");

// Event Handler
if ($reset) {
    echo "<script>alert('Semua data telah direset!'); window.location.replace('index.php');</script>";
} else {
    echo "Data gagal direset...";
}

?>