  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

<?php
session_start();
require_once("konfigurasi/koneksi.php");
$username = $_POST['username'];
$pass = $_POST['password']; 
$sql = "SELECT * FROM user WHERE username = 
'$username'";
$query = $db->query($sql);
$hasil = $query->fetch_assoc();

 if($query->num_rows == 0) {

 echo     "<div class='container-fluid'>

          <!-- 404 Error Text -->
          <div class='text-center'>
            <div class='error mx-auto' data-text='404'>404</div>
            <p class='lead text-gray-800 mb-5'>Page Not Found</p>
            <p class='text-gray-500 mb-0'>Username is not valid!</p>
            <a href='login.php'>&larr; Back to Login</a>
          </div>

        </div>";
} else{
if($pass <> $hasil['password']) {

	 echo     "<div class='container-fluid'>

          <!-- 404 Error Text -->
          <div class='text-center'>
            <div class='error mx-auto' data-text='404'>404</div>
            <p class='lead text-gray-800 mb-5'>Page Not Found</p>
            <p class='text-gray-500 mb-0'>password error! try again!</p>
            <a href='login.php'>&larr; Back to Login</a>
          </div>

        </div>";
} else {
$_SESSION['username'] = $hasil['username'];
header('location:index.php');
}
}
?>