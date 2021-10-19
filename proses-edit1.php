<?php
include("konfigurasi/koneksi.php");
// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['save'])){
 // ambil data dari formulir
 $id = $_POST['id'];
 $name = $_POST['username'];
 $pass = $_POST['password'];
 // buat query update
 $sql = "UPDATE siswa SET username='$name',
password='$pass' WHERE id='$id'";
 $query = mysqli_query($db, $sql);
 // apakah query update berhasil?
 if( $query ) {
 // kalau berhasil alihkan ke halaman list-siswa.php
 header('Location: manajemen_siswa.php');
 } else {
 // kalau gagal tampilkan pesan
 die("Gagal menyimpan perubahan...");
 }
} else {
 die("Akses dilarang...");
}
?>