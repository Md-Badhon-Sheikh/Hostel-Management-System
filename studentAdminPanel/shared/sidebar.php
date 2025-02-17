<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="./img/fav.png" type="image/x-icon">
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

  <title>Welcome To Cleopatra</title>
</head>

<body class="bg-gray-100">

  <div id="sideBar"
    class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">


    <!-- sidebar content -->
    <div class="flex flex-col">

      <!-- sidebar toggle -->
      <div class="text-right hidden md:block mb-4">
        <button id="sideBarHideBtn">
          <i class="fad fa-times-circle"></i>
        </button>
      </div>
      <!-- end sidebar toggle -->

      <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">homes</p>

      <!-- link -->
      <a href="index.php"
        class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-chart-pie text-xs mr-2"></i>
        Dashboard
      </a>
      <!-- end link -->

      <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">apps</p>

      <!-- link -->
      <a href="bookHostel.php"
        class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fa-solid fa-file"></i>
        Book Hostel
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="roomDetails.php" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
      <i class="fa-regular fa-file"></i>
        Room Details
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="complainRegistration.php" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
      <i class="fa-solid fa-file"></i>
        Complaint Registration
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="registeredComplain.php" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
      <i class="fa-solid fa-file-circle-check"></i>
       Registered Complaints
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="feedback.php" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
      <i class="fa-regular fa-comment-dots"></i>
        Feedback
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="myProfile.php" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
      <i class="fa-solid fa-user"></i>
        My Profile
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="changePassword.php" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
      <i class="fa-solid fa-key"></i>
        Change Password
      </a>
      <!-- end link -->

    </div>
    <!-- end sidebar content -->

  </div>

  <!-- script -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="js/scripts.js"></script>
  <!-- end script -->

</body>

</html>