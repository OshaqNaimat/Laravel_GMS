<x-layout>

     <style>

.sidebar::-webkit-scrollbar {
    display: none;
}


     </style>



    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-2 mx-3">


        <div class="container relative bg-gradient-to-r from-purple-500 to-indigo-600 p-4
        rounded-xl text-white
        shadow-[0_10px_40px_rgba(139,92,246,0.6)] mx-auto my-3 ">
        <h3 class="text-center text-4xl">Name</h3>
        <h3 class="text-center text-4xl">email</h3>
        <h3 class="text-center text-4xl">Instructor name</h3>
        <h3 class="text-center text-4xl">course</h3>
        <h3 class="text-center text-4xl">Batch</h3>
        <h3 class="text-center text-4xl">Branch</h3>
        <div class="absolute left-2 bottom-2 bg-red-500 p-2 rounded-md hover:scale-105 cursor-pointer transition ">
            <i class="bi bi-trash-fill "></i>
        </div>
        <div class="absolute right-2 bottom-2 bg-green-500 p-2 rounded-md hover:scale-105 cursor-pointer transition ">
           <i class="bi bi-pencil-square underlay-open"></i>
        </div>
    </div>
        <div class="container bg-gradient-to-r from-purple-500 to-indigo-600 p-4
        rounded-xl text-white
        shadow-[0_10px_40px_rgba(139,92,246,0.6)] mx-auto my-3 ">
        <h3 class="text-center text-4xl">Name</h3>
        <h3 class="text-center text-4xl">email</h3>
        <h3 class="text-center text-4xl">Instructor name</h3>
        <h3 class="text-center text-4xl">course</h3>
        <h3 class="text-center text-4xl">Batch</h3>
        <h3 class="text-center text-4xl">Branch</h3>
    </div>
        <div class="container bg-gradient-to-r from-purple-500 to-indigo-600 p-4
        rounded-xl text-white
        shadow-[0_10px_40px_rgba(139,92,246,0.6)] mx-auto my-3 ">
        <h3 class="text-center text-4xl">Name</h3>
        <h3 class="text-center text-4xl">email</h3>
        <h3 class="text-center text-4xl">Instructor name</h3>
        <h3 class="text-center text-4xl">course</h3>
        <h3 class="text-center text-4xl">Batch</h3>
        <h3 class="text-center text-4xl">Branch</h3>
    </div>
        <div class="container bg-gradient-to-r from-purple-500 to-indigo-600 p-4
        rounded-xl text-white
        shadow-[0_10px_40px_rgba(139,92,246,0.6)] mx-auto my-3 ">
        <h3 class="text-center text-4xl">Name</h3>
        <h3 class="text-center text-4xl">email</h3>
        <h3 class="text-center text-4xl">Instructor name</h3>
        <h3 class="text-center text-4xl">course</h3>
        <h3 class="text-center text-4xl">Batch</h3>
        <h3 class="text-center text-4xl">Branch</h3>
    </div>
        <div class="container bg-gradient-to-r from-purple-500 to-indigo-600 p-4
        rounded-xl text-white
        shadow-[0_10px_40px_rgba(139,92,246,0.6)] mx-auto my-3 ">
        <h3 class="text-center text-4xl">Name</h3>
        <h3 class="text-center text-4xl">email</h3>
        <h3 class="text-center text-4xl">Instructor name</h3>
        <h3 class="text-center text-4xl">course</h3>
        <h3 class="text-center text-4xl">Batch</h3>
        <h3 class="text-center text-4xl">Branch</h3>
    </div>
        <div class="container bg-gradient-to-r from-purple-500 to-indigo-600 p-4
        rounded-xl text-white
        shadow-[0_10px_40px_rgba(139,92,246,0.6)] mx-auto my-3 ">
        <h3 class="text-center text-4xl">Name</h3>
        <h3 class="text-center text-4xl">email</h3>
        <h3 class="text-center text-4xl">Instructor name</h3>
        <h3 class="text-center text-4xl">course</h3>
        <h3 class="text-center text-4xl">Batch</h3>
        <h3 class="text-center text-4xl">Branch</h3>
    </div>
        <div class="container bg-gradient-to-r from-purple-500 to-indigo-600 p-4
        rounded-xl text-white
        shadow-[0_10px_40px_rgba(139,92,246,0.6)] mx-auto my-3 ">
        <h3 class="text-center text-4xl">Name</h3>
        <h3 class="text-center text-4xl">email</h3>
        <h3 class="text-center text-4xl">Instructor name</h3>
        <h3 class="text-center text-4xl">course</h3>
        <h3 class="text-center text-4xl">Batch</h3>
        <h3 class="text-center text-4xl">Branch</h3>
    </div>
</div>
<div class="fixed  inset-0 bg-black/50 hidden sidebh items-start justify-center pt-10 z-50">
    <div class="text-4xl text-white fixed right-5 z-50 cursor-pointer hover:scale-110 transition ">

        <i class="bi bi-x underlay-close"></i>
    </div>
<div class="bg-white p-8 rounded-lg shadow-lg w-full h-[90vh] sidebar overflow-y-scroll max-w-md">
    {{-- <h2 class="text-2xl font-bold mb-6 text-center">Course Enrollment Form</h2> --}}
    <form action="/add-survey" class="space-y-4 " method="POST">
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
          update
        </button>
      </div>

    </form>
  </div>
</div>

<script>

   let S_underlay = document.querySelector('.sidebh')
let underlayOpen = document.querySelector('.underlay-open')
let underlayClose = document.querySelector('.underlay-close')

underlayOpen.addEventListener("click", () => {
    S_underlay.classList.add("flex")
    S_underlay.classList.remove("hidden")
})

underlayClose.addEventListener("click", () => {
    S_underlay.classList.remove("flex")
    S_underlay.classList.add("hidden")
})


</script>

</x-layout>
