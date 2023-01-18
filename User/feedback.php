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

    <!-- form untuk menampilkan feedback -->
    <div class="container">
        <div class="row">
            <br><br>
            <div class="col-md-5">
                <br><br>
                <div class="d-grid">
                    <div class="col-md-10 mx-4 text-right">
                        <br><br>
                        <form method="POST" action="proses-feedback.php" class="" style="padding: 0px 0px 0px 0px;">
                            <div class="card border-primary mb-3" style="width: 40rem;">
                                <div class="card-body bg-light">
                                    <div class="form-group">
                                        <div class="col-md-25">
                                            <h1>Form Feedback</h1>
                                            <p>Isi form di bawah ini dengan sebenar-benarnya!</p>
                                        </div>
                                    </div><br>
                                    <div class="form-group">
                                        <div class="col-md-55">
                                            <label>Nama Lengkap</label>
                                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap Anda">
                                        </div><br>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-55">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="Masukkan Email Anda">
                                        </div><br>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-55">
                                            <label>Kritik</label>
                                            <textarea type=" textarea" name="kritik" class="form-control" placeholder="Masukkan Kritik yang ingin disampaikan"></textarea>
                                        </div>
                                    </div><br>

                                    <div class="form-group">
                                        <div class="col-md-55">
                                            <label>Saran</label>
                                            <textarea type=" textarea" name="saran" class="form-control" placeholder="Berikan saran heal.ing agar kedepannya lebih baik!!"></textarea>
                                        </div>
                                    </div><br>

                                    <div class="d-grid">
                                        <div class="col-md-12 text-right">
                                            <div class="d-grid">
                                                <button type="submit" name="feedback" class="btn btn-primary"> <i class='fas fa-paper-plane'></i> Kirim Feedback</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-7 text-primary" style="padding: 120px 250px;">
                <h1><strong><i class="fas fa-gem me-3"></i>Heal.ing</strong></h1>
                <p>
                    Pemesanan tiket wisata online Kabupaten Malang
                    termurah dan terlengkap yang dapat diakses dari rumah
                </p><br><br>
            </div>
        </div>
    </div>


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