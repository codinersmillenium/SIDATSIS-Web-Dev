

<?php
include("konfigurasi/koneksi.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['save'])){
    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['name'];
    $alamat = $_POST['address'];
    $jk = $_POST['Genre'];
    $agama = $_POST['agama'];
    $telepon = $_POST['phone'];
    $sekolah = $_POST['graduate'];
    $nilai = $_POST['score'];
    $ket = $_POST['information'];

    // buat query
    $sql = "UPDATE siswa SET id='$id',nama_lengkap='$nama',alamat='$alamat', jenis='$jk', agama='$agama',telepon='$telepon',asal_sekolah='$sekolah',nilai_ijazah='$nilai',keterangan='$ket' WHERE id='$id'";
    $query = mysqli_query($db, $sql);
    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: registrasi.php');
    }else {
 // kalau gagal tampilkan pesan
 die("Gagal menyimpan perubahan...");
 } 

} else {
    header('Location: 404.html');
}

?>

