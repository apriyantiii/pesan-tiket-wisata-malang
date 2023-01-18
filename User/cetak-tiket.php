<?php include("koneksi.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cetak Tiket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
    <?php
    $tanggal = "";
    ?>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h1>Heal.ing</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a href="beranda.php"><button type="button" class="btn btn-primary">Home</button></a>
                    <a href="informasiWisata.php"><button type="button" class="btn btn-primary">Informasi Wisata</button></a>
                    <a href="panduan.php"><button type="button" class="btn btn-primary">Panduan</button></a>
                    <a href="feedback.php"><button type="button" class="btn btn-primary">Feedback</button></a>
                    <a href="formPemesanan.php"><button type="button" class="btn btn-primary">Pemesanan Tiket</button></a>
                </div>
            </div>
        </div>
    </nav>
    <br><br><br>

    <!-- Membuat button cetak tiket dan batalkan tiket -->
    <div class="container" style="padding-left: 400px; ">
        <br><br>
        <a href="cetak-pdf2.php"><button type="button" class="btn text-light" style="margin-right: 50px; padding-right: 50px; background: #404A71;"><strong>Cetak Pembelian Tiket</strong></button></a>
        <a href="logout.php"><button type="button" class="btn btn-danger" style="margin-left: 50px; padding-right: 50px;"><strong> Batalkan Pembelian</strong></button></a><br><br>
    </div>

    <!-- php untuk menampilkan data dari form -->
    <?php
    $query = mysqli_query($conn, "select * from tb_pengunjung");
    while ($data = mysqli_fetch_array($query)) {
        $id = $data['id'];
        $tanggal = $data['tanggal'];
        $nama = $data['nama'];
        $email = $data['email'];
        $askot = $data['askot'];
        $tujuan = $data['tujuan'];
        $nohp = $data['nohp'];
        $jumlah = $data['jumlah'];
    }
    ?>
    <!-- Bagian untuk menampilkan detail tiket -->
    <div class="container">
        <div class="row">
            <div class="card" style="background: #1D3283; width: 60rem; margin-left: 200px;">
                <div class="col text-center text-light">
                    <div class="card-body">
                        <h4 class="card-title">Tiket Wisata Malang</h4>
                        <p class="card-text"><?= $id; ?></p><!-- memanggil data id pada database phpmyadmin -->
                    </div>
                </div>
                <div class="col text-left text-light">
                    <div class="row">
                        <div class="col">
                            <div class="card-body">
                                <p class="card-title">Tanggal Kunjungan</p>
                                <strong><?= $tanggal; ?></strong> <!-- memanggil data tanggal pada database phpmyadmin -->
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col text-left text-light">
                    <div class="row">
                        <div class="col">
                            <div class="card-body">
                                <p class="card-title">Atas Nama</p>
                                <strong><?= $nama; ?></strong> <!-- memanggil data nama pada database phpmyadmin -->
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <p class="card-title"></p>
                                <strong></strong>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <p class="card-title">Tujuan Wisata</p>
                                <strong><?= $tujuan; ?></strong><!-- memanggil data tujuann pada database phpmyadmin -->
                            </div>
                        </div>

                        <div class="col">
                            <div class="card-body">
                                <p class="card-title"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col text-left text-light">
                    <div class="row">
                        <div class="col">
                            <div class="card-body">
                                <p class="card-title">Email</p>
                                <strong><?= $email; ?></strong> <!-- memanggil data email pada database phpmyadmin -->
                            </div>
                        </div>

                        <div class="col">
                            <div class="card-body">
                                <p class="card-title"></p>
                                <strong></strong>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card-body">
                                <p class="card-title">Jumlah Pengunjung</p>
                                <strong><?= $jumlah; ?></strong> <!-- memanggil data tanggal pada database phpmyadmin -->
                            </div>
                        </div>

                        <div class="col">
                            <div class="card-body">
                                <p class="card-title"></p>
                                <img src="image/barcode.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col text-center text-light">
                    <div class="card-body">
                        <p class="card-title">Datang sesuai tanggal pada tiket!</p>
                        <h6><strong>Harap simpan tiket ini untuk di scan di lokasi wisata</strong></h6>
                        <hr style="color: #FFFFFF;">
                        <h5><strong>TOTAL HARGA : </strong></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>