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
  <link rel="shortcut icon" href="img/fav.png" type="image/x-icon">
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Welcome To Hostel Management System</title>

</head>

<body class="bg-gray-100">
  <!-- start navbar -->
  <?php
  include('shared/header.php');
  ?>
  <!-- end navbar -->

  <!-- strat wrapper -->
  <div class=" flex w-full">

    <!-- start sidebar -->
    <?php
    include('shared/sidebar.php')
    ?>


    <!-- end side bar -->

    <!-- add room from  -->

    <div class=" p-8 bg-gray-100 rounded-md shadow-md ml-52 w-full ">
      <div class="bg-gray-100 w-full justify-center items-center min-h-screen">
        <div class="bg-white p-6 rounded-lg shadow-xl px-7">
          <h1 class="text-2xl font-bold mb-4 text-center">Room Related info</h1>
          <form action="#" method="POST" class="w-full ">
            <!-- Room Number -->
            <div class="flex mb-4 w-full">
              <label for="roomNumber" class="w-1/4 text-gray-700 text-right font-semibold">Room No :</label>
              <input class="w-3/4 py-2 px-4 border border-gray-300 rounded ml-3" type="text" name="roomNumber" id="roomNumber" placeholder="Enter Room Number" />
            </div>


            <!-- Seater -->
            <div class="flex mb-4 w-full">
              <label for="seater" class="w-1/4 text-gray-700  text-right font-semibold">Seater :</label>
              <input class="w-3/4 px-4 py-2 border border-gray-300 rounded ml-3" type="text" name="seater" id="seater" placeholder="Enter Seater">
            </div>

            <!-- Fees Per Month -->
            <div class="flex mb-4 w-full">
              <label for="fees" class="w-1/4 text-gray-700  text-right font-semibold">Fees Per Month :</label>
              <input class="w-3/4 px-4 py-2 border border-gray-300 rounded ml-3" type="text" name="fees" id="fees" placeholder="Enter Fee">
            </div>

            <!-- Stay From -->
            <div class="flex mb-4 w-full">
              <label for="stayFrom" class="w-1/4 text-gray-700 text-right font-semibold">Stay From :</label>
              <input class="w-3/4 px-4 py-2 border border-gray-300 rounded ml-3" type="text" name="stayFrom" id="stayFrom" placeholder="Enter Stay From">
            </div>

            <!-- Duration -->
            <div class="flex mb-4 w-full">
              <label for="duration" class="w-1/4 text-gray-700 text-right font-semibold">Duration :</label>
              <input class="w-3/4 px-4 py-2 border border-gray-300 rounded ml-3" type="text" name="duration" id="duration" placeholder="Enter Duration">
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
              <label for="duration" class="w-1/4 text-gray-700 font-semibold"></label>

              <button name="submit" type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Submit
              </button>
            </div>
          </form>
        </div>
      </div>

    </div>

  </div>



  <!-- script -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="js/scripts.js"></script>
  <!-- end script -->

</body>

</html>