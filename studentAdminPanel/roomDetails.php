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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Welcome To Hostel Management System</title>
</head>

<body class="bg-gray-100">
  <!-- start navbar -->
  <?php
  include('shared/header.php');
  ?>
  <!-- end navbar -->

  <!-- strat wrapper -->
  <div class="flex w-full">
		<?php include('shared/sidebar.php'); ?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row" id="print">


					<div class="col-md-12">
						<h2 class="page-title" style="margin-top:3%">Rooms Details</h2>
						<div class="panel panel-default">
							<div class="panel-heading">All Room Details</div>
							<div class="panel-body">
								<table id="zctb" class="table table-bordered " cellspacing="0" width="100%" border="1">

									<span style="float:left"><i class="fa fa-print fa-2x" aria-hidden="true" OnClick="CallPrint(this.value)" style="cursor:pointer" title="Print the Report"></i></span>
									<tbody>
											<tr>
												<td colspan="6" style="text-align:center; color:blue">
													<h3>Room Related Info</h3>
												</td>
											</tr>
											<tr>
												<th>Registration Number :</th>
												<td></td>
												<th>Apply Date :</th>
												<td colspan="3"></td>
											</tr>



											<tr>
												<td><b>Room no :</b></td>
												<td></td>
												<td><b>Seater :</b></td>
												<td></td>
												<td><b>Fees PM :</b></td>
												<td></td>
											</tr>

											<tr>
												<td><b>Food Status:</b></td>
												<td></td>
												<td><b>Stay From :</b></td>
												<td></td>
												<td><b>Duration:</b></td>
												<td>Months</td>
											</tr>

											<tr>
												<th>Hostel Fee:</th>
												<td></td>
												<th>Food Fee:</th>
												<td colspan="3"></td>
											</tr>
											<tr>
												<th>Total Fee :</th>
												<th colspan="5"></th>
											</tr>
											<tr>
												<td colspan="6" style="color:red">
													<h4>Personal Info</h4>
												</td>
											</tr>

											<tr>
												<td><b>Reg No. :</b></td>
												<td></td>
												<td><b>Full Name :</b></td>
												<td></td>
												<td><b>Email :</b></td>
												<td></td>
											</tr>


											<tr>
												<td><b>Contact No. :</b></td>
												<td></td>
												<td><b>Gender :</b></td>
												<td></td>
												<td><b>Course :</b></td>
												<td></td>
											</tr>


											<tr>
												<td><b>Emergency Contact No. :</b></td>
												<td></td>
												<td><b>Guardian Name :</b></td>
												<td></td>
												<td><b>Guardian Relation :</b></td>
												<td></td>
											</tr>

											<tr>
												<td><b>Guardian Contact No. :</b></td>
												<td colspan="6"></td>
											</tr>

											<tr>
												<td colspan="6" style="color:blue">
													<h4>Addresses</h4>
												</td>
											</tr>
											<tr>
												<td><b>Correspondense Address</b></td>
												<td colspan="2">
													<br />
													<br />
													


												</td>
												<td><b>Permanent Address</b></td>
												<td colspan="2"><br /><br />

												</td>
											</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  <!-- script -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- end script -->

</body>

</html>