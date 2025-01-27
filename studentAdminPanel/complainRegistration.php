<?php
include_once('../db_root.php');
session_start();

if (!isset($_SESSION['mySession'])) {
  header('location:../index.php');
}

if (isset($_POST['upload'])) {
  $complain_type = $_POST['c_type'];
  $complain_explain = $_POST['c_explain'];
  $file = $_FILES['image'];
  $fileName = $file['name'];
  $tmpName = $file['tmp_name'];

  $img = 'complain_image/';
  move_uploaded_file($tmpName, $img . $fileName);

  $insert = "INSERT INTO complain (c_type, c_explain) VALUES ('$complain_type', '$complain_explain')";
  if(mysqli_query($conn, $insert) == TRUE){
    header('location: registeredComplain.php');
  }
  else{
    echo "Not Insert data";
  }
 
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
        <div class="bg-white p-6 rounded-lg shadow-xl px-7">
          <h1 class="text-4xl font-bold mb-5 ">Register Complaint</h1>
          <form action="#" method="POST" class="w-full " enctype="multipart/form-data">
            <div class="border-8">

              <!-- Complain type-->
              <div class="flex mb-4 w-full">
                <label for="roomNumber" class="w-1/4 text-gray-700 text-right font-semibold">Complaint Type :</label>
                <select name="c_type" id="" class="w-3/4 py-2 px-4 border border-gray-300 rounded ml-3">
                  <option value="Not selected" aria-placeholder="Select Room Number">Select Complain</option>
                  <option value="Food Related" aria-placeholder="Select Room Number">Food Related</option>
                  <option value="Room Related" aria-placeholder="Select Room Number">Room Related</option>
                  <option value="Fee Related" aria-placeholder="Select Room Number">Fee Related</option>
                  <option value="Electrical" aria-placeholder="Select Room Number">Electrical</option>
                  <option value="Plumbing" aria-placeholder="Select Room Number">Plumbing</option>
                  <option value="Discipline" aria-placeholder="Select Room Number">Discipline</option>
                  <option value="Other" aria-placeholder="Select Room Number">Other</option>
                </select>
              </div>


              <!-- Complain -->
              <div class="flex mb-4 w-full">
                <label for="stayFrom" class="w-1/4 text-gray-700 text-right font-semibold"> Explain the Complaint :</label>
                <textarea name="c_explain" id="" class="w-3/4 px-4 py-2 border border-gray-300 rounded ml-3 h-40 " placeholder="Enter Your Complain"></textarea>
              </div>


              <!-- File Upload -->
              <div class="flex mb-4 w-full">
                <label for="stayFrom" class="w-1/4 text-gray-700 text-right font-semibold"> File (if any) :</label>
                <input class="w-3/4 px-4 py-2 border border-gray-300 rounded ml-3" type="file" name="image" id="stayFrom" placeholder="Enter Your Post Office">
              </div>

              <!-- Submit Button -->
              <div class="flex justify-center">
                <label for="duration" class="w-1/4 text-gray-700 font-semibold"></label>

                <button name="upload" type="submit" class=" btn btn-success bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 ">
                  Submit
                </button>

                <!-- btn cancel  -->

                <!-- <button name="submit" type="submit" class=" btn btn-active btn-ghost bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 ">
                 Submit
                </button> -->
              </div>
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