@extends('dashboard.layout,main')

@section('container')
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
            
              <h4>Selamat Datang!</h4>
              <h6 class="font-weight-light">Isi lengkap</h6>
              <form class="pt-3">

                <div class="form-group">
                  <input type="text" name="name"  class="form-control form-control-lg" id="name" placeholder="Name">
                </div>

                <div class="form-group">
                  <input type="text" name="username"  class="form-control form-control-lg" id="username" placeholder="Username">
                </div>

                <div class="form-group">
                  <input type="text" name="asal_sekolah"  class="form-control form-control-lg" id="asal_sekolah" placeholder="Asal Sekolah">
                </div>

                <div class="form-group">
                  <input type="text" name="alamat" class="form-control form-control-lg" id="alamat" placeholder="Alamat">
                </div>

                <div class="form-group">
                  <input type="text" name="nohp" class="form-control form-control-lg" id="nohp" placeholder="No. Hp">
                </div>

                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Email">
                </div>
                
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Password">
                </div>

                <div class="form-group">
                  <select class="form-control form-control-lg" id="role">
                    <option>Role</option>
                    <option>Admin</option>
                    <option>Peserta</option>

                  </select>
                </div>




                <div class="mt-3">
                  <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">SIGN UP</a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login.html" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
@endsection