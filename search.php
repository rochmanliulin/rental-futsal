<?php
// Koneksi database
include('connection.php');

// Mengambil nilai keyword dari method GET
$keyword = $_GET['keyword'];

// Searching
$query = mysqli_query($connect, "SELECT * FROM booking WHERE nama LIKE '%$keyword%' OR no_telepon LIKE '%$keyword%' OR tanggal LIKE '%$keyword%' OR waktu LIKE '%$keyword%' OR durasi LIKE '%$keyword%' OR jumlah_pemain LIKE '%$keyword%' OR no_lapangan LIKE '%$keyword%' OR harga LIKE '%$keyword%' OR deposito LIKE '%$keyword%' OR keterangan LIKE '%$keyword%' ");
// Mengubah ke array multidimensi
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


    <main class="d-flex justify-content-center mt-5">
        <div class="table-responsive col-10">

            <h2 class="text-primary fw-medium">Daftar Booking</h2>

            <div class="row mt-5">
                <div class="col-2 text-center">
                    <!-- Fitur Retrieve/Tambah Data -->
                    <a href="add.php"><button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahDataModal">Tambah Data</button></a>
                </div>
                <div class="col">
                    <!-- Fitur Reset Data -->
                    <a href="reset.php" onclick="return confirm('Apakah kamu yakin akan mereset data ?');"><button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#tambahDataModal">Reset Data</button></a>
                </div>
                <div class="col-3">
                    <!-- Fitur Search -->
                    <form class="input-group align-items-bottom" role="search" action="search.php" method="get">
                        <input class="form-control" type="search" name="keyword" placeholder="Cari..." aria-label="Search" value="<?php echo $_GET['keyword'] ?>">
                        <button class="btn btn-dark" type="submit">Cari</button>
                    </form>
                </div>
            </div>

            <!-- Data -->
            <table class="table mt-3 table-striped table-hover">
                <thead class="text-primary shadow-sm text-center">
                    <tr>
                        <th scope="col" class="px-4 py-3">No.</th>
                        <th scope="col" class="px-4 py-3">Nama Pemesan</th>
                        <th scope="col" class="px-4 py-3">No. Telepon</th>
                        <th scope="col" class="px-4 py-3">Tanggal Pesan</th>
                        <th scope="col" class="px-4 py-3">Waktu</th>
                        <th scope="col" class="px-4 py-3">Durasi Sewa</th>
                        <th scope="col" class="px-4 py-3">Jumlah Pemain</th>
                        <th scope="col" class="px-4 py-3">Nomor Lapangan</th>
                        <th scope="col" class="px-4 py-3">Harga Sewa</th>
                        <th scope="col" class="px-4 py-3">Deposito</th>
                        <th scope="col" class="px-4 py-3">Keterangan</th>
                        <th scope="col" class="px-4 py-3">Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Menampilkan data dari database yang diubah ke array multidimensi -->
                    <?php foreach ($result as $key => $value) : ?>
                        <tr>
                            <td class="px-4"><?php echo $key + 1; ?></td>
                            <td class="px-4"><?php echo $value['nama']; ?></td>
                            <td class="px-4"><?php echo $value['no_telepon']; ?></td>
                            <td class="px-4"><?php echo $value['tanggal']; ?></td>
                            <td class="px-4"><?php echo $value['waktu']; ?></td>
                            <td class="px-4"><?php echo $value['durasi']; ?></td>
                            <td class="px-4"><?php echo $value['jumlah_pemain']; ?></td>
                            <td class="px-4"><?php echo $value['no_lapangan']; ?></td>
                            <td class="px-4"><?php echo $value['harga']; ?></td>
                            <td class="px-4"><?php echo $value['deposito']; ?></td>
                            <td class="px-4 col-2"><?php echo $value['keterangan']; ?></td>
                            <td class="px-4 col-2 text-center">
                                <a href="edit.php?id=<?php echo $value['id'] ?>"><button type="button" class="btn btn-success">Edit</button></a>
                                <a href="delete.php?id=<?php echo $value['id'] ?>" onclick="return confirm('Apakah kamu ingin menghapusnya ?');"><button type="button" class="btn btn-danger">Hapus</button></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </main>


    <!-- JS Bootstrap -->
    <script src="bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>