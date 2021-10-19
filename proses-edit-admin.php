<?php
include("konfigurasi/koneksi.php");
// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['save'])){
 // ambil data dari formulir
 $id = $_POST['id'];
 $name = $_POST['username'];
 $pass = $_POST['password'];
 $telp = $_POST['phone'];
 // buat query update
 $sql = "UPDATE user SET id='$id',username='$name',
password='$pass',telepon='$telp' WHERE id='$id'";
 $query = mysqli_query($db, $sql);
 // apakah query update berhasil?
 if( $query ) {
 // kalau berhasil alihkan ke halaman list-siswa.php
 header('Location: list_admin.php');
 } else {
 // kalau gagal tampilkan pesan
 die("Gagal menyimpan perubahan...");
 }
} else {
 header('Location: 404.html');
}
?>