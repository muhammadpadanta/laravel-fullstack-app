<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

    <title>Profil Saya</title>
</head>

<body class="bg-gray-100 font-sans bg-gradient-to-br from-blue-400 via-purple-500 to-pink-500  ">

  <nav class="bg-white p-4 text-white bg-opacity-30 backdrop-blur-lg">
    <div class="container mx-auto flex items-center justify-between">
        <div>
            <a href="#" class="font-bold text-xl">1st Symphony</a>
        </div>
        <div class="space-x-4">
            <a href="#" class="hover:text-gray-300">Home</a>
            <a href="#" class="hover:text-gray-300">Tikets</a>
            <a href="#" class="hover:text-gray-300">Contact</a>
          </div>
          <a href="#" class="flex items-center hover:text-gray-300">
              
              Account
          </a>
    </div>
</nav>


<div class="container mx-auto mt-8 p-8 bg-opacity-50 rounded-lg bg-white shadow-md max-w-2xl">

  <!-- Foto Profil dan Edit Icon -->
  <div class="flex items-center justify-center mb-6">
      <div class="mr-4">
          <img src="{{ asset('img/pp.png') }}" alt="Foto Profil" class="rounded-full h-60 w-60">
      </div>
      
  </div>

  <!-- Form Edit Data Profil -->
  <form action="#" method="post">
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
      <button type="submit"
          class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Edit Profile</button>
  </form>

</div>

</body>

</html>
