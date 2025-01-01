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
    <!-- end side bar -->

       <!-- add room from  -->

       <div class="max-w-2xl mx-auto p-8 bg-gray-100 rounded-md shadow-md">
      <h2 class="text-2xl font-semibold text-gray-700 mb-6">Edit Hostel Room Details</h2>

      <form>
        <!-- Sector Input -->
        <div class="mb-4">
          <label for="sector" class="block text-sm font-medium text-gray-600 mb-2">Seater</label>
          <input
            type="text"
            id="sector"
            name="sector"
            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
            placeholder="5" />
        </div>

        <!-- Room No Input -->
        <div class="mb-4">
          <label for="room-no" class="block text-sm font-medium text-gray-600 mb-2">Room no</label>
          <input
            type="text"
            id="room-no"
            name="room-no"
            class="w-full px-4 py-2 border border-gray-300 rounded-md bg-gray-200 text-gray-500"
            placeholder="Room no can't be changed"
            disabled />
        </div>

        <!-- Fee Input -->
        <div class="mb-6">
          <label for="fee" class="block text-sm font-medium text-gray-600 mb-2">Fee (PM)</label>
          <input
            type="text"
            id="fee"
            name="fee"
            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
            placeholder="5000" />
        </div>

        <!-- Submit Button -->
        <div class="text-center">
          <button
            type="submit"
            class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
            Update Room Details
          </button>
        </div>
      </form>
    </div>

  </div>
  <!-- script -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="js/scripts.js"></script>
  <!-- end script -->

</body>

</html>