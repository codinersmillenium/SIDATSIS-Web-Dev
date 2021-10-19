
<?php
include("konfigurasi/koneksi.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['register'])){
    // ambil data dari formulir
    $id = $_POST['id'];
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $telepon = $_POST['phone'];

    // buat query
    $sql = "INSERT INTO user (id,username,password, telepon) VALUE ('$id','$username','$pass','$telepon')";
    $query = mysqli_query($db, $sql);
    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: list_admin.php?status=succes');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: list_admin.php?status=failed');
    }

} else {
    header('Location:404.html');
}

?>
