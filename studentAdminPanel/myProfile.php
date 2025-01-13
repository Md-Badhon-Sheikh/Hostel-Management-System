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

    <div class=" bg-gray-100 rounded-md shadow-md ml-52 w-full ">
      <div class="bg-gray-100 w-full justify-center items-center min-h-screen">
        <h1 class="text-2xl font-bold mb-4 ">Mohammad's Profile </h1>
        <div class="bg-white p-6 rounded-lg shadow-xl px-7 border-pink-300">
          <form action="#" method="POST" class="w-full ">
          
           
            <!-- Registration No -->
            <div class="flex mb-4 w-full">
              <label for="stayFrom" class="w-1/4 text-gray-700 text-right font-semibold">Registration No :</label>
              <input class="w-3/4 px-4 py-2 border border-gray-300 rounded ml-3" type="text" name="registration" id="stayFrom" placeholder="Enter Registration No">
            </div>

            <!-- Name -->
            <div class="flex mb-4 w-full">
              <label for="stayFrom" class="w-1/4 text-gray-700 text-right font-semibold">Full Name :</label>
              <input class="w-3/4 px-4 py-2 border border-gray-300 rounded ml-3" type="text" name="name" id="stayFrom" placeholder="Enter Your Full Name">
            </div>

            <!-- Gender -->
            <div class="flex mb-4 w-full">
              <label for="stayFrom" class="w-1/4 text-gray-700 text-right font-semibold">Gender :</label>
              <input type="radio" name="gender" id="" class="p-3  ml-3 mr-3">
              <label for="food" class="text-gray-600 mr-3">Male</label>
              <input type="radio" name="gender" id="" class="p-3  ml-3 mr-3">
              <label for="food" class="text-gray-600 mr-3">Female</label>
            </div>

            <!-- Contact -->
            <div class="flex mb-4 w-full">
              <label for="stayFrom" class="w-1/4 text-gray-700 text-right font-semibold">Contact No :</label>
              <input class="w-3/4 px-4 py-2 border border-gray-300 rounded ml-3" type="text" name="number" id="stayFrom" placeholder="Enter Your Contact No">
            </div>

            <!-- Email -->
            <div class="flex mb-4 w-full">
              <label for="stayFrom" class="w-1/4 text-gray-700 text-right font-semibold"> Email :</label>
              <input class="w-3/4 px-4 py-2 border border-gray-300 rounded ml-3" type="email" name="email" id="stayFrom" placeholder="Enter Your Email">
            </div>

            <!-- Address  -->
            <h1 class="text-2xl font-bold my-6 text-blue-900">Permanent Address</h1>

            <!-- Address -->
            <div class="flex mb-4 w-full">
              <label for="stayFrom" class="w-1/4 text-gray-700 text-right font-semibold"> Address :</label>
              <textarea name="address" id="" class="w-3/4 px-4 py-2 border border-gray-300 rounded ml-3 h-40 " placeholder="Enter Your Address"></textarea>
            </div>

            <!-- District -->
            <div class="flex mb-4 w-full">
              <label for="stayFrom" class="w-1/4 text-gray-700 text-right font-semibold"> District :</label>
              <input class="w-3/4 px-4 py-2 border border-gray-300 rounded ml-3" type="text" name="district" id="stayFrom" placeholder="Enter Your District">
            </div>

            <!-- Upazila -->
            <div class="flex mb-4 w-full">
              <label for="stayFrom" class="w-1/4 text-gray-700 text-right font-semibold"> Upazila/P.S :</label>
              <input class="w-3/4 px-4 py-2 border border-gray-300 rounded ml-3" type="text" name="upazila" id="stayFrom" placeholder="Enter Your Upazila">
            </div>

            <!-- Post Office -->
            <div class="flex mb-4 w-full">
              <label for="stayFrom" class="w-1/4 text-gray-700 text-right font-semibold"> Post Office :</label>
              <input class="w-3/4 px-4 py-2 border border-gray-300 rounded ml-3" type="text" name="upazila" id="stayFrom" placeholder="Enter Your Post Office">
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
              <label for="duration" class="w-1/4 text-gray-700 font-semibold"></label>

              <button name="submit" type="submit" class=" btn btn-success bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 ">
                Submit
              </button>

              <!-- btn cancel  -->

              <!-- <button name="submit" type="submit" class=" btn btn-active btn-ghost bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 ">
                Submit
              </button> -->
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