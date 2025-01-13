<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hostel Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.22/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

  <link rel="stylesheet" href="./style.css">
</head>

<body class="bg-gray-100">

  <!-- navbar  -->
  <?php
  include('component/nav.php');
  ?>
  <!-- nav end  -->

  <!-- carousal -->
  <?php
  include('component/header.php');
  ?>
  <!-- carousal end -->

  <!-- Rooms section  -->


  <!-- hero -->
  <div class="my-12">
    <div class="text-center p-5 ">
      <h1 class="text-5xl font-bold uppercase py-5 text-orange-500">Book your Stay?</h1>
      <!-- <p class="text-l font-semibold uppercase text-orange-300">more accomodations</p> -->
    </div>
    <div class="hero bg-base-200">
      <div class="hero-content flex-col lg:flex-row">
        <img
          src="images/room.jpg"
          class="max-w-lg rounded-lg shadow-2xl" />
        <div class="p-12">
          <h1 class="text-5xl font-bold uppercase">Hello!</h1>
          <p class="py-6 text-justify">
          Our hostel is located in the city’s finest and trendiest district. Everyone who is interested in being a part of the creative and cutting-edge world that is New York, you are welcome to CityHostel for the best experience.
          </p>
          <button class="btn btn-primary uppercase">More About Us</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php
  include('component/footer.php');
  ?>

  <script src="./min.js"></script>
</body>

</html>