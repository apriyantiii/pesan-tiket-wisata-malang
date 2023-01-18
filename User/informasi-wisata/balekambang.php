<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pantai Balekambang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
    <!-- navigation bar -->
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
                    <a href="../beranda.php"><button type="button" class="btn btn-primary">Home</button></a>
                    <a href="../informasiWisata.php"><button type="button" class="btn btn-primary">Informasi Wisata</button></a>
                    <a href="../panduan.php"><button type="button" class="btn btn-primary">Panduan</button></a>
                    <a href="../feedback.php"><button type="button" class="btn btn-primary">Feedback</button></a>
                    <a href="../formPemesanan.php"><button type="button" class="btn btn-primary">Pemesanan Tiket</button></a>
                </div>
            </div>
        </div>
    </nav>
    <br><br><br>
    <!-- deskripsi pantai balekambang beserta lokasi berkunjung serta syarat untuk mengunjungi balekambang -->
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 50rem;">
                    <img src="../image/balekambang.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pantai Balekambang</h5>
                        <p class="card-text"><i class='fas fa-map-marker-alt'></i></i> Dusun Sumber Jambe, Desa Srigonco, Kecamatan Bantur, Kabupaten Malang, Jawa Timur</p>
                        <p>Pantai Balekambang adalah sebuah pantai di pesisir selatan yang terletak di tepi Samudra Indonesia secara administratif masuk wilayah Dusun Sumber Jambe, Desa Srigonco, Kecamatan Bantur, Kabupaten Malang, Jawa Timur dan merupakan salah satu wisata di Kabupaten Malang sejak 1985 hingga kini. Daya tarik Balekambang utamanya tentu panorama alam, gelombang ombak yang memanjang hampir dua kilometer, serta hamparan pasir nan luas. Area pasir putih terlihat bersih dari sampah maupun kotoran sehingga cukup nyaman bagi pengunjung untuk bermain dan berolahraga. Bahkan tak jarang di pantai ini menjadi tempat latihan sejumlah klub sepak bola seperti Arema dan Persema.</p>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col md-6" style="margin: 10px">
                            <label for="" type="button" name="" class="btn btn-dark" style="border-radius: 1.5rem;"><i class='fas fa-fire'></i> Harga tiket dapat berubah sewaktu-waktu</label>
                        </div>
                        <div class="col md-6" style="margin: 10px">
                            <a href="#" class="btn btn-dark" style="border-radius: 1.5rem;"><i class='fas fa-fire'></i></i></i> Obyek wisata dapat tutup sewaktu-waktu</a>
                        </div>
                    </div>
                    <br><br>
                    <h6 class="text-center">Syarat & Ketentuan</h6>
                    <div class="row">
                        <div class="col md-6" style="margin: 10px">
                            <p><i class='fas fa-bookmark'></i> Kondisi badan sehat dan fit saat berkunjung</p>
                            <p><i class='fas fa-bookmark'></i> Mencuci tangan sebelum dan setelah berkunjung</p>
                            <p><i class='fas fa-bookmark'></i> Menjaga jarak</p>
                            <p><i class='fas fa-bookmark'></i> Dilarang makan dan minum di tempat wisata</p>
                            <p><i class='fas fa-bookmark'></i> Mengikuti himbauan dan petunjuk petugas wisata</p>
                        </div>
                        <div class="col md-6" style="margin: 10px">
                            <p><i class='fas fa-bookmark'></i> Suhu tubuh <37,3 °C</p>
                                    <p><i class='fas fa-bookmark'></i> Memakai masker selama berwisata</p>
                                    <p><i class='fas fa-bookmark'></i> Menjaga kebersihan tempat wisata</p>
                                    <p><i class='fas fa-bookmark'></i> Wanita hamil dan lansia dilarang masuk</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- meenampilkan harga pantai pada kanan atas -->
            <div class="col">
                <div class="card" style="width: 25rem;">
                    <div class="card-body">
                        <div class="col-md-10">
                            <div class="form-group" action="POST">
                                <label><i class='fas fa-calendar-alt'></i> Harga</label><br><br>
                                <h2><strong>Rp. 5.000</strong></h2>
                            </div><br>
                        </div>
                        <a href="../formPemesanan.php" nama="pesan-tiket" class="btn btn-primary"><i class='fas fa-ticket-alt'></i> Pesan Tiket</a>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>