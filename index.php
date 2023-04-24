<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkuyFutsaL</title>

    <link rel="stylesheet" href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .navbar-brand {
            font-size: 2rem;
            font-weight: bold;
        }

        .navbar {
            height: 80px;
        }
    </style>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow" data-bs-theme="dark">
            <div class="container-fluid mx-5">
                <a class="navbar-brand" href="#">SkuyFutsaL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Tentang</a>
                        </li>
                    </ul>
                    <!-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                </div>
            </div>
        </nav>
    </header>

    <main class="d-flex justify-content-center">
        <form class="w-50 mt-5" action="insert.php" method="post">
            <div class="d-flex flex-row justify-content-center column-gap-3">
                <div class="form-floating mb-3 w-50">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pemesan">
                    <label for="nama" class="form-label">Nama Pemesan</label>
                </div>
                <div class="form-floating mb-3 w-50">
                    <input type="text" class="form-control" id="noTelepon" name="no_telepon" placeholder="No. Telepon">
                    <label for="noTelepon" class="form-label">No. Telepon</label>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-center column-gap-3">
                <div class="mb-3 w-50">
                    <label for="tanggal" class="form-label">Tanggal Pesan</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal">
                </div>
                <div class="mb-3 w-50">
                    <label for="waktu" class="form-label">Jam</label>
                    <input type="time" class="form-control" id="waktu" name="waktu">
                </div>
                <div class="mb-3 w-100">
                    <label for="durasi" class="form-label">Durasi Sewa</label>
                    <input type="number" class="form-control" id="durasi" name="durasi" placeholder="*hitungan jam">
                </div>
            </div>
            <div class="mb-3">
                <label for="jumlahPemain" class="form-label">Jumlah Pemain</label>
                <input type="number" class="form-control" id="jumlahPemain" name="jumlah_pemain">
            </div>
            <div class="mb-3">
                <label for="noLapangan" class="form-label">No. Lapangan</label>
                <input type="number" class="form-control" id="noLapangan" name="no_lapangan">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga Bayar</label>
                <input type="number" class="form-control" id="harga" name="harga">
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="deposito" name="deposito" placeholder="Deposito">
                <label for="deposito" class="form-label">Deposito</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan">
                <label for="keterangan" class="form-label">Keterangan <span class="text-secondary">*optional</span></label>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>

    <script src="bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>