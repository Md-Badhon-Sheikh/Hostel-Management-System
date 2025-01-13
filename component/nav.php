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

    <!-- navigation section  -->
    <section class="">
        <div class="navbar fixed z-50 shadow-lg bg-[--primary-color] py-4">

            <div class="navbar-start">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </div>
                    <ul tabindex="0"
                        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 lg:w-52 p-2 shadow uppercase">
                        <li><a>Home</a></li>
                        <li><a>Features</a></li>
                        <li><a>Gallery</a></li>
                        <li><a>Rooms</a></li>
                        <li><a>About</a></li>
                        <li><a>Contacts</a></li>
                    </ul>
                </div>
                <a href="index.html" class="btn btn-ghost text-xl ">
                    <img class="max-h-16 lg:ml-10" src="images/logo.webp" alt="">
                </a>
            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1 uppercase font-bold text-base lg:space-x-4 md:ml-12">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Rooms</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contacts</a></li>
                </ul>
            </div>
            <div class="navbar-end">
                <!-- search option  -->
                <div class="navbar-end">
                    <a href="aurth/student_login.php" class="btn">Sign In</a>
                </div>
                <!-- ===== toggle icon ====== -->

            </div>
        </div>
    </section>
    <script src="./min.js"></script>
</body>

</html>