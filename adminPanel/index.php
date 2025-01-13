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
  <title>Welcome To Hostel Manage System</title>
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

        <!-- card 1-->
        <div class="report-card">
          <div class="card">
            <div class="card-body flex flex-col">

              <!-- top -->
              <div class="flex flex-row justify-between items-center">
                <div class="h6 text-indigo-700 fad fa-users""></div>
                <span class=" rounded-full text-white badge bg-teal-400 text-xs">
                  12%
                  <i class="fal fa-chevron-up ml-1"></i>
                  </span>
                </div>
                <!-- end top -->

                <!-- bottom -->
                <div class="mt-8">
                  <h1 class="h5 num-4">35</h1>
                  <p>Total Student</p>
                </div>
                <!-- end bottom -->

              </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
          </div>
          <!-- end card -->


          <!-- card 2-->
          <a href="displayRoom.php">
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

                  <!-- display total rooms  -->
                  <?php
                  $display = $conn->query("SELECT * FROM add_room");
                  $counter = 1;
                  while (list($id, $room_no) = $display->fetch_row()) {
                    $rooms = $counter++;
                  }

                  ?>
                  <!-- bottom -->
                  <div class="mt-8">
                    <h1 class="h5 num-4"> <?php
                                          echo "$rooms";
                                          ?></h1>
                    <p>Total Rooms</p>
                  </div>
                  <!-- end bottom -->

                </div>
              </div>
              <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
            </div>
          </a>
          <!-- end card -->

          <!-- card 3-->
          <div class="report-card">
            <div class="card">
              <div class="card-body flex flex-col">

                <!-- top -->
                <div class="flex flex-row justify-between items-center">
                  <div class="h6 text-yellow-600 fad fa-sitemap"></div>
                  <span class="rounded-full text-white badge bg-teal-400 text-xs">
                    72%
                    <i class="fal fa-chevron-up ml-1"></i>
                  </span>
                </div>
                <!-- end top -->

                <!-- bottom -->
                <div class="mt-8">
                  <h1 class="h5 num-4">25</h1>
                  <p>Total Course</p>
                </div>
                <!-- end bottom -->

              </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
          </div>
          <!-- end card -->


          <!-- card 4-->
          <div class="report-card">
            <div class="card">
              <div class="card-body flex flex-col">

                <!-- top -->
                <div class="flex flex-row justify-between items-center">
                  <div class="h6 text-green-700 fad fa-users"></div>
                  <span class="rounded-full text-white badge bg-teal-400 text-xs">
                    150%
                    <i class="fal fa-chevron-up ml-1"></i>
                  </span>
                </div>
                <!-- end top -->

                <!-- bottom -->
                <div class="mt-8">
                  <h1 class="h5 num-4">38</h1>
                  <p>Registered Complaints</p>
                </div>
                <!-- end bottom -->

              </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
          </div>
          <!-- end card -->


          <!-- card 5-->
          <div class="report-card">
            <div class="card">
              <div class="card-body flex flex-col">

                <!-- top -->
                <div class="flex flex-row justify-between items-center">
                  <div class="h6 text-green-700 fad fa-users"></div>
                  <span class="rounded-full text-white badge bg-teal-400 text-xs">
                    150%
                    <i class="fal fa-chevron-up ml-1"></i>
                  </span>
                </div>
                <!-- end top -->

                <!-- bottom -->
                <div class="mt-8">
                  <h1 class="h5 num-4">38</h1>
                  <p>In Process Complaints</p>
                </div>
                <!-- end bottom -->

              </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
          </div>
          <!-- end card -->

          <!-- card 6-->
          <div class="report-card">
            <div class="card">
              <div class="card-body flex flex-col">

                <!-- top -->
                <div class="flex flex-row justify-between items-center">
                  <div class="h6 text-green-700 fad fa-users"></div>
                  <span class="rounded-full text-white badge bg-teal-400 text-xs">
                    150%
                    <i class="fal fa-chevron-up ml-1"></i>
                  </span>
                </div>
                <!-- end top -->

                <!-- bottom -->
                <div class="mt-8">
                  <h1 class="h5 num-4">38</h1>
                  <p>Closed Complaints</p>
                </div>
                <!-- end bottom -->

              </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
          </div>
          <!-- end card -->

          <!-- card 7-->
          <div class="report-card">
            <div class="card">
              <div class="card-body flex flex-col">

                <!-- top -->
                <div class="flex flex-row justify-between items-center">
                  <div class="h6 text-green-700 fad fa-users"></div>
                  <span class="rounded-full text-white badge bg-teal-400 text-xs">
                    150%
                    <i class="fal fa-chevron-up ml-1"></i>
                  </span>
                </div>
                <!-- end top -->

                <!-- bottom -->
                <div class="mt-8">
                  <h1 class="h5 num-4">38</h1>
                  <p>Total Feedback</p>
                </div>
                <!-- end bottom -->

              </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
          </div>
          <!-- end card -->
          <!-- card 8-->
          <div class="report-card">
            <div class="card">
              <div class="card-body flex flex-col">

                <!-- top -->
                <div class="flex flex-row justify-between items-center">
                  <div class="h6 text-green-700 fad fa-users"></div>
                  <span class="rounded-full text-white badge bg-teal-400 text-xs">
                    150%
                    <i class="fal fa-chevron-up ml-1"></i>
                  </span>
                </div>
                <!-- end top -->

                <!-- bottom -->
                <div class="mt-8">
                  <h1 class="h5 num-4">38</h1>
                  <p>Total Feedback</p>
                </div>
                <!-- end bottom -->

              </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
          </div>
          <!-- end card -->

        </div>



        <!-- End General Report -->

        <!-- strat Analytics -->
        <div class="mt-6 grid grid-cols-2 gap-6 xl:grid-cols-1">

          <!-- carts -->
          <div class="flex flex-col">
            <!-- end alert -->

            <!-- charts -->
            <div class="grid grid-cols-2 gap-6 h-full">

              <div class="card">
                <div class="py-3 px-4 flex flex-row justify-between">
                  <h1 class="h6">
                    <span class="num-4"></span>45 k
                    <p></p>
                  </h1>

                  <div
                    class="bg-teal-200 text-teal-700 border-teal-300 border w-10 h-10 rounded-full flex justify-center items-center">
                    <i class="fad fa-eye"></i>
                  </div>
                </div>
                <div class="analytics_1"></div>
              </div>

              <div class="card">
                <div class="py-3 px-4 flex flex-row justify-between">
                  <h1 class="h6">
                    <span class="num-2"></span>k
                    <p>Unique Users</p>
                  </h1>

                  <div
                    class="bg-indigo-200 text-indigo-700 border-indigo-300 border w-10 h-10 rounded-full flex justify-center items-center">
                    <i class="fad fa-users-crown"></i>
                  </div>
                </div>
                <div class="analytics_1"></div>
              </div>

            </div>
            <!-- charts    -->

          </div>
        </div>
        <!-- end content -->

      </div>
      <!-- end wrapper -->

      <!-- script -->
      <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
      <script src="js/scripts.js"></script>
      <!-- end script -->

</body>

</html>