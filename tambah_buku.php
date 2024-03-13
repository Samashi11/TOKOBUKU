<?php
require "config.php";
$buku = mysqli_query($connect, "SELECT * FROM buku");
$penerbit = mysqli_query($connect, "SELECT * FROM penerbit");
// $penerbits = mysqli_fetch_assoc($penerbit);
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>TOKO BUKU </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./focus-2/images/favicon.png">
    <link rel="stylesheet" href="focus-2/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="focus-2/vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="focus-2/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="focus-2/css/style.css" rel="stylesheet">



  </head>

  <body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
      <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
      </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

      <!--**********************************
            Nav header start
        ***********************************-->
      <div class="nav-header">
        <a href="index.html" class="brand-logo">
          <img class="logo-abbr" src="focus-2/images/logo.png" alt="">
          <img class="logo-compact" src="focus-2/images/logo-text.png" alt="">
          <img class="brand-title" src="focus-2/images/logo-text.png" alt="">
        </a>

        <div class="nav-control">
          <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
          </div>
        </div>
      </div>
      <!--**********************************
            Nav header end
        ***********************************-->

      <!--**********************************
            Header start
        ***********************************-->
      <div class="header">
        <div class="header-content">
          <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
              <div class="header-left">
                <div class="search_bar dropdown">
                  <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                    <i class="mdi mdi-magnify"></i>
                  </span>
                  <div class="dropdown-menu p-0 m-0">
                    <form>
                      <div>
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <!-- <button type="button" class="btn btn-outline-dark d-inline">Dark</button> -->
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <ul class="navbar-nav header-right">
                <li class="nav-item dropdown notification_dropdown">
                  <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                    <i class="mdi mdi-bell"></i>
                    <div class="pulse-css"></div>
                  </a>
                </li>
                <li class="nav-item dropdown header-profile">
                  <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                    <i class="mdi mdi-account"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="focus-2/app-profile.html" class="dropdown-item">
                      <i class="icon-user"></i>
                      <span class="ml-2">Profile </span>
                    </a>
                    <a href="focus-2/email-inbox.html" class="dropdown-item">
                      <i class="icon-envelope-open"></i>
                      <span class="ml-2">Inbox </span>
                    </a>
                    <a href="focus-2/page-login.html" class="dropdown-item">
                      <i class="icon-key"></i>
                      <span class="ml-2">Logout </span>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

      <!--**********************************
            Sidebar start
        ***********************************-->
      <div class="quixnav">
        <div class="quixnav-scroll">
          <ul class="metismenu" id="menu">
            <li class="nav-label first">HOME</li>
            <li><a class="" href="index.php" aria-expanded="false"><i class="icon icon-single-04"></i><span
                  class="nav-text">HOME</span></a>
            </li>
            <li class="nav-label">ADMIN</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                  class="icon icon-app-store"></i><span class="nav-text">MANAGE DATA</span></a>
              <ul aria-expanded="false">
                <li><a href="buku.php">BUKU</a></li>
                <li><a href="penerbit.php">PENERBIT</a></li>
              </ul>
            </li>
            <li class="nav-label">PENGADAAN</li>
            <li><a class="" href="pengadaan.php" aria-expanded="false"><i class="icon icon-world-2"></i><span
                  class="nav-text">PENGADAAN</span></a>
            </li>
          </ul>
        </div>
      </div>
      <!--**********************************
            Sidebar end
        ***********************************-->

      <!--**********************************
            Content body start
        ***********************************-->
      <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
          <div class="row page-titles mx-0">
            <div class="col-sm-6">
              <div class="welcome-text">
                <h4>TAMBAH BUKU</h4>
              </div>
            </div>
            <div class="col-sm-6 justify-content-sm-end mt-2 mt-sm-0 d-flex">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="buku.php">Buku</a></li>
                <li class="breadcrumb-item active">Tambah Buku</li>
              </ol>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-sm-6">
              <div class="card">
                <div class="stat-widget-two card-body">
                  <div class="stat-content">
                    <div class="stat-text">Today Expenses </div>
                    <div class="stat-digit"> <i class="fa fa-usd"></i>8500</div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card">
                <div class="stat-widget-two card-body">
                  <div class="stat-content">
                    <div class="stat-text">Income Detail</div>
                    <div class="stat-digit"> <i class="fa fa-usd"></i>7800</div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-primary w-75" role="progressbar" aria-valuenow="78"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card">
                <div class="stat-widget-two card-body">
                  <div class="stat-content">
                    <div class="stat-text">Task Completed</div>
                    <div class="stat-digit"> <i class="fa fa-usd"></i> 500</div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-warning w-50" role="progressbar" aria-valuenow="50"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card">
                <div class="stat-widget-two card-body">
                  <div class="stat-content">
                    <div class="stat-text">Task Completed</div>
                    <div class="stat-digit"> <i class="fa fa-usd"></i>650</div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-danger w-65" role="progressbar" aria-valuenow="65"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <!-- /# card -->
            </div>
            <!-- /# column -->
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Tambah Buku</h4>
                  <a href="buku.php">
                    <button class="btn btn-warning mb-3 font-weight-bold">Kembali</button>
                  </a>
                </div>
                <div class="card-body">
                  <form action="" method="POST">
                    <div class="row">
                      <div class="col">
                        <label>Nama Buku<small class="text-danger ms-1">*</small></label>
                        <div class="mb-3">
                          <input type="text"
                            class="form-control <?php echo isset($errors['nama_buku']) ? 'is-invalid' : ''; ?>"
                            name="nama_buku" placeholder="Nama Buku" aria-label="nama_buku Buku"
                            aria-describedby="nama_buku Buku-addon">
                          <?php if (isset($errors['nama_buku'])): ?>
                          <p class="text-danger"><?php echo $errors['nama_buku']; ?></p>
                          <?php endif; ?>
                        </div>
                        <!-- Penyesuaian nama input -->
                        <label>Kategori<small class="text-danger ms-1">*</small></label>
                        <div class="mb-3">
                          <input type="text"
                            class="form-control <?php echo isset($errors['kategori']) ? 'is-invalid' : ''; ?>"
                            name="kategori" placeholder="Kategori" aria-label="kategori"
                            aria-describedby="kategori-addon">
                          <!-- Penyesuaian validasi -->
                          <?php if (isset($errors['kategori'])): ?>
                          <p class="text-danger"><?php echo $errors['kategori']; ?></p>
                          <?php endif; ?>
                        </div>
                        <label>Kode<small class="text-danger ms-1">*</small></label>
                        <div class="mb-3">
                          <input type="text"
                            class="form-control <?php echo isset($errors['kode']) ? 'is-invalid' : ''; ?>" name="kode"
                            placeholder="Kode" aria-label="kode" aria-describedby="kode-addon">
                          <!-- Penyesuaian validasi -->
                          <?php if (isset($errors['kode'])): ?>
                          <p class="text-danger"><?php echo $errors['kode']; ?></p>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="col">
                        <label>Penerbit<small class="text-danger ms-1">*</small></label>
                        <div class="form-group mb-3">
                          <select class="form-control <?php echo isset($errors['penerbit']) ? 'is-invalid' : ''; ?>"
                            name="penerbit" aria-label="Default select example">
                            <option selected hidden></option>
                            <?php foreach ($penerbit as $item): ?>
                            <option value="<?php echo $item["id"]; ?>"><?php echo $item["nama"]; ?></option>
                            <?php endforeach; ?>
                          </select>
                          <!-- Penyesuaian validasi -->
                          <?php if (isset($errors['penerbit'])): ?>
                          <p class="text-danger"><?php echo $errors['penerbit']; ?></p>
                          <?php endif; ?>
                        </div>
                        <label>Harga<small class="text-danger ms-1">*</small></label>
                        <div class="mb-3">
                          <input type="text"
                            class="form-control <?php echo isset($errors['harga']) ? 'is-invalid' : ''; ?>" name="harga"
                            placeholder="Harga" aria-label="harga" aria-describedby="harga-addon">
                          <!-- Penyesuaian validasi -->
                          <?php if (isset($errors['harga'])): ?>
                          <p class="text-danger"><?php echo $errors['harga']; ?></p>
                          <?php endif; ?>
                        </div>
                        <label>Stok<small class="text-danger ms-1">*</small></label>
                        <div class="mb-3">
                          <input type="text"
                            class="form-control <?php echo isset($errors['stok']) ? 'is-invalid' : ''; ?>" name="stok"
                            placeholder="Stok" aria-label="stok" aria-describedby="stok-addon">
                          <!-- Penyesuaian validasi -->
                          <?php if (isset($errors['stok'])): ?>
                          <p class="text-danger"><?php echo $errors['stok']; ?></p>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" name="tambah" class="btn bg-primary w-100 mt-4 mb-0"><i
                          class="fas fa-plus"></i>&nbsp;&nbsp;Add
                        New Book</button>
                    </div>
                  </form>
                  <?php
                  if (isset($_POST["tambah"])) {
                    $nama_buku = $_POST['nama_buku'];
                    $kategori = $_POST['kategori'];
                    $kode = $_POST['kode'];
                    $penerbit = $_POST['penerbit'];
                    $harga = $_POST['harga'];
                    $stok = $_POST['stok'];

                    $query = "INSERT INTO buku(kode,kategori,nama_buku,harga,stok,penerbit_id)
                    VALUES ('$kode','$kategori','$nama_buku','$harga','$stok','$penerbit')";

                    mysqli_query($connect,$query);
                  }
                  header("location:buku.php");
                  ?>
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
      <!--**********************************
            Content body end
        ***********************************-->


      <!--**********************************
            Footer start
        ***********************************-->
      <div class="footer">
        <div class="copyright">
          <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
          <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p>
        </div>
      </div>
      <!--**********************************
          Footer end
        ***********************************-->

      <!--**********************************
          Support ticket button start
        ***********************************-->

      <!--**********************************
        Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="focus-2/vendor/global/global.min.js"></script>
    <script src="focus-2/js/quixnav-init.js"></script>
    <script src="focus-2/js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="focus-2/vendor/raphael/raphael.min.js"></script>
    <script src="focus-2/vendor/morris/morris.min.js"></script>


    <script src="focus-2/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="focus-2/vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="focus-2/vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="focus-2/vendor/flot/jquery.flot.js"></script>
    <script src="focus-2/vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="focus-2/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="focus-2/vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="focus-2/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="focus-2/vendor/jquery.counterup/jquery.counterup.min.js"></script>


    <script src="focus-2/js/dashboard/dashboard-1.js"></script>

  </body>

</html>