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
  <div class=" flex w-full">

    <!-- start sidebar -->
      <?php
      include('shared/sidebar.php')
      ?>

  
    <!-- end side bar -->

    <!-- add room from  -->

    <div class=" p-8 bg-gray-100 rounded-md shadow-md ml-52 w-full ">
      <h2 class="text-2xl font-semibold text-gray-700 mb-6">Edit Hostel Room Details</h2>


      <div class="bg-gray-100 justify-center items-center min-h-screen">
        <div class="bg-white p-6 rounded-lg shadow-lg w-9/12">
          <h1 class="text-2xl font-bold mb-4 text-center">Room Details Form</h1>
          <form action="#" method="POST">
          <input type="text" name="id" value="<?php echo $id ?>" hidden>
            <!-- Room Number -->
            <div class="mb-4">
              <label for="roomNo" class="block text-sm font-medium text-gray-700">Room Number</label>
              <input type="text" id="roomNo" name="roomNo" value="<?php echo $roomNo ?>" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Sets -->
            <div class="mb-4">
              <label for="sets" class="block text-sm font-medium text-gray-700">Number of Sets</label>
              <input type="number" id="sets" name="sets" value="<?php echo $sets ?>" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Fee Per Month -->
            <div class="mb-4">
              <label for="fee" class="block text-sm font-medium text-gray-700">Fee Per Month</label>
              <input type="number" id="fee" name="fee" value="<?php echo $fee ?>" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Submit Button -->
            <div>
              <button name="update" type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Update
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