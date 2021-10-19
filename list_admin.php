<?php
session_start();
if(!isset($_SESSION['username'])) {
header('location:login.php'); 
} else { 
$username = $_SESSION['username']; 
}
?>
  <title>Admin- Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">


<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><?php echo $username;?></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Student
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="manajemen_siswa.php" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Student Management</span>
        </a>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="registrasi.php" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Student Registration </span>
        </a>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="grafik.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Student Data</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Admin
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Admin Profile</span>
        </a>
      </li>

      <!-- Nav Item - Charts -->
      
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          
    <div id="logo" class="grid_5">
      <!-- replace with your website title or logo -->
      <a id="site-title" href="index.php"><span>ADMINISTRATOR</span><br><span>E-Learning Sisfor Education</span></a>
    </div>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
      
      <!-- replace with your website title or logo -->
      
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <!-- Nav Item - Alerts -->
          
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <span class="mr-2 d-none d-lg-inline text-gray-900 small"><a href="#">Setting</a></span>
              </li>
              <!-- Dropdown - User Information -->
          </ul>
        <div class="col-1">
          <!-- Page Heading -->          
            <a href="logout.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Logout</a>
        </div>
        </nav>



<div class="container-fluid">
<a href="regis_admin.php">[+] New</a>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Table Admin</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Phone Number</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <tbody>
<?php

 include("konfigurasi/koneksi.php");
        $sql = "SELECT * FROM user";
        $query = mysqli_query($db, $sql);
        while($user = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$user['id']."</td>";
            echo "<td>".$user['username']."</td>";
            echo "<td>".$user['password']."</td>";
            echo "<td>".$user['telepon']."</td>";
            echo "<td><a href='form-edit-admin.php?id=".$user['id']."' class='d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm'>Edit</a></td>";
            echo "<td><a href='hapus_admin.php?id=".$user['id']."' class='d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm'>Delete</a></td>";
        }
         ?>
</tbody>
</table>
<p>Total: <?php echo mysqli_num_rows($query) ?></p>
                    </tr>
                  </tbody>
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

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

