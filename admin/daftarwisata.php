<?php include("koneksi.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informasi Wisata</title>
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
    <br><br><br>


    <div class="row">
        <div class="col" style=" width: 100%;background-color: lightgrey; ">
            <center><div class="card" style=" width: 80%; padding: 100px;border-radius: 40px; margin: 50px;">
                <div class="text-primary" style="margin-top: -60px; margin-bottom: 20px;">
                    <h1><strong>Daftar Wisata</strong></h1>
                </div>
                <table class="table table-striped" border="0"; style="width: 100%; padding:0px; text-align: center; margin: auto;">
                    <thead>
                        <tr>
                            <th>Nama Tempat Wisata</th>
                            <th>Kategori</th>
                            <th>Alamat</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM tb_wisata";
                        $query = mysqli_query($conn, $sql);
                        while ($wisata = mysqli_fetch_array($query)) {
                        ?>
                            <tr>

                            <td> <?php echo $wisata['nama'] ?> </td>
                            <td> <?php echo $wisata['kategori'] ?> </td>
                            <td> <?php echo $wisata['alamat']?> </td>
                            <td> <img src="<?php echo "file/".$wisata['foto'];?>"></td>

                            <td>
                            <a href='editwisata.php?id=" . $wisata['id'] . "'>Edit</a> | 
                            <a href='hapuswisata.php?id=" . $wisata['id'] . "'>Hapus</a>
                            </td>

                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row" >
        <div class="col" shadow-sm style=" width: 100%;background-color: lightgrey; ">
            <center><div class="card" style=" width: 80%; padding: 100px;border-radius: 40px; margin: 50px; margin-top: -20px;">
                <div class="text-primary text" style="text-align: center;">
                    <center><h1>Klik tombol di bawah untuk menambahkan</h1>
                    <h1><strong>Tempat Wisata</strong></h1></center>
                </div>
                <div class="d-grid" >
                     <div class="col-md-15 text-center">
                        <br>
                        <a href="tambahwisata.php"><button type="submit" name="submit" class="btn btn-primary btn-create">Tambah Data</button></a>
                     </div>
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