<?php
    include "koneksi.php";

    // kalau tidak ada id di query string
    if (!isset($_GET['id'])) {
        header('Location: datapengunjung.php');
    }

    //ambil id dari query string 
    $id = $_GET['id'];    

    //buat query untuk ambil data dari database
    $sql = "SELECT * FROM tb_pengunjung WHERE id = $id";
    $query = mysqli_query($conn, $sql);
    $pengunjung = mysqli_fetch_assoc($query);

    //ambil data pesanan
    $datapesanan = mysqli_query($conn, "SELECT * FROM tb_pesanan");
    while ($data = mysqli_fetch_array($datapesanan)) {
        $tujuanawal = $data['nama'];
        $jumlahawal = $data['jumlah'];
    }
    
    // jika data yang di edit tidak ditemukan
    if (mysqli_num_rows($query) < 1) {
        die("data tidak ditemukan...");
    }
?> 

<!doctype html>  
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Edit Data</title>
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
                    <a href="editwisata.php"><button type="button" class="btn btn-primary">Edit Wisata</button></a>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>

    <div class="row" style="margin-top: 60px;">
        <div class="col-md-7 text-primary" style="padding: 250px;">
            <h1>Silahkan isi form berikut untuk</h1>
            <h1><strong>Edit Data Pengunjung</strong></h1>
        </div>
        <div class="col-md-5">
            <div class="d-grid">
                <div class="col-md-10 mx-4 text-right">
                    <form method="POST" action="" class="" style="float: right;">
                        <div class="card border-info mb-3" style="width: 27rem;">
                            <div class="card-body bg-light">
                                <div class="form-group">
                                    <div class="col-md-25">
                                        <h1>Edit Form Pemesanan</h1>
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <div class="col-md-55">
                                        <label>Tanggal</label>
                                        <input type="date" name="tanggal" value="<?php echo $pengunjung['tanggal'] ?>" class="form-control">
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <div class="col-md-55">
                                        <label>Nama Lengkap</label>
                                        <input type="text" name="nama" value="<?php echo $pengunjung['nama'] ?>"class="form-control" placeholder="Masukkan Nama Lengkap Pengunjung">
                                    </div><br>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-55">
                                        <label>Email</label>
                                        <input type="email" name="email" value="<?php echo $pengunjung['email'] ?>"class="form-control" placeholder="Masukkan Email Pengunjung">
                                    </div><br>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-55">
                                        <label>Asal Kota</label>
                                        <input type="text" name="askot" value="<?php echo $pengunjung['askot'] ?>" class="form-control" placeholder="Masukkan Asal Kota Pengunjung">
                                    </div><br>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-55">
                                        <label>Tujuan Wisata</label>
                                        <select class="form-control" name="tujuan">
                                            <option></option>
                                            <option>Pantai Balekambang</option>
                                            <option>Pantai Tiga Warna</option>
                                            <option>Pantai Teluk Asmara</option>
                                            <option>Pantai Goa Cina</option>
                                            <option>Pantai Clungup</option>
                                            <option>Pantai Sendiki</option>
                                            <option>Gunung Welirang</option>
                                            <option>Gunung Panderman</option>
                                            <option>Gunung Kelud</option>
                                            <option>Gunung Butak</option>
                                            <option>Air Terjun Coban Rondo</option>
                                            <option>Air Terjun Coban Pelangi</option>
                                            <option>Air Terjun Cinde</option>
                                            <option>Air Terjun Coban Talun</option>
                                            <option>Jatim Park 1</option>
                                            <option>Jatim Park 2</option>
                                            <option>Jatim Park 3</option>
                                            <option>Selecta</option>
                                        </select>
                                    </div><br>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-55">
                                        <label>No HP</label>
                                        <input type="number" name="nohp" value="<?php echo $pengunjung['nohp'] ?>"class="form-control" placeholder="Masukkan No HP Pengunjung"></input>
                                    </div>
                                </div><br>

                                <div class="d-grid">
                                    <center><div class="col-md-10 text-left">
                                        <button type="submit" name="edit" class="btn btn-primary btn-create">Edit Data</button>
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
//cek apakah setiap kolom sudah terisi atau belum
if (isset($_POST['tanggal']) && isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['askot']) && isset($_POST['tujuan']) && isset($_POST['nohp'])) {
    if (isset($_POST['edit'])) {
        // ambil data dari formulir
        $tanggal = $_POST['tanggal'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $askot = $_POST['askot'];
        $tujuan = $_POST['tujuan'];
        $nohp = $_POST['nohp'];

        //query update data formulir ke dalam database
        $sql = "UPDATE tb_pengunjung SET tanggal='$tanggal', nama='$nama', email='$email', askot='$askot', tujuan ='$tujuan', nohp='$nohp' WHERE id=$id";
        $query = mysqli_query($conn, $sql);

        $sql = "UPDATE tb_pesanan SET jumlah=jumlah+1 WHERE nama='$tujuan'"; "UPDATE tb_pesanan SET jumlah=jumlah-1 WHERE nama='$tujuanawal'";
        $query = mysqli_query($conn, $sql);

        // Apakah query update berhasil?
        if ($query) {
            //Jika berhasil alihkan ke halaman datapengunjung.php
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/UAS_PEMWEB/laporanpengunjung.php'>";
        } else {
            // Jika gagal tampilkan pesan
            die("Gagal menyimpan perubahan..." . mysqli_error($conn));
        }
    } else {
        die("Akses dilarang...");
    }
}


