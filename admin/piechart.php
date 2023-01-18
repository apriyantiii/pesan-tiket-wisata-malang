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
    <title>Pie Chart</title>
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

    <div id="canvas-holder" class="row" style="width: 600px; padding: 50px; margin: auto;">
        <canvas id="chart-area"></canvas>
    </div> 

    <script> 
        var config = { 
            type: 'pie', 
            data: { 
                datasets: [{
                    label: 'Total Cases - Pie Chart', 
                    data: <?php echo json_encode($jumlah);?>,
                    backgroundColor: [                  
                    'rgba(255, 99, 132, 0.2)',                  
                    'rgba(216, 124, 181, 0.2)',
                    'rgba(177,88,180, 0.2)',
                    'rgba(103,71,183, 0.2)',
                    'rgba(58,58, 183, 0.2)',
                    'rgba(54,162, 235, 0.2)',
                    'rgba(84, 169, 171, 0.2)',
                    'rgba(27, 126, 98, 0.2)',
                    'rgba(214, 250, 56, 0.2)',
                    'rgba(250, 133, 56, 0.2)'
                    ],
                    borderColor: [                  
                    'rgba(255, 99, 132, 1)',                    
                    'rgba(216, 124, 181, 1)',
                    'rgba(177,88,180, 1)',
                    'rgba(103,71,183, 1)',
                    'rgba(58,58, 183, 1)',
                    'rgba(54,162, 235, 1)',
                    'rgba(84, 169, 171, 1)',
                    'rgba(27, 126, 98, 1)',
                    'rgba(214, 250, 56, 1)',
                    'rgba(250, 133, 56, 1)',
                    ], 
                }],
                labels: <?php echo json_encode($nama_tempat); ?>
            },
            options: { 
                responsive: true
            } 
        };
    window.onload = function() { 
        var ctx = document.getElementById('chart-area').getContext('2d'); 
        window.myPie = new Chart (ctx, config);
    }; 

    document.getElementById('randomizeData').addEventListener('click', function () { 
        config.data.datasets.forEach(function (dataset) { 
            dataset.data = dataset.data.map(function () { 
                return randomScalingFactor();
            }); 
        }); 
        window.myPie.update(); 
    });
    var colorNames = Object.keys(window.chartColors);
    document.getElementById('addDataset').addEventListener('click', function() { 
        var newDataset = { 
            backgroundColor: [], 
            data: [], 
            label: 'New dataset' + config.data.datasets.length, 
        };
            for (var index = 0; index < config.data.labels.length; 
                ++index) { 

                newDataset.data.push (randomScalingFactor()); 
                var colorName = colorNames [index % colorNames.length]; 
                var newColor = window.chartColors[colorName]; 
                newDataset = backgroundColor.push(newColor);
            }
            config.data.datasets.push(newDataset); 
            window.myPie. update(); 
        }); 
            document.getElementById('removeDataset').addEventListener("click", function() { 
                config.data.datasets.splice (0, 1); 
                window.myPie. update(); 
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