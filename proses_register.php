
<?php
include("konfigurasi/koneksi.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['register'])){
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
    $sql = "INSERT INTO siswa (id,nama_lengkap,alamat, jenis, agama, telepon,asal_sekolah,nilai_ijazah,keterangan) VALUE ('$id','$nama', '$alamat', '$jk', '$agama','$telepon', '$sekolah','$nilai','$ket')";
    $query = mysqli_query($db, $sql);
    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: registrasi.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: registrasi.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>
