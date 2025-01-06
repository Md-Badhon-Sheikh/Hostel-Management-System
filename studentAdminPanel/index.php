<?php
include_once('../db_root.php');
session_start();

if (!isset($_SESSION['mySession'])) {
  header('location:../index.php');
}


?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="./img/fav.png" type="image/x-icon">
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Welcome To Cleopatra</title>
</head>

<body class="bg-gray-100">


  <!-- start navbar -->
  <?php
  include('shared/header.php');
  ?>
  <!-- end navbar -->


  <!-- strat wrapper -->
  <div class="h-screen flex flex-row flex-wrap">

    <!-- start sidebar -->
    <?php
    include('shared/sidebar.php')
    ?>
    <!-- end sidbar -->

    <!-- strat content -->
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">

      <!-- General Report -->
      <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

        <!-- card -->
        <div class="report-card">
          <div class="card">
            <div class="card-body flex flex-col">

              <!-- top -->
              <div class="flex flex-row justify-between items-center">
                <div class="h6 text-indigo-700 fad fa-shopping-cart"></div>
                <span class="rounded-full text-white badge bg-teal-400 text-xs">
                  12%
                  <i class="fal fa-chevron-up ml-1"></i>
                </span>
              </div>
              <!-- end top -->

              <!-- bottom -->
              <div class="mt-8">
                <h1 class="h5 num-4"></h1>
                <p>Total Student</p>
              </div>
              <!-- end bottom -->

            </div>
          </div>
          <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <!-- end card -->


        <!-- card -->
        <div class="report-card">
          <div class="card">
            <div class="card-body flex flex-col">

              <!-- top -->
              <div class="flex flex-row justify-between items-center">
                <div class="h6 text-red-700 fad fa-store"></div>
                <span class="rounded-full text-white badge bg-red-400 text-xs">
                  6%
                  <i class="fal fa-chevron-down ml-1"></i>
                </span>
              </div>
              <!-- end top -->
              <!-- bottom -->
              <div class="mt-8">
                <h1 class="h5 num-4"></h1>
                <a href="displayRoom.php"><p>Total Rooms</p></a>
              </div>
              <!-- end bottom -->

            </div>
          </div>
          <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <!-- end card -->
        <!-- end card -->
      </div>
      <!-- End General Report -->
      <!-- end content -->

    </div>
    <!-- end wrapper -->

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="js/scripts.js"></script>
    <!-- end script -->

</body>

</html>