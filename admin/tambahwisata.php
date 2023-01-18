<?php include("koneksi.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Tambah Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
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
                    <a href="berandaadmin.php"><button type="button" class="btn btn-primary">Home</button></a>
                    <a href="grafikkunjungan.php"><button type="button" class="btn btn-primary">Grafik Kunjungan</button></a>
                    <a href="laporanpengunjung.php"><button type="button" class="btn btn-primary">Laporan Pengunjung</button></a>
                    <a href="daftarwisata.php"><button type="button" class="btn btn-primary">Daftar Wisata</button></a>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>

    <div class="row" style="padding: 80px;">
        <div class="col-md-7 text-primary" style="padding: 150px; margin-right: -50px; margin-left: -50px;">
            <h1>Isi form berikut untuk menambahkan</h1>
            <h1><strong>Data Tempat Wisata</strong></h1>
        </div>
        <div class="col-md-5" style="margin: auto;">
            <div class="d-grid">
                <div class="col-md-10 mx-4 text-right">
                    <form method="POST" action="" class="" enctype="multipart/form-data" style="float: center;">
                        <div class="card border-info mb-3" style="width: 27rem;">
                            <div class="card-body bg-light">
                                <div class="form-group">
                                    <div class="col-md-25">
                                        <center><h1>Tambah Tempat Wisata</h1></center>
                                    </div>
                                </div><br>                               
                                <div class="form-group">
                                    <div class="col-md-55">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Tempat Wisata">
                                    </div><br>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-55">
                                        <label>Kategori</label>
                                        <select type="text" name="kategori" class="form-control" placeholder="Masukkan Nama Tempat Wisata">
                                            <option></option>
                                            <option>Pantai</option>
                                            <option>Gunung</option>
                                            <option>Air Terjun</option>
                                            <option>Theme Park</option>
                                        </select>
                                    </div>
                                </div><br>

                                <div class="form-group">
                                    <div class="col-md-55">
                                        <label>Alamat</label>
                                        <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Tempat Wisata">
                                    </div><br>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-55">
                                        <label>Foto</label>
                                        <input type="file" value="Pilih Foto Tempat Wisata" name="foto" class="form-control" enctype="multipart/form-data" required="" placeholder="Masukkan Foto Tempat Wisata">
                                    </div><br>
                                </div>

                                <div class="d-grid">
                                    <center><div class="col-md-10 text-left">
                                        <button type="submit" name="submit" class="btn btn-primary btn-create">Tambah Data</button></a>
                                    </div></center>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Copyright -->
        <div class="text-center p-4 text-light bg-primary" style="background-color: rgba(0, 0, 0, 0.05);">
            <p>© 2022 Copyright: <strong>yantee & rhizma</strong></p>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
<?php
        $nama = $_POST['nama'];
        $kategori = $_POST['kategori'];
        $alamat = $_POST['alamat'];
        $foto = $_FILES['foto']['name'];
        $file_tmp = $_FILES['foto']['tmp_name'];
        move_uploaded_file($file_tmp,'file'.$foto);
        $query = "INSERT INTO tb_wisata SET nama='$nama', kategori='$kategori', alamat='$alamat', foto='$foto'";
        mysqli_query($conn, $query)
        or die ("SQL ERROR ".mysqli_error());

?>