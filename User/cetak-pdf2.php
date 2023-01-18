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
            <br><br><br>
            <div class="card" style="background: #1D3283; width: 60rem; margin-left: 200px;">
                <div class="col text-center text-light">
                    <div class="card-body">
                        <h4 class="card-title">Tiket Wisata Malang</h4>
                        <p class="card-text"><?= $id; ?></p>
                    </div>
                </div>
                <div class="col text-left text-light">
                    <div class="row">
                        <div class="col">
                            <div class="card-body">
                                <p class="card-title">Tanggal Kunjungan</p>
                                <strong><?= $tanggal; ?></strong>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col text-left text-light">
                    <div class="row">
                        <div class="col">
                            <div class="card-body">
                                <p class="card-title">Atas Nama</p>
                                <strong><?= $nama; ?></strong>
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
                                <strong><?= $tujuan; ?></strong>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card-body">
                                <p class="card-title"></p>
                                <strong></strong>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col text-left text-light">
                    <div class="row">
                        <div class="col">
                            <div class="card-body">
                                <p class="card-title">Email</p>
                                <strong><?= $email; ?></strong>
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
                                <strong><?= $jumlah; ?></strong>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card-body">
                                <p class="card-title"></p>
                                <strong></strong>
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
    <!-- Javascript untuk mencetak detail wisata -->
    <script>
        window.print();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>