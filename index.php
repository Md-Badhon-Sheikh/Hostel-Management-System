<?php
include ('nav.php');

?>
  <!-- Hero Section -->
  <section class="bg-blue-500 text-white py-20 mt-16">
    <div class="container mx-auto text-center">
      <h1 class="text-4xl font-bold">Welcome to Hostel Management System</h1>
      <p class="mt-4 text-lg">Streamline your hostel management with ease and efficiency.</p>
      <a href="#features" class="mt-6 inline-block px-6 py-3 bg-white text-blue-600 rounded-lg shadow hover:bg-gray-200">Explore Features</a>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="py-20">
    <div class="container mx-auto text-center">
      <h2 class="text-3xl font-bold">Our Features</h2>
      <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="p-6 bg-white rounded-lg shadow">
          <h3 class="text-xl font-bold">Student Registration</h3>
          <p class="mt-2 text-gray-600">Easily manage student details and records.</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow">
          <h3 class="text-xl font-bold">Room Allocation</h3>
          <p class="mt-2 text-gray-600">Assign rooms efficiently to students.</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow">
          <h3 class="text-xl font-bold">Fee Management</h3>
          <p class="mt-2 text-gray-600">Track and manage hostel fees seamlessly.</p>
        </div>
      </div>
    </div>
  </section>

<?php
include ('footer.php');

?>