<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda-Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#" style="height: 80px;" >
            </a>
        </div>
    </nav>
    <br><br><br>

    <div class="row" style="margin-bottom: -50px; padding: 20px;">
    	<div class="col-md-7 text-primary" style="padding: 100px; margin-right: -50px;margin-top: 100px; margin-bottom: 50px;">
            <h1>Isi form berikut untuk melakukan</h1>
            <h1><strong>Login</strong></h1>
        </div>
    	<div class="col-md-5" style="margin: auto;">
            <div class="d-grid">
                <div class="col-md-10 mx-4 text-right">
                    <form method="POST" action="proseslogin.php" class="" style="float: center;">
                        <div class="card border-info mb-3" style="width: 27rem;">
                            <div class="card-body bg-light">
                                <div class="form-group">
                                    <div class="col-md-25">
                                        <center><h1>Form Login</h1></center>
                                    </div>
                                </div><br>                               
                                <div class="form-group">
                                    <div class="col-md-55">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda">
                                    </div><br>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-55">
                                        <label>Password</label>
                                        <input type=" text" name="password" class="form-control" placeholder="Masukkan Password Anda"></input>
                                    </div>
                                </div><br>

                                <div class="d-grid">
                                    <center><div class="col-md-10 text-left">
                                        <a href="formlogin.php"><button type="submit" name="submit" class="btn btn-primary btn-create">Login</button></a>
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
        <div class="text-center p-4 text-light bg-primary" style="background-color: rgba(0, 0, 0, 0.05); height: 80px;">
            <p>© 2022 Copyright: <strong>yantee & rhizma</strong></p>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>