<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Install Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Install DaisyUI CSS -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />

    <!-- Install Custom Font -->
    <link href="https://fonts.googleapis.com/css2?family=Praise&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=New+Rocker&display=swap" rel="stylesheet">

<!-- custom css -->
<style>
       
       :root {
           --text-color: black; 
       }

       @media (prefers-color-scheme: dark) {
           :root {
               --text-color: white;
           }
       }

       body {
           
           color: var(--text-color);
       }

     /* Custom Font dari google font */
       .praise-regular {
       font-family: "Praise", cursive;
       font-weight: 400;
       font-style: normal;
       }

       .fugaz-one-regular {
       font-family: "Fugaz One", sans-serif;
       font-weight: 400;
       font-style: normal;
       }

       .new-rocker-regular {
       font-family: "New Rocker", system-ui;
       font-weight: 400;
       font-style: normal;
       }

   </style>

</head>

<body >

  <nav>
  @include('components.navbar')
</nav>


<div class="container mx-auto mt-8 p-8 bg-opacity-50 rounded-lg bg-white shadow-md max-w-2xl">

  <!-- Foto Profil dan Edit Icon -->
  <div class="flex items-center justify-center mb-6">
      <div class="mr-4">
          <img src="{{ asset('img/pp.png') }}" alt="Foto Profil" class="rounded-full h-24 w-24">
      </div>
      
  </div>

  <!-- Form Edit Data Profil -->
  <form >
      <div class="mb-4">
          <label for="editName" class="block text-sm font-medium text-gray-700">Nama</label>
          <input type="text" id="editName" name="editName" class="mt-1 p-2 border rounded w-full "
              value="Nama Anda">
      </div>
      <div class="mb-4">
          <label for="editName" class="block text-sm font-medium text-gray-700">Deskripsi Tentang Kamu</label>
          <input type="text" id="editName" name="editName" class="mt-1 p-2 border rounded w-full"
              value="Students of Politeknik Negeri Batam">
      </div>
      <div class="mb-4">
          <label for="editName" class="block text-sm font-medium text-gray-700">Username</label>
          <input type="text" id="editName" name="editName" class="mt-1 p-2 border rounded w-full"
              value="RyshaNidya__15">
      </div>
      <div class="mb-4">
          <label for="editName" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
          <input type="radio" id="editName" name="jk" class="mt-1 p-2 border rounded mr-5"
              value="Perempuan" selected><span class="mr-5">Perempuan</span>
          <input type="radio" id="editName" name="jk" class="mt-1 p-2 border rounded mr-5"
              value="laki-laki"><span class="mr-5">Laki-laki</span>
      </div>
      <div class="mb-4">
          <label for="editEmail" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
          <input type="date" id="editEmail" name="editEmail" class="mt-1 p-2 border rounded w-full"
              value="09/15/2004">
      </div>
      <div class="mb-4">
          <label for="editEmail" class="block text-sm font-medium text-gray-700">Alamat</label>
          <textarea type="text" id="editEmail" name="editEmail" class="mt-1 p-2 border rounded w-full"
              >Kepulauan Riau, Batam Center</textarea>
      </div>
      <div class="mb-4">
        <label for="editEmail" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" id="editEmail" name="editEmail" class="mt-1 p-2 border rounded w-full"
            value="yurishaanindya154@gmail.com">
    </div>
      <div class="mb-4">
          <label for="editPhone" class="block text-sm font-medium text-gray-700">Telepon</label>
          <input type="text" id="editPhone" name="editPhone" class="mt-1 p-2 border rounded w-full"
              value="(+62) 1234-5678">
      </div>
      <div class="mb-4">
          <label for="editPhone" class="block text-sm font-medium text-gray-700">Photo Profile</label>
          <input type="file" id="editPhone" name="editPhone" class="mt-1 p-2 border rounded w-full">
      </div>
      <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 mr-2 rounded ">
    Edit Profile
</a>
          <a href="/profile" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4  rounded ">
    Kembali
</a>

          
  </form>

</div>

</body>

</html>
