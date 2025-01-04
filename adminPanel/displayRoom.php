<?php
include_once('../db_root.php');
session_start();

if (!isset($_SESSION['mySession'])) {
  header('location:../index.php');
}

if (isset($_POST['submit'])) {
  $roomNo = $_POST['roomNo'];
  $sets = $_POST['sets'];
  $fee = $_POST['fee'];

  $conn->query("CALL rooms('$roomNo','$sets', '$fee' )");
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

      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="px-6 py-3">SL</th>
            <th scope="col" class="px-6 py-3">Room No</th>
            <th scope="col" class="px-6 py-3">Set's</th>
            <th scope="col" class="px-6 py-3">Fee Per Month</th>
            <th scope="col" class="px-6 py-3">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if (!$conn) {
            die('Connection Failed' . mysqli_connect_errno());
          } else {

            $display = $conn->query("SELECT * FROM add_room");
            $count = 1;
            while (list($id, $room_no, $sets, $fee) = $display->fetch_row()) {
              $sl = $count++;
              echo " <tr class='bg-white border-b dark:bg-gray-800 dark:border-gray-700'>
            <td class='px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap'>$sl</td>
            <td class='px-6 py-4'>$room_no</td>
            <td class='px-6 py-4'>$sets</td>
            <td class='px-6 py-4'>$fee</td>
            <td class='px-6 py-4'>
              <button class='text-blue-600 hover:underline'>Edit</button>
              <button class='text-red-600 hover:underline ml-4'>Delete</button>
            </td>
          </tr>";
            }
          }
          ?>
         
        </tbody>
      </table>


    </div>

  </div>
  <!-- script -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="js/scripts.js"></script>
  <!-- end script -->

</body>

</html>