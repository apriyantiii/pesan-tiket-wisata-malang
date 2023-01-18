<?php
include("koneksi.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wisata Malang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
    <!-- Navigation bar -->
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
                    <a href="kontak.php"><button type="button" class="btn btn-primary">Contact Us</button></a>
                </div>
            </div>
        </div>
    </nav>
    <br><br><br>

    <!-- mengambil dta id dan tanggal dari database uagar pada form dapat terisi otomatis, dan id akan urut -->
    <?php
    $query = mysqli_query($conn, "select * from tb_pengunjung");
    while ($data = mysqli_fetch_array($query)) {
        $id = $data['id'];
        $tanggal = $data['tanggal'];
    }
    ?>

    <div class="row">
        <div class="col-md-7 text-primary" style="padding: 250px;">
            <img src="image/icon.png" class="d-block w-100" alt="...">

        </div>
        <div class="col-md-5">
            <div class="d-grid">
                <div class="col-md-10 mx-4 text-right">
                    <form method="POST" action="proses-pemesanan.php" class="" style="float: center; padding: 50px -40px;">
                        <div class="card border-info mb-3" style="width: 35rem;">
                            <div class="card-body bg-light">
                                <div class="form-group">
                                    <div class="col-md-25">
                                        <h1>Form Pemesanan Tiket</h1>
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <div class="col-md-55">
                                        <label><i class='fas fa-calendar-alt'></i> ID</label>
                                        <input type="text" name="tanggal" class="form-control" value="<?= $id ?>">
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <div class="col-md-55">
                                        <label><i class='fas fa-calendar-alt'></i> Tanggal </label>
                                        <input type="date" name="tanggal" class="form-control" value="<?= $tanggal ?>">
                                    </div>
                                </div><br>

                                <div class="form-group">
                                    <div class="col-md-55">
                                        <label><i class='far fa-id-card'></i> Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap Anda">
                                    </div><br>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-55">
                                        <label><i class='fas fa-envelope-open'></i> Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Masukkan Email Anda">
                                    </div><br>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-55">
                                        <label><i class='fas fa-map-marker-alt'></i></i>Asal Kota</label>
                                        <input type="text" name="askot" class="form-control" placeholder="Masukkan Kota Anda">
                                    </div><br>
                                </div>
                                <!-- dropbox untuk menampilkan pilihan wisata -->
                                <div class="col-md-55">
                                    <div class="form-group">
                                        <label><i class='fas fa-map-marker-alt'></i></i> Tempat Wisata</label><br>
                                        <br><select name="tujuan" id=" agama" placeholder="wisata">
                                            <sma><span class="warning">
                                                    <option value=""></option>
                                                    <option value="PantaiBalekambang">Pantai Balekambang</option>
                                                    <option value="PantaiTigaWarna">Pantai Tiga Warna</option>
                                                    <option value="PantaiTelukAsmara">Pantai Teluk Asmara</option>
                                                    <option value="PantaiGoaCina">Pantai Goa Cina</option>
                                                    <option value="PantaiClungup">Pantai Clungup</option>
                                                    <option value="PantaiSendiki">Pantai Sendiki</option>
                                                    <option value="GunungWelirang">GunungWelirang</option>
                                                    <option value="GunungPanderman">GunungPanderman</option>
                                                    <option value="GunungKelud">GunungKelud</option>
                                                    <option value="GunungButak">GunungButak</option>
                                                    <option value="CobanRondo">Air Terjun Coban Rondo</option>
                                                    <option value="CobanPelangi">Air Terjun Coban Pelangi</option>
                                                    <option value="Cinde">Air Terjun Cinde</option>
                                                    <option value="CobanTalun">Air Terjun Coban Talun</option>
                                                    <option value="JatimPark1">Jatim Park 1</option>
                                                    <option value="JatimPark2">Jatim Park 2</option>
                                                    <option value="JatimPark3">Jatim Park 3</option>
                                                    <option value="Selecta">Selecta</option>
                                        </select>
                                    </div>
                                </div><br>

                                <div class="form-group">
                                    <div class="col-md-55">
                                        <label> <i class='fas fa-phone'></i> No HP</label>
                                        <input type="text" name="nohp" class="form-control" placeholder="Masukkan No HP Anda"></input>
                                    </div>
                                </div><br>

                                <div class="col-md-70">
                                    <div class="form-group">
                                        <label><i class='fas fa-edit'></i> Jumlah Tiket</label><br>
                                        <br><select name="jumlah" id=" agama" placeholder="wisata">
                                            <sma><span class="warning">
                                                    <option value=""></option>
                                                    <option value="1">1 </option>
                                        </select>
                                    </div>
                                </div><br>

                                <div class="d-grid">
                                    <div class="col-md-10 text-left">
                                        <button type="submit" name="pesan-tiket" class="btn btn-primary btn-create">Pesan Tiket</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Heal.ing
                        </h6>
                        <p>
                            Pemesanan tiket wisata online Kabupaten Malang
                            termurah dan terlengkap yang dapat diakses dari rumah
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Tiket Pantai</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Tiket Gunung</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Tiket Air Terjun</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Wahana Bermain</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contact
                        </h6>
                        <p><i class="fas fa-home me-3"></i> Malang, Jawa Timur, Indonesia</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@wisatamalang.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 62 234 567 88</p>
                        <p><i class="fas fa-print me-3"></i> + 62 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

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