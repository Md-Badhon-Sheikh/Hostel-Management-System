<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hostel Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.22/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <!-- Navbar -->
  <section class="">
      <div class="navbar fixed z-50 shadow-lg bg-white py-4 -mt-16">
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
              <li><a>Services</a></li>
              <li><a>Kids</a></li>
              <li><a>Contact Us</a></li>
              <li><a>About</a></li>
            </ul>
          </div>
          <a href="index.html" class="btn btn-ghost text-xl ">
            <img class="max-h-16 lg:ml-10 pb-4" src="images/schoobee.png" alt="">
          </a>
        </div>
        <div class="navbar-center hidden lg:flex">
          <ul class="menu menu-horizontal px-1 uppercase font-bold text-base lg:space-x-4 md:ml-24 lg:-ml-16">
            <li><a href="man.html">Home</a></li>
            <li><a href="woman.html">Services</a></li>
            <li><a href="kids.html">Kids</a></li>
            <li><a href="accessories.html">Contact Us</a></li>
            <li><a href="gift.html">About</a></li>
          </ul>
        </div>
        <div class="navbar-end">
          <!-- search option  -->

          <div class="flex-none gap-4 flex items-center">
            <div class=" justify-center space-x-2" id="search-ber">
             <a href="login.php" class=" bg-green-600 py-1 px-3 rounded-lg">
              <span class="uppercase font-bold text-sm">Login</span>
             </a>
            </div>
            <div class="space-x-4 text-2xl lg:pr-10 lg:-ml-10">
              <a href="#"><i class="fa-regular fa-user"></i></a>
              <a href="#"><i class="fa-solid fa-lock"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>