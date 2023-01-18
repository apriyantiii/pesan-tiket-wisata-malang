<?php
include('koneksi.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Grafik Kunjungan</title>
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

    <div class="row">
        <div class="text-primary" style="text-align:  center;padding: 50px; margin: auto;">
            <h1><strong>Grafik Kunjungan</strong></h1>
        </div>
    </div>

    <div class="row">
        <table class="table table-striped" border="1"; style="width: 35%; padding:50px; text-align: center; margin: auto; margin-bottom: 30px; margin-top: -30px;">
        <thead>
            <tr>
                <th>Tujuan Wisata</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM tb_pesanan";
            $query = mysqli_query($conn, $sql);

            while ($pengunjung = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>" . $pengunjung['nama'] . "</td>";
                echo "<td>" . $pengunjung['jumlah'] . "</td>";
            }
            ?>
        </tbody>
        </table>
    </div>

    <div class="row">
        <div class="d-grid">
            <div class="col-md-15 text-center">
                <a><strong>Lihat Sebagai :</strong></a>
                <br>
                <br>
                <a href="barchart.php"><button type="submit" name="create" class="btn btn-primary btn-create">Bar Chart</button></a>
                <a href="linechart.php"><button  type="submit" name="create" class="btn btn-primary btn-create">Line Chart</button></a>
                <a href="piechart.php"><button type="submit" name="create" class="btn btn-primary btn-create">Pie Chart</button></a>
                <br>
                <br>
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