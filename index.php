<?php
require "config.php";
$search = $_GET["cari"];
if (isset($search)) {
  $buku = mysqli_query($connect, "SELECT * FROM buku WHERE nama_buku LIKE '%$search%' ");
} else {
  $buku = mysqli_query($connect, "SELECT * FROM buku");
}
// $buku = mysqli_query($connect, "SELECT * FROM buku");
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
                    <form method="GET">
                      <div>
                        <input class="form-control" type="search" name="cari" placeholder="Search" aria-label="Search">
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
                <h4>DASHBOARD</h4>
              </div>
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
                  <h4 class="card-title">Data Buku</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-responsive-sm">
                      <thead>
                        <tr>
                          <th class="text-dark">ID Buku</th>
                          <th class="text-dark">Kategori</th>
                          <th class="text-dark">Nama Buku</th>
                          <th class="text-dark">Harga</th>
                          <th class="text-dark">Stok</th>
                          <th class="text-dark">Penerbit</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        foreach ($buku as $book) {
                        ?>
                        <tr>
                          <th><?= $book["kode"] ?></th>
                          <th><?= $book["kategori"] ?></th>
                          <th><?= $book["nama_buku"] ?></th>
                          <th><?= $book["harga"] ?></th>
                          <th><?= $book["stok"] ?></th>
                          <?php
                          foreach ($penerbit as $nerbit) {
                          if ($book["penerbit_id"] == $nerbit["id"]) {
                          ?>
                          <th><?= $nerbit["nama"] ?></th>
                          <?php
                            }
                          }
                          ?>
                        </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Sales Overview</h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-xl-12 col-lg-8">
                      <div id="morris-bar-chart"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
              <div class="card">
                <div class="card-body text-center">
                  <div class="m-t-10">
                    <h4 class="card-title">Customer Feedback</h4>
                    <h2 class="mt-3">385749</h2>
                  </div>
                  <div class="widget-card-circle mt-5 mb-5" id="info-circle-card">
                    <i class="ti-control-shuffle pa"></i>
                  </div>
                  <ul class="widget-line-list m-b-15">
                    <li class="border-right">92% <br><span class="text-success"><i class="ti-hand-point-up"></i>
                        Positive</span></li>
                    <li>8% <br><span class="text-danger"><i class="ti-hand-point-down"></i>Negative</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-12 col-xxl-12 col-xl-12 col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Product Sold</h4>
                  <div class="card-action">
                    <div class="dropdown custom-dropdown">
                      <div data-toggle="dropdown">
                        <i class="ti-more-alt"></i>
                      </div>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Option 1</a>
                        <a class="dropdown-item" href="#">Option 2</a>
                        <a class="dropdown-item" href="#">Option 3</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart py-4">
                    <canvas id="sold-product"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-12 col-xxl-6 col-lg-6 col-md-12">
              <div class="row">
                <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6">
                  <div class="card">
                    <div class="social-graph-wrapper widget-facebook">
                      <span class="s-icon"><i class="fa fa-facebook"></i></span>
                    </div>
                    <div class="row">
                      <div class="col-6 border-right">
                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                          <h4 class="m-1"><span class="counter">89</span> k</h4>
                          <p class="m-0">Friends</p>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                          <h4 class="m-1"><span class="counter">119</span> k</h4>
                          <p class="m-0">Followers</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6">
                  <div class="card">
                    <div class="social-graph-wrapper widget-linkedin">
                      <span class="s-icon"><i class="fa fa-linkedin"></i></span>
                    </div>
                    <div class="row">
                      <div class="col-6 border-right">
                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                          <h4 class="m-1"><span class="counter">89</span> k</h4>
                          <p class="m-0">Friends</p>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                          <h4 class="m-1"><span class="counter">119</span> k</h4>
                          <p class="m-0">Followers</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6">
                  <div class="card">
                    <div class="social-graph-wrapper widget-googleplus">
                      <span class="s-icon"><i class="fa fa-google-plus"></i></span>
                    </div>
                    <div class="row">
                      <div class="col-6 border-right">
                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                          <h4 class="m-1"><span class="counter">89</span> k</h4>
                          <p class="m-0">Friends</p>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                          <h4 class="m-1"><span class="counter">119</span> k</h4>
                          <p class="m-0">Followers</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6">
                  <div class="card">
                    <div class="social-graph-wrapper widget-twitter">
                      <span class="s-icon"><i class="fa fa-twitter"></i></span>
                    </div>
                    <div class="row">
                      <div class="col-6 border-right">
                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                          <h4 class="m-1"><span class="counter">89</span> k</h4>
                          <p class="m-0">Friends</p>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                          <h4 class="m-1"><span class="counter">119</span> k</h4>
                          <p class="m-0">Followers</p>
                        </div>
                      </div>
                    </div>
                  </div>
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