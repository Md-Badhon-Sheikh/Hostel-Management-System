<?php
include_once('../db_root.php'); // Ensure the file path is correct
session_start();

if (!isset($_SESSION['mySession'])) {
  header('location:../index.php');
  exit; // Always exit after header redirection
}

if (isset($_GET['room_id'])) {
  $room_id = $_GET['room_id'];

  // Ensure PDO connection works
  if ($pdo) {
    $query = "SELECT fee, t_sets AS set FROM add_room WHERE id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$room_id]);
    $room = $stmt->fetch(PDO::FETCH_ASSOC);

    // Return JSON response
    if ($room) {
      echo json_encode($room);
    } else {
      echo json_encode(['fee' => '', 'set' => '']); // Empty data if no match found
    }
  } else {
    echo json_encode(['error' => 'Database connection failed']);
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

    <div class=" p-8 bg-gray-100 rounded-md shadow-md ml-52 w-full ">
      <div class="bg-gray-100 w-full justify-center items-center min-h-screen">
        <div class="bg-white p-6 rounded-lg shadow-xl px-7">
          <h1 class="text-2xl font-bold mb-4 ">Room Related info</h1>
          <form action="#" method="POST" class="w-full ">
            <!-- Room Number -->
            <div class="flex mb-4 w-full">
              <label for="roomNumber" class="w-1/4 text-gray-700 text-right font-semibold">Room No :</label>
              <select name="room" id="room" class="w-3/4 py-2 px-4 border border-gray-300 rounded ml-3">
                <option>Select Room</option>
                <?php
                $roomList = $conn->query('SELECT id, room_no FROM add_room');
                while ($row = $roomList->fetch_assoc()) {
                  echo "<option value='{$row['id']}'>{$row['room_no']}</option>";
                }
                ?>

              </select>
            </div>

            <!-- Seater -->
            <div class="flex mb-4 w-full">
              <label for="seater" class="w-1/4 text-gray-700  text-right font-semibold">Seater :</label>
              <input value='' class='w-3/4 px-4 py-2 border border-gray-300 rounded ml-3' type='text' name='set' id='set' placeholder='Enter Seater' readonly>
            </div>


            <!-- Fees Per Month -->
            <div class="flex mb-4 w-full">
              <label for="fees" class="w-1/4 text-gray-700  text-right font-semibold">Fees Per Month :</label>
              <input class="w-3/4 px-4 py-2 border border-gray-300 rounded ml-3" type="text" name="fee" id="fee" placeholder="Enter Fee" readonly>
            </div>

            <!-- Food Status -->
            <div class="flex mb-4 w-full">
              <label for="stayFrom" class="w-1/4 text-gray-700 text-right font-semibold">Food Status :</label>
              <input type="radio" name="food" id="" class="p-3  ml-3 mr-3" value="Without Food">
              <label for="food" class="text-gray-600 mr-3">Without Food</label>
              <input type="radio" name="food" id="" class="p-3  ml-3 mr-3">
              <label for="food" class="text-gray-600 mr-3">With Food (TK 2000.00 Per Month Extra)</label>
            </div>

            <!-- Stay From -->
            <div class="flex mb-4 w-full">
              <label for="stayFrom" class="w-1/4 text-gray-700 text-right font-semibold">Stay From :</label>
              <input class="w-3/4 px-4 py-2 border border-gray-300 rounded ml-3" type="date" name="stayFrom" id="stayFrom" placeholder="Enter Stay From">
            </div>

            <!-- Duration -->
            <div class="flex mb-4 w-full">
              <label for="duration" class="w-1/4 text-gray-700 text-right font-semibold">Duration :</label>
              <select name="room" id="" class="w-3/4 py-2 px-4 border border-gray-300 rounded ml-3">
                <option value="">Select Duration in Month</option>
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
                <option value="">6</option>
                <option value="">7</option>
                <option value="">8</option>
                <option value="">9</option>
                <option value="">10</option>
                <option value="">11</option>
                <option value="">12</option>
              </select>
            </div>

            <!-- personal info  -->
            <h1 class="text-2xl font-bold my-6 text-blue-900">Room Related info</h1>

            <!-- Course -->
            <div class="flex mb-4 w-full">
              <label for="roomNumber" class="w-1/4 text-gray-700 text-right font-semibold">Course :</label>
              <select name="room" id="" class="w-3/4 py-2 px-4 border border-gray-300 rounded ml-3">
                <option value="" aria-placeholder="Select Room Number">Select Course</option>
                <option value="" aria-placeholder="Select Room Number">Bachelor of Technology (B.Tech)</option>
                <option value="" aria-placeholder="Select Room Number">Bachelor Of commerce (B.Com)</option>
                <option value="" aria-placeholder="Select Room Number">Bachelor of Science (BSC)</option>
                <option value="" aria-placeholder="Select Room Number">Bachelor Of Computer Application (BCA)</option>
                <option value="" aria-placeholder="Select Room Number">Master of Computer Application (MCA)</option>
                <option value="" aria-placeholder="Select Room Number">Bachelor of Engineering (BE)</option>
              </select>
            </div>

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

  <script>
    document.getElementById('room').addEventListener('change', function() {
      const roomId = this.value;
      if (roomId) {
        fetch(`../fetch_room.php?room_id=${roomId}`)
          .then(response => {
            if (!response.ok) {
              throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.json();
          })
          .then(data => {
            console.log('Fetched Data:', data); // Debugging: Log fetched data
            document.getElementById('fee').value = data.fee || '';
            document.getElementById('set').value = data.set || '';
          })
          .catch(error => console.error('Error fetching room details:', error));
      } else {
        document.getElementById('fee').value = '';
        document.getElementById('set').value = '';
      }
    });
  </script>

</body>

</html>