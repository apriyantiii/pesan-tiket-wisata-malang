<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wisata Malang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
    <!-- Navigation Bar menggunakan bootstrap -->
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

    <!-- Carousol menggunakan bootstrap untuk menampilkan gambar pada bawah navigation bar yang bisa bergerak ke kiri dan kanan -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/kampungwarna3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Paradise of Malang</h5>
                    <p>Pesan tiket wisata termurah cukup dari rumah!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/bromo4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Paradise of Malang</h5>
                    <p>Pesan tiket wisata termurah cukup dari rumah!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/sunset4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Paradise of Malang</h5>
                    <p>Pesan tiket wisata termurah cukup dari rumah!</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!--container-->
    <br>
    <div class="container">
        <!--grid-->
        <div class="row">
            <div class="col">
                <center>
                    <!--gambar border-radius-->
                    <h3>Beach</h3>
                    <p>Pantai merupakan wisata yang dapat meyejukkan hati siapapun yang sedang membutuhkan ketenangan.
                        Salah satu wilayah yang memiliki keindahan alam berupa pantai yaitu Kabupaten Malang, Jawa Timur
                        Malang sangat terkenal dengan keindahan pantai nya yang meliputi Pantai Balekambang, Pantai Tiga Warna,
                        Pantai Teluk Asmara, Pantai Goa Cina, Pantai Clungup, Pantai Sendang Biru, Pantai Sendiki, Pantai Laksono, dan lainnya
                    </p>
                    <!--button-->
                    <a class="btn btn-primary" href="informasiWisata.php">Selengkapnya</a>
                </center>
            </div>

            <div class="col">
                <center>
                    <!--gambar border-radius-->
                    <h3>Mountain</h3>
                    <p>LGunung adalah sebuah keindahan alam yang dapat dinikmati ketika mendakinya.
                        Begitu pula gunung yang berada di Kabupaten yang sangat indah dan sejuk
                        Tidak semua wilayah memiliki gunung, berikut adalah gunung-gunung dekat malang yang dapat dijadikan tempat wisata di malang :
                        Gunung Panderman, Gunung Butak, Gunung Welirang, Gunung Semeru, Gunung Anjasmoro, Gunung Kelud, dan lainnya
                    </p>
                    <!--button-->
                    <a class="btn btn-primary" href="informasiWisata.php">Selengkapnya</a>
                </center>
            </div>

            <div class="col">
                <center>
                    <!--gambar border-radius-->
                    <h3>Waterfall</h3>
                    <p>Air terjun merupakan keindahn alam berupa air mengalir dari ketinggian yang dapat dinikmati
                        untuk sekedar menenangkan diri ataupun berekreasi dengan orang-orang terdekat. Air terjun
                        juga menjadi salah satu tempat yang menenangkan dengan suara gemericik air. Air terjun yang ada di malang diantaranya :
                        air terjun coban rondo, air terjun coban pelangi, air terjun cinde, air terjun coban talun, dan lainnya
                    </p>
                    <!--button-->
                    <a class="btn btn-primary" href="informasiWisata.php">Selengkapnya</a>
                </center>
            </div>

        </div>

    </div>

    <!--row untuk membuat media objek-->
    <br>
    <hr>
    <br>

    <!-- Testimoni menggunakan card pada bootstrap-->
    <div class="container bg-dark">
        <header>
            <br>
            <h3 class="alert alert-primary text-center" width="200px">
                <p class="text-dark">Testimoni Pengunjung</p>
            </h3>
        </header>

        <div class="row">
            <div class="col">
                <div class="card">
                    <img src="image/yantee2.jpeg" class="card-img-top rounded-circle" style="padding: 40px;" alt="...">
                    <div class="card-body">
                        <p class="card-text">website nya kece banget,pesen tiket cukup stay and wait from home udh bisa dapetin tiket wisata</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="image/ditha.jpg" class="card-img-top rounded-circle" style="padding: 40px;" alt="...">
                    <div class="card-body">
                        <p class="card-text">keren sih, udah gapake antri lagi buat dapetin tiket wisata. worth it jugaa dengan harga2 yg pas</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="image/rhizma.2jpg.jpg" class="card-img-top rounded-circle" style="padding: 40px;" alt="...">
                    <div class="card-body">
                        <p class="card-text">mantep banget, langsung nyobain si pas denger2 ada website pemesanan tiket online. Ternyata emg se worth it itu.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="image/lidya.jpg" class="card-img-top rounded-circle" style="padding: 40px;" alt="...">
                    <div class="card-body">
                        <p class="card-text">website nya kece banget,pesen tiket cukup stay and wait from home udh bisa dapetin tiket wisata</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="image/icha2.jpg" class="card-img-top rounded-circle" style="padding: 40px;" alt="...">
                    <div class="card-body">
                        <p class="card-text">website nya kece banget,pesen tiket cukup stay and wait from home udh bisa dapetin tiket wisata</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <hr><br>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media untuk menampilkan icon-icon social media-->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- terletak pada bagian kiri footer -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- terletak pada bagian kanan footer yang terdapat ikon sosial media -->
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
                <!-- Grid row untuk dapat mengatur letak grid-->
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