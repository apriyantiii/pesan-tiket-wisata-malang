<?php

include("koneksi.php");

//cek apakah tombol daftar sudah di klik atau belum
if (isset($_POST['feedback'])) {

    //ambil data dari formulir
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $kritik = $_POST['kritik'];
    $saran = $_POST['saran'];

    //buat query
    $sql = "INSERT INTO tb_feedback (nama, email, kritik, saran) VALUE ('$nama', '$email', '$kritik', '$saran')";
    $query = mysqli_query($conn, $sql);

    //apakah query simpan berhasil?
    if ($query) {
        //kalau berhasil alihkan ke halaman index.php dengan status = sukses
        header('Location: beranda.php?status=sukses');
    } else {
        //kalau gagal alihkan ke halaman index.php dengan status = gagal
        header('Location: panduan.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
