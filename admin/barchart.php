<?php 
include ('koneksi.php'); 
    $pengunjung = mysqli_query($conn,"select * from tb_pesanan"); 
    while ($row = mysqli_fetch_array($pengunjung) ) {
        $nama_tempat[] = $row['nama']; 
        $query = mysqli_query($conn,"select sum(jumlah) as jumlah from tb_pesanan where id='". $row['id']."'"); 
        $row = $query->fetch_array(); 
        $jumlah[] = $row['jumlah']; 
    }
?> 

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bar Chart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script type="text/javascript" src="Chart.js"></script>
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

    <div class="row" style="width: 1200px; padding: 50px; margin: auto;">
        <canvas id="myChart"></canvas>
    </div> 

    <script> 
        var ctx = document.getElementById("myChart").getContext('2d'); 
        var myChart = new Chart (ctx, { 
            type: 'bar', 
            data: { 
                labels: <?php echo json_encode($nama_tempat); ?>, 
                datasets: [{
                    label: 'Grafik Pengunjung - Bar Chart', 
                    data: <?php echo json_encode($jumlah);?>,

                    backgroundcolor: 'rgba(255, 99, 132, 0.2)', 
                    bordercolor: 'rgba(255, 99, 132, 1)', 
                    borderWidth: 1 
                }]
            }, 
            options: { 
                scales: {
                    YAxes: [{
                        ticks : { 
                            beginAtZero:true 
                        }
                    }]
                }
            } 
        });
    </script>

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