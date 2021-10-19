<?php
include("konfigurasi/koneksi.php");
// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
 header('Location: register.php');
}
//ambil id dari query string
$id = $_GET['id'];
// buat query untuk ambil data dari database
$sql = "SELECT * FROM siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);
// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
 die("data tidak ditemukan...");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-3 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-6">
            <div class="p-3">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Edit an Student Data!</h1>
              </div>
          </div>
              <form class="user" action="proses-edit.php" method="POST">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="id" placeholder="Id" value="<?php echo $siswa['id'] ?>">
                </div>
                 <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="name" placeholder="Name" value="<?php echo $siswa['nama_lengkap'] ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="address" placeholder="Address" value="<?php echo $siswa['alamat'] ?>">
                </div>
                 <div class="form-group">

                <label class="form-control-user" for="jenis_kelamin">Genre:
                </label>
                <?php $jk = $siswa['jenis']; ?>
                 <p ><label><input type="radio" name="Genre"
                value="Male"  <?php echo ($jk == 'Male') ?
                "checked": "" ?>>Male</label></p>
                 <p ><label><input type="radio" name="Genre"
                value="Female"  <?php echo ($jk == 'Female') ?
                "checked": "" ?>>Female</label></p>
                </div>
                 <div class="form-group">
                 <p class="form-control-user">
                 <label  for="agama">Religion: </label>
                 <?php $agama = $siswa['agama']; ?>
                 <select name="agama">
                 <option >Islam</option>
                 <option >Kristen</option>
                 <option >Hindu</option>
                 <option >Buda</option>
                 <option >Konghucu</option>
                 </p>
               </select>
             </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="phone" placeholder="Phone Number" value="<?php echo $siswa['telepon'] ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="graduate" placeholder="Graduate" value="<?php echo $siswa['asal_sekolah'] ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="score" placeholder="Diploma Score" value="<?php echo $siswa['nilai_ijazah'] ?>">
                </div>
                <div class="form-group">
                  <textarea class="form-control form-control-user" name="information" placeholder="Information"><?php echo $siswa['keterangan'] ?></textarea>
                </div>
                <input type="submit" name="save" value="Save" class="btn btn-primary btn-user btn-block">
                <hr>
              </form>
              <hr>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
