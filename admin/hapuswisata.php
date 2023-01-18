<?php

include("koneksi.php");
    $id = $_GET['id'];
    $query = mysqli_query($conn, "DELETE FROM tb_wisata WHERE id = '$id'");
    $wisata=mysqli_Fetch_assoc($query);
    mysqli_query($conn, $query) or die ("SQL Error ".mysqli_error());
    header('location:daftarwisata.php')
?>