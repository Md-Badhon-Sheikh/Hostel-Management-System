<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hostel Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.22/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

  <link rel="stylesheet" href="component/style.css">
</head>

<body class="bg-gray-100">

  <!-- navigation section  -->
  <section class="">
    <div class="navbar fixed z-50 shadow-lg bg-white py-4">

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
          <a class="btn">Sign In</a>
        </div>
        <!-- ===== toggle icon ====== -->
        <label class="swap swap-rotate">
          <!-- ===== this hidden checkbox controls the state ===== -->
          <input type="checkbox" class="icon" value="" onclick="handleToggleBtn()" />

          <!-- ==== sun icon === -->
          <svg class="swap-off h-5 w-5 fill-current text-white" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24">
            <path
              d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
          </svg>

          <!-- === moon icon === -->
          <svg class="swap-on h-5 w-5 fill-current text-white" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24">
            <path
              d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
          </svg>
        </label>
      </div>
    </div>
  </section>
  <!-- nav end  -->

  <!-- carousal -->
  <div id="indicators-carousel" class="relative w-full" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
      <!-- Item 1 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
        <img class="" src="images/carousal01.jpg" alt="Hostel room images">
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="images/carousal01.jpg" alt="Hostel room images">
      </div>
      <!-- Item 3 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="images/carousal01.jpg" alt="Hostel room images">
      </div>
      <!-- Item 4 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="images/carousal01.jpg" alt="Hostel room images">
      </div>
      <!-- Item 5 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="images/carousal01.jpg" alt="Hostel room images">
      </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
      <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
      <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
        </svg>
        <span class="sr-only">Previous</span>
      </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
      <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
        </svg>
        <span class="sr-only">Next</span>
      </span>
    </button>
  </div>


  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-6">
    <div class="container mx-auto text-center">
      <p>&copy; 2024 Hostel Management System. All rights reserved.</p>
    </div>
  </footer>

  <script>
    // handle theme toggle 
    const handleToggleBtn = () => {
      const darkModeEnabeld = document.body.classList.toggle('dark');

      // set theme in local storage 
      localStorage.setItem('theme', darkModeEnabeld ? 'dark' : 'light');
    }


    window.addEventListener('DOMContentLoaded', () => {
      // Check if the theme is saved in localStorage
      const savedTheme = localStorage.getItem('theme');

      // Apply the saved theme if it exists
      if (savedTheme === 'dark') {
        document.body.classList.add('dark');
      } else {
        document.body.classList.remove('dark');
      }
    });
  </script>
</body>

</html>