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

    <div class=" flex items-center justify-center px-4">
      <div class="bg-white shadow-lg rounded-lg max-w-md w-full p-8">
        <!-- Header -->
        <div class="text-center mb-6">
          <h2 class="text-2xl font-bold text-gray-800">Change Password</h2>
          <p class="text-gray-600 text-sm">Update your account's password</p>
        </div>

        <!-- Change Password Form -->
        <form method="POST" action="">
          <!-- Current Password -->
          <div class="mb-4">
            <label for="current_password" class="block text-gray-700 mb-2">
              Current Password
            </label>
            <input
              type="password"
              id="current_password"
              name="current_password"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-blue-400 focus:outline-none"
              placeholder="Enter your current password"
              required />
          </div>

          <!-- New Password -->
          <div class="mb-4">
            <label for="new_password" class="block text-gray-700 mb-2">
              New Password
            </label>
            <input
              type="password"
              id="new_password"
              name="new_password"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-blue-400 focus:outline-none"
              placeholder="Enter your new password"
              required />
          </div>

          <!-- Confirm New Password -->
          <div class="mb-6">
            <label for="confirm_password" class="block text-gray-700 mb-2">
              Confirm New Password
            </label>
            <input
              type="password"
              id="confirm_password"
              name="confirm_password"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-blue-400 focus:outline-none"
              placeholder="Confirm your new password"
              required />
          </div>

          <!-- Submit Button -->
          <button
            type="submit"
            class="w-full py-3 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition duration-300">
            Update Password
          </button>
        </form>

        <!-- Footer Links -->
        <div class="mt-6 text-center text-sm text-gray-500">
          <a href="login.php" class="text-blue-500 hover:underline">
            Back to Login
          </a>
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