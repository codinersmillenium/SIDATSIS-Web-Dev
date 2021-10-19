<?php

include("konfigurasi/koneksi.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: registrasi.php');
    } else {
        die("gagal menghapus...");
    }

} else {
     header('Location: 404.html');
}

?>
