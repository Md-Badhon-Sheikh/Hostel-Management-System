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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <title>Welcome To Hostel Management System</title>
</head>

<body class="bg-gray-100">


  <!-- start navbar -->
  <?php
  include('shared/header.php');
  ?>
  <!-- end navbar -->


  <!-- strat wrapper -->
  <div class="h-screen flex flex-row flex-wrap">

    <!-- start sidebar -->
    <?php
    include('shared/sidebar.php')
    ?>
    <!-- end side bar -->
    <div class="content-wrapper">
      <div class="container-fluid w-full">

        <div class="row">
          <div class="col-md-12">

            <h2 class="page-title">Registration </h2>

            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-primary">
                  <div class="panel-heading">Fill all Info</div>
                  <div class="panel-body">
                    <form method="post" action="" class="form-horizontal">
                      <div align="center">
                        <div class="col-md-4">
                          <div class="panel panel-primary">
                            <div class="panel-body bk-success text-light">
                              <div class="stat-panel text-center">

                                <div class="stat-panel-number h1 ">My Room</div>

                              </div>
                            </div>
                            <a href="room-details.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4 control-label">
                          <h4 style="color: green" align="left">Room Related info </h4>
                        </label>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">Room no. </label>
                        <div class="col-sm-8">
                          <select name="room" id="room" class="form-control" onChange="getSeater(this.value);" onBlur="checkAvailability()" required>
                            <option value="">Select Room</option>
                            option value=""> </option>

                          </select>
                          <span id="room-availability-status" style="font-size:12px;"></span>

                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">Seater</label>
                        <div class="col-sm-8">
                          <input type="text" name="seater" id="seater" class="form-control" readonly="true">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">Fees Per Month</label>
                        <div class="col-sm-8">
                          <input type="text" name="fpm" id="fpm" class="form-control" readonly="true">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">Food Status</label>
                        <div class="col-sm-8">
                          <input type="radio" value="0" name="foodstatus" checked="checked"> Without Food
                          <input type="radio" value="1" name="foodstatus"> With Food(Rs 2000.00 Per Month Extra)
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">Stay From</label>
                        <div class="col-sm-8">
                          <input type="date" name="stayf" id="stayf" class="form-control">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">Duration</label>
                        <div class="col-sm-8">
                          <select name="duration" id="duration" class="form-control">
                            <option value="">Select Duration in Month</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                          </select>
                        </div>
                      </div>



                      <div class="form-group">
                        <label class="col-sm-2 control-label">
                          <h4 style="color: green" align="left">Personal info </h4>
                        </label>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">course </label>
                        <div class="col-sm-8">
                          <select name="course" id="course" class="form-control" required>
                            <option value="">Select Course</option>

                            <option value=""></option>

                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">Registration No : </label>
                        <div class="col-sm-8">
                          <input type="text" name="regno" id="regno" class="form-control" value="" readonly>
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="col-sm-2 control-label">First Name : </label>
                        <div class="col-sm-8">
                          <input type="text" name="fname" id="fname" class="form-control" value="" readonly>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">Middle Name : </label>
                        <div class="col-sm-8">
                          <input type="text" name="mname" id="mname" class="form-control" value="" readonly>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">Last Name : </label>
                        <div class="col-sm-8">
                          <input type="text" name="lname" id="lname" class="form-control" value="" readonly>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">Gender : </label>
                        <div class="col-sm-8">
                          <input type="text" name="gender" value="" class="form-control" readonly>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">Contact No : </label>
                        <div class="col-sm-8">
                          <input type="text" name="contact" id="contact" value="" class="form-control" readonly>
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="col-sm-2 control-label">Email id : </label>
                        <div class="col-sm-8">
                          <input type="email" name="email" id="email" class="form-control" value="" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Emergency Contact: </label>
                        <div class="col-sm-8">
                          <input type="text" name="econtact" id="econtact" class="form-control" required="required">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">Guardian Name : </label>
                        <div class="col-sm-8">
                          <input type="text" name="gname" id="gname" class="form-control" required="required">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">Guardian Relation : </label>
                        <div class="col-sm-8">
                          <input type="text" name="grelation" id="grelation" class="form-control" required="required">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">Guardian Contact no : </label>
                        <div class="col-sm-8">
                          <input type="text" name="gcontact" id="gcontact" class="form-control" required="required">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          <h4 style="color: green" align="left">Correspondense Address </h4>
                        </label>
                      </div>


                      <div class="form-group">
                        <label class="col-sm-2 control-label">Address : </label>
                        <div class="col-sm-8">
                          <textarea rows="5" name="address" id="address" class="form-control" required="required"></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">City : </label>
                        <div class="col-sm-8">
                          <input type="text" name="city" id="city" class="form-control" required="required">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">State </label>
                        <div class="col-sm-8">
                          <select name="state" id="state" class="form-control" required>
                            <option value="">Select State</option>
                            <option value=""></option>

                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">Pincode : </label>
                        <div class="col-sm-8">
                          <input type="text" name="pincode" id="pincode" class="form-control" required="required">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          <h4 style="color: green" align="left">Permanent Address </h4>
                        </label>
                      </div>


                      <div class="form-group">
                        <label class="col-sm-5 control-label">Permanent Address same as Correspondense address : </label>
                        <div class="col-sm-4">
                          <input type="checkbox" name="adcheck" value="1" />
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="col-sm-2 control-label">Address : </label>
                        <div class="col-sm-8">
                          <textarea rows="5" name="paddress" id="paddress" class="form-control" required="required"></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">City : </label>
                        <div class="col-sm-8">
                          <input type="text" name="pcity" id="pcity" class="form-control" required="required">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">State </label>
                        <div class="col-sm-8">
                          <select name="pstate" id="pstate" class="form-control" required>
                            <option value="">Select State</option>

                            <option value=""></option>

                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">Pincode : </label>
                        <div class="col-sm-8">
                          <input type="text" name="ppincode" id="ppincode" class="form-control" required="required">
                        </div>
                      </div>


                      <div class="col-sm-6 col-sm-offset-4">
                        <button class="btn btn-default" type="submit">Cancel</button>
                        <input type="submit" name="submit" Value="Register" class="btn btn-primary">
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
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