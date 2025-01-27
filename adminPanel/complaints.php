<?php
include_once('../db_root.php');
session_start();

if (!isset($_SESSION['mySession'])) {
  header('location:../index.php');
}

// Handle actions based on the GET parameter
if (isset($_GET['process']) && isset($_GET['id'])) {
    $action = $_GET['process'];
    $process_id = mysqli_real_escape_string($conn, $_GET['id']);

    if ($action == 'confirm') {
        // Update the complaint status to "In Process"
        $sql = "UPDATE complain SET status = 'In Process' WHERE id = '$process_id'";
        if (mysqli_query($conn, $sql)) {
            // Redirect back to complaints page
            header("Location: complaints.php");
            exit;
        } else {
            echo "Error: " . mysqli_error($conn);
        }
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <title>Welcome To Hostel Management System</title>
</head>

<body class="">


  <!-- start navbar -->
  <?php
  include('shared/header.php');
  ?>
  <!-- end navbar -->


  <!-- strat wrapper -->
  <div class="flex w-full">

    <!-- start sidebar -->
    <?php
    include('shared/sidebar.php')
    ?>
    <!-- end side bar -->



    <div class="container mx-auto mt-10 ">
      <h1 class="text-4xl mb-5 font-bold text-center">All Complaints</h1>
      <div class="p-4 bg-white rounded shadow-md">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">Complaint List</h1>

        <!-- Responsive Table -->
        <div class="overflow-x-auto">
          <table class="w-full border-collapse border border-gray-200 text-left text-sm">
            <!-- Table Head -->
            <thead class="bg-gray-100">
              <tr>
                <th class="border border-gray-200 px-4 py-2 text-gray-700">SL</th>
                <th class="border border-gray-200 px-2 py-2 text-gray-700">Complaint Number</th>
                <th class="border border-gray-200 px-2 py-2 text-gray-700">Complaint Type</th>
                <th class="border border-gray-200 px-2 py-2 text-gray-700">Complaint Status</th>
                <th class="border border-gray-200 px-4 py-2 text-gray-700">Reg Date</th>
                <th class="border border-gray-200 px-4 py-2 text-gray-700 col-span-2 text-center">Action</th>
              </tr>
            </thead>
            <!-- Table Body -->
            <tbody>
            <?php
          if (!$conn) {
            die('Connection Failed' . mysqli_connect_errno());
          } else {

            $display = $conn->query("SELECT * FROM complain");
            $count = 1;
            $counter = 1250005;
            while (list($id, $c_type, $c_explain, $c_date, $c_status) = $display->fetch_row()) {
                
              $sl = $count++;
              $c_no = $counter++;


              
              echo "<tr>
                        <td class='border border-gray-200 px-4 py-2'><?php echo $sl; ?></td>
                        <td class='border border-gray-200 px-4 py-2'><?php echo $c_no; ?></td>
                        <td class='border border-gray-200 px-4 py-2'><?php echo $c_type; ?></td>
                        <td class='border border-gray-200 px-4 py-2'>
                            <span class='text-green-600 font-medium'><?php echo $c_status; ?></span>
                        </td>
                        <td class='border border-gray-200 px-4 py-2'><?php echo $c_date; ?></td>
                        <td class='border border-gray-200 px-4 py-2'>
                            <a href='complaints.php?process=confirm&id=<?php echo $id; ?>' 
                            onclick='return confirm('Are you sure you want to Process this Complain?')'>
                            <i class='fa-solid fa-pen-to-square'></i> Process
                            </a>
                            <button class=''>
                                <a href='complaints.php?complete=<?php echo $id; ?>'>
                                    <i class='fa-solid fa-trash'></i> Complete
                                </a>
                            </button>
                        </td>
                    </tr>


              <!-- Add more rows as needed -->
            </tbody>";
          }
        }
        ?>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- end wrapper -->

  <!-- script -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="js/scripts.js"></script>
  <!-- end script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
"></script>
</body>

</html>