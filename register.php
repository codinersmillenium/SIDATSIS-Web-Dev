


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
                <h1 class="h4 text-gray-900 mb-4">Create an Student Data!</h1>
              </div>
              <form class="user" action="proses_register.php" method="POST">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="id" placeholder="Id">
                </div>
                 <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="address" placeholder="Address">
                </div>
                 <div class="form-group">

                <label for="jenis_kelamin">Genre:
                </label>
                 <p><label><input type="radio" name="Genre"
                value="Male" checked: "" >Male</label></p>
                 <p ><label><input type="radio" name="Genre"
                value="Female" checked:"">Female</label></p>
                </div>
                 <div class="form-group">
                 <p class="form-control-user">
                 <label  for="agama">Religion: </label>
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
                  <input type="text" class="form-control form-control-user" name="phone" placeholder="Phone Number">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="graduate" placeholder="Graduate">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="score" placeholder="Diploma Score">
                </div>
                <div class="form-group">
                  <textarea class="form-control form-control-user" name="information" placeholder="Information""></textarea>
                </div>
                <input type="submit" name="register" value="Register" class="btn btn-primary btn-user btn-block">
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
