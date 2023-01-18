<?php

include("koneksi.php");

//cek apakah tombol daftar sudah di klik atau belum
if (isset($_POST['pesan-tiket'])) {

    //ambil data dari formulir
    $id = $_POST['id'];
    $tanggal = $_POST['tanggal'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $askot = $_POST['askot'];
    $tujuan = $_POST['tujuan'];
    $nohp = $_POST['nohp'];
    $jumlah = $_POST['jumlah'];

    //buat query
    $sql = "INSERT INTO tb_pengunjung (id, tanggal, nama, email, askot, tujuan, nohp, jumlah) VALUE ('$id', '$tanggal', '$nama', '$email', '$askot', '$tujuan', '$nohp', '$jumlah')";
    $query = mysqli_query($conn, $sql);

    //apakah query simpan berhasil?
    if ($query) {
        //kalau berhasil alihkan ke halaman index.php dengan status = sukses
        header('Location: cetak-tiket.php?status=sukses');
    } else {
        //kalau gagal alihkan ke halaman index.php dengan status = gagal
        header('Location: panduan.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
