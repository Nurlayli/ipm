<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Purple Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
  
    <div class="container-fluid page-body-wrapper">
      
      <!-- partial -->
          
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Forms
            </h3>

            @if (session()->has('succes'))
                <div class="alert alert-warning col-lg-8" role="alert">
                {{ session('succes') }}
                </div>
            @endif

          </div>
          <div class="row">

            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Peserta</h4>
                  <p class="card-description">
                    Basic form elements
                  </p>
                  <form class="forms-sample" method="post" action="input-proses">
                      @csrf
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" required name="name" id="name" placeholder="Name">
                      @error('name')
                              <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                      @enderror
                    </div>

                    <!-- <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                      @error('username')
                              <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                      @enderror
                    </div> -->

                    <div class="form-group">
                      <label for="asal_sekolah">Asal Sekolah</label>
                      <input type="text" class="form-control" required name="asal_sekolah" id="asal_sekolah" placeholder="Asal Sekolah">
                      @error('asal_sekolah')
                              <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input type="text" class="form-control" required name="alamat" id="alamat" placeholder="Alamat">
                      @error('alamat')
                              <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="nohp">No Hp</label>
                      <input type="text" class="form-control" required name="nohp" id="nohp" placeholder="No Hp">
                      @error('nohp')
                              <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="email">Email address</label>
                      <input type="email" class="form-control" required name="email" id="email" placeholder="Email">
                      @error('email')
                              <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                      @enderror
                    </div>

                    <!-- <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                      @error('password')
                              <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                      @enderror
                    </div> -->


                    <div class="form-group">
                      <label for="role">Role</label>
                        <select class="form-control" required name="role" id="role">
                            <option>Pilih salah satu</option>   
                            <option value="admin">Admin</option>   
                            <option value="peserta">Peserta</option>

                        </select>
                        @error('role')
                              <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                      @enderror
                      </div>

                    
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <a href="/dashboard" class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- content-wrapper ends -->

     
      <!-- main-panel ends -->
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
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
