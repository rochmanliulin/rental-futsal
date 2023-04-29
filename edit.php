<?php
// Koneksi
include('connection.php');

// id dari query string
$id = $_GET['id'];

// Menampilkan data user yang dipilih
$query = mysqli_query($connect, "SELECT * FROM booking WHERE id='$id' ");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkuyFutsaL</title>

    <!-- Bootstrap 5 & googlefont -->
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .navbar-brand {
            font-size: 2rem;
            font-weight: bold;
            color: #007bff;
        }

        .navbar {
            height: 80px;
        }

        .navbar-nav .nav-link {
            color: #007bff;
        }

        .navbar-nav .nav-link:hover {
            color: #0056b3;
            font-weight: bold;
        }

        .navbar-brand:hover {
            color: #0056b3;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light shadow" data-bs-theme="light">
            <div class="container-fluid mx-5">
                <!-- Logo -->
                <a class="navbar-brand" href="index.php">SkuyFutsaL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Navigasi -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://wa.me/6282359556972">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Tentang Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main>
        <div class="d-flex justify-content-center mt-5">
            <h2 class="text-primary fw-medium">Update Data</h2>
        </div>

        <div class="d-flex justify-content-center mt-5">
            <!-- Form Update Data -->
            <form action="update.php" method="post">
                <!-- Di hidden untuk mengirim data secara spesifik ke update.php -->
                <input type="hidden" name="id" value="<?php echo $result[0]['id']; ?>">

                <div class="d-flex flex-row justify-content-center column-gap-3">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pemesan" required value="<?php echo $result[0]['nama']; ?>">
                        <label for="nama" class="form-label">Nama Pemesan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="noTelepon" name="no_telepon" placeholder="No. Telepon" required value="<?php echo $result[0]['no_telepon']; ?>">
                        <label for="noTelepon" class="form-label">No. Telepon</label>
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-center column-gap-3">
                    <div class="mb-3 w-25">
                        <label for="tanggal" class="form-label">Tanggal Pesan</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required value="<?php echo $result[0]['tanggal']; ?>">
                    </div>
                    <div class="mb-3 w-25">
                        <label for="waktu" class="form-label">Jam</label>
                        <input type="time" class="form-control" id="waktu" name="waktu" required value="<?php echo $result[0]['waktu']; ?>">
                    </div>
                    <div class="mb-3 w-50">
                        <label for="durasi" class="form-label">Durasi Sewa</label>
                        <input type="number" class="form-control" id="durasi" name="durasi" placeholder="*hitungan jam" required value="<?php echo $result[0]['durasi']; ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="jumlahPemain" class="form-label">Jumlah Pemain</label>
                    <select class="form-select" name="jumlah_pemain" id="jumlahPemain">
                        <option value="10" <?php echo ($result[0]['jumlah_pemain'] == "10") ? 'selected' : ''; ?>>10 Orang</option>
                        <option value="20" <?php echo ($result[0]['jumlah_pemain'] == "20") ? 'selected' : ''; ?>>20 Orang</option>
                        <option value="30" <?php echo ($result[0]['jumlah_pemain'] == "30") ? 'selected' : ''; ?>>30 Orang</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="noLapangan" class="form-label">No. Lapangan</label>
                    <select class="form-select" name="no_lapangan" id="noLapangan">
                        <option value="1" <?php echo ($result[0]['no_lapangan'] == "1") ? 'selected' : ''; ?>>Lapangan 1</option>
                        <option value="2" <?php echo ($result[0]['no_lapangan'] == "2") ? 'selected' : ''; ?>>Lapangan 2</option>
                        <option value="3" <?php echo ($result[0]['no_lapangan'] == "3") ? 'selected' : ''; ?>>Lapangan 3</option>
                        <option value="4" <?php echo ($result[0]['no_lapangan'] == "4") ? 'selected' : ''; ?>>Lapangan 4</option>
                    </select>
                </div>
                <div class="d-flex flex-row justify-content-center gap-3">
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga Bayar</label>
                        <input type="number" class="form-control" id="harga" name="harga" readonly value="<?php echo $result[0]['harga']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="deposito" class="form-label">Deposito</label>
                        <input type="text" class="form-control" id="deposito" name="deposito" required value="<?php echo $result[0]['deposito']; ?>">
                    </div>
                </div>
                <div class="mb-5">
                    <label for="keterangan" class="form-label">Keterangan <span class="text-secondary">*optional</span></label>
                    <textarea class="form-control" name="keterangan" id="keterangan" cols="30" rows="3"><?php echo $result[0]['keterangan']; ?></textarea>
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-outline-primary col-2">Update</button>
                </div>
            </form>
        </div>
    </main>

    <!-- JS Bootstrap -->
    <script src="bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>

    <!-- Otomatisasi Harga Sewa -->
    <script>
        document.getElementById("durasi").addEventListener("change", updateHarga);
        document.getElementById("jumlahPemain").addEventListener("change", updateHarga);

        function updateHarga() {
            const durasi = document.getElementById("durasi").value;
            const jumlahPemain = document.getElementById("jumlahPemain").value;

            const hargaPerJam = 50000;
            let totalHarga = 0;

            if (jumlahPemain == 10) {
                totalHarga = hargaPerJam * durasi
            } else if (jumlahPemain == 20) {
                totalHarga = hargaPerJam * durasi * 2
            } else {
                totalHarga = hargaPerJam * durasi * 3
            }

            document.getElementById("harga").value = totalHarga;
        }
    </script>
</body>

</html>