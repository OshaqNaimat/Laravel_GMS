<x-layout>
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Course Enrollment Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
    <h2 class="text-2xl font-bold mb-6 text-center">Course Enrollment Form</h2>
    <form class="space-y-4" method="POST">

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
        <input type="text" id="batch" name="batch" placeholder="Enter batch"
               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <!-- Branch -->
      <div>
       <select  name="branch" type="text" id=""                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
>
        <option disabled selected>Select Branch</option>
        <option value="RWP">RWP</option>
        <option value="LHR">Lahore</option>
        <option value="KPK">KPK </option>
       </select>
    </div>

      <!-- Submit Button -->
      <div>
        <button type="submit"
                class="w-full bg-blue-500 text-white font-medium py-2 px-4 rounded-lg hover:bg-blue-600 transition">
          Submit
        </button>
      </div>

    </form>
  </div>

</body>
</html>
</x-layout>
