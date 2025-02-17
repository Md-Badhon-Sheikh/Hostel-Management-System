<?php
session_start();
// database connection 
include_once('../db_root.php');

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $fetch = $conn->query('SELECT * FROM student_login');

    if($fetch-> num_rows > 0){
        while(list($id, $userEmail, $userPassword) = $fetch->fetch_row()){
            if($email === $userEmail && $password === $userPassword){
                $_SESSION['mySession'] = $email;
                header('location:../studentAdminPanel/');
            }
            else{
                $msg = 'Email or password incorrect!';
            }
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <!-- Tailwind CSS plugin CDN link (DaisyUI) -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.23/dist/full.min.css" rel="stylesheet" type="text/css" />

    <!-- Font Awesome link -->
    <script src="https://kit.fontawesome.com/9ce82b2c02.js" crossorigin="anonymous"></script>
    <!-- Tailwind CSS CDN link -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Swiper CDN link CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../style.css">

    <style>
        .inStyle:is(:focus) {
            border: 2px solid transparent;
            border-image: linear-gradient(to right, #3b82f6, #9333ea) 1;
            border-radius: 5px;
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-md rounded-lg w-full max-w-4xl flex overflow-hidden">
        <!-- Left Section: Image -->
        <div class="w-1/2 bg-white flex items-center justify-center border-r-2">
            <img src="../images/hostel.png" alt="Responsive Devices" class="max-h-80">
        </div>

        <!-- Right Section: Login Form -->
        <div class="w-1/2 p-8">
            <!-- Logo and Title -->
            <div class="text-center mb-6">
                <img src="../images/logo.webp" alt="Schoobee Logo" class="mx-auto h-16">
                <h2 class="text-xl font-bold text-green-600">Hostel Management System</h2>
            </div>

            <!-- Login Tabs -->
            <div class="flex justify-center space-x-6 mb-6">
                <a href="login.php"><button class="font-semibold text-lg border-b-2 border-blue-500 text-blue-500">Student Login</button></a>
                <a href="admin_login.php"><button class="font-semibold text-lg text-gray-500 ">Admin Login</button></a>
            </div>

            <!-- Login Form -->
            <form method="POST" action="">
                <p class="text-gray-500 text-sm mb-4">Enter into <span class="font-semibold text-red-500">Student Portal</span></p>
                <?php
                    echo isset($msg)?$msg:'';
                ?>

                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="email">Email Address</label>
                    <input 
                        name="email" 
                        type="text" 
                        id="email" 
                        class="w-full px-4 py-2 border rounded-md bg-white text-gray-900"
                        placeholder="Enter your email">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="password">Password</label>
                    <input 
                        name="password" 
                        type="password" 
                        id="password" 
                        class="w-full px-4 py-2 border rounded-md bg-white text-gray-900"
                        placeholder="Enter your password">
                </div>


                <button name="submit" class="w-full py-2 bg-teal-500 text-white rounded-md hover:bg-blue-600">Sign in</button>

                <div class="mt-4 text-center text-sm text-gray-500">
                    Forget Password? <a href="#" class="text-blue-500">Reset Password</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>