<?php include("koneksi.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-
beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style-guestbook.css">
    <title>Cetak Tiket PDF</title>
</head>

<body>
    <!-- header untuk menampilkan judul cetak pdf -->
    <header>
        <h3 class="alert alert-secondary text-center">
            <p class="text-danger">Cetak PDF Tiket</p>
        </h3>
    </header>
    <!-- tabel untuk menampilkan tabel tiket yang diinput berdasarkan id inputan form -->
    <table class="table table-striped" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal Pengisian</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Asal Kota</th>
                <th>Tujuan</th>
                <th>No Hp</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>

            <!-- php untuk memanggil query dan menampilkan isi tavek tb_pengunjung berdasarkan id inputan form -->
            <?php
            $sql = "SELECT * FROM tb_pengunjung WHERE id=$id";
            $query = mysqli_query($conn, $sql);
            while ($data = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $id = $data['id'] . "</td>";
                echo "<td>" . $tanggal = $data['tanggal'] . "</td>";
                echo "<td>" . $nama = $data['nama'] . "</td>";
                echo "<td>" . $email = $data['email'] . "</td>";
                echo "<td>" . $askot = $data['askot'] . "</td>";
                echo "<td>" . $tujuan = $data['tujuan'] . "</td>";
                echo "<td>" . $nohp = $data['nohp'] . "</td>";
                echo "<td>" . $jumlah = $data['jumlah'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <!-- menampilkan jumlah tabel -->
    <p>Total : <?php echo mysqli_num_rows($query) ?></p>

    <!-- javascript untuk melakukan cetak pdf -->
    <script>
        window.print();
    </script>

    <!-- button untuk cetak pdf dan mengembalikan ke halaman home -->
    <a href="cetak-pdf.php"><button type="button" class="btn btn-primary">Cetak PDF</button></a>
    <a href="beranda.php"><button type="button" class="btn btn-primary">Back to Home</button></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-
beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-
pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html