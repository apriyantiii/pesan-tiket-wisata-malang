<?php include("koneksi.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Data Pengunjung</title>
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
    	<div class="text-primary" style="padding: 50px;">
            <center><h1><strong>Laporan Pengunjung</strong></h1></center>
        </div>
    </div>

    <div class="row">
    	<table class="table table-striped" border="1"; style="width: 75%; padding:50px; text-align: center; margin: auto;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal Pemesanan</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Asal Kota</th>
                <th>Tujuan Wisata</th>
                <th>No. HP</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        	<?php
            $sql = "SELECT * FROM tb_pengunjung";
            $query = mysqli_query($conn, $sql);

            while ($pengunjung = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>" . $pengunjung['id'] . "</td>";
                echo "<td>" . $pengunjung['tanggal'] . "</td>";
                echo "<td>" . $pengunjung['nama'] . "</td>";
                echo "<td>" . $pengunjung['email'] . "</td>";
                echo "<td>" . $pengunjung['askot'] . "</td>";
                echo "<td>" . $pengunjung['tujuan'] . "</td>";
                echo "<td>" . $pengunjung['nohp'] . "</td>";

                echo "<td>";
                echo "<a href='editdata.php?id=" . $pengunjung['id'] . "'>Edit</a> | ";
                echo "<a href='hapusdata.php?id=" . $pengunjung['id'] . "'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>
        </tbody>
    	</table>
    </div>

    <div class="row">    	
    	<center><div class="d-grid" style="padding: 30px;">
    		<div class="col-md-15 text-center">
                <a href="tambahdata.php"><button type="submit" name="create" class="btn btn-primary btn-create">Tambah Data</button></a>
                <br>
                <br>
                <a href="cetakexcel.php"><button type="submit" name="create" class="btn btn-primary btn-create">Cetak Excel</button></a>
             </div>
        </div></center>
    	
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