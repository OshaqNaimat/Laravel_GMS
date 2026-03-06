<x-layout>
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Course Enrollment Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 relative flex items-center justify-center min-h-screen">

  <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
    <h2 class="text-2xl font-bold mb-6 text-center">Course Enrollment Form</h2>
    <form action="/add-survey" class="space-y-4" method="POST">
       @csrf
      <!-- Name -->
      <div>
        <label for="name" class="block text-gray-700 font-medium mb-1">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your full name"
               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-gray-700 font-medium mb-1">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email"
               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <!-- Course Name -->
      <div>
        <label for="course" class="block text-gray-700 font-medium mb-1">Course Name</label>
        <input type="text" id="course" name="course" placeholder="Enter course name"
               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <!-- Instructor Name -->
      <div>
        <label for="instructor" class="block text-gray-700 font-medium mb-1">Instructor Name</label>
        <input type="text" id="instructor" name="instructor" placeholder="Enter instructor name"
               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <!-- Batch -->
      <div>
        <label for="batch" class="block text-gray-700 font-medium mb-1">Batch</label>
        <input type="number" id="batch" name="batch" placeholder="Enter batch"
               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <!-- Branch -->
      <div>
        <label  class="block text-gray-700 font-medium mb-1">Branch</label>
       <select  name="branch" type="text" id=""class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
>
        <option disabled selected>Select Branch</option>
        <option value="RWP">RWP</option>
        <option value="LHR">Lahore</option>
        <option value="KPK">KPK </option>
       </select>
    </div>

      <!-- Submit Button -->
      <div>
        <button  type="submit"
                class="w-full bg-blue-500 text-white font-medium py-2 px-4 rounded-lg hover:bg-blue-600 transition">
          Submit
        </button>
      </div>

    </form>
  </div>

     {{-- <div class="bg-cyan-500 hover:bg-cyan-600 transition duration-100 cursor-pointer p-2 rounded-md">

         <a  href="/services">View all Data</a>
        </div> --}}
<div class="absolute right-10 top-1/2 group overflow-hidden cursor-pointer rounded-lg bg-gradient-to-br from-cyan-400 to-cyan-600 p-[1.5px] shadow-[0_0_20px_rgba(6,182,212,0.4)] hover:shadow-[0_0_30px_rgba(6,182,212,0.7)] transition-all duration-300">
  <div class="rounded-lg bg-slate-950 px-5 py-2.5">
    <a href="/services" class="text-cyan-400 text-sm font-semibold tracking-widest uppercase group-hover:text-white transition-colors duration-300">View all Data</a>
  </div>
</div>

</body>
</html>
</x-layout>
