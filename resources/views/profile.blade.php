<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <title>Profil Saya</title>
</head>

<body class="bg-gray-100 font-sans bg-gradient-to-br from-blue-400 via-purple-500 to-pink-500  h-screen">

  <nav class="bg-white  p-4 text-white bg-opacity-30 backdrop-blur-lg">
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
    <div class="container mx-auto mt-8 p-8 bg-white shadow-md max-w-2xl bg-opacity-50 backdrop-blur-lg rounded-lg ">
      

        <div class="flex items-center justify-center">
            <img src="{{ asset('img/pp.png') }}" alt="Foto Profil" class="rounded-full h-40 w-40">
        </div>

        <div class="text-center mt-4">
            <h1 class="text-2xl font-bold">Yurisha Anindya</h1>
            <p class="text-gray-600">Students of Politeknik Negeri Batam</p><br>

            <h6 class="font-semibold">ryshanidya__15</h6>
            <h6 class=" font-semibold">Perempuan</h6>
            <h6 class=" font-semibold">15 September 2004</h6>
            <h6 class=" font-semibold">Kepulauan Riau, Batam Center</h6>
        </div>

        <div class="mt-6">
            <h2 class="text-lg font-semibold">Informasi Kontak</h2>
            <ul class="mt-2">
                <li class="flex items-center space-x-2">
                    <svg class="h-5 w-5 text-gray-500" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-.29-13.71a1 1 0 0 0-1.42 0L7 11.59 5.71 10.3a1 1 0 0 0-1.42 1.42l2.5 2.5a1 1 0 0 0 1.42 0l6-6z"></path>
                    </svg>
                    <span>Email: yurishaanindya154@gmail.com</span>
                </li>
                <li class="flex items-center space-x-2 mt-2">
                    <svg class="h-5 w-5 text-gray-500" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                        <path
                            d="M21 2H3a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h18a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM3 20V4h18v16H3zm12-2v-4m0 0v-4m0 4h4m-4 0h-4"></path>
                    </svg>
                    <span>Telepon: (+62) 812345678</span>
                </li>

              </ul>
              <div class="m-3 flex items-end justify-end ">

                <a href="#" class="bg-blue-500 hover:bg-blue-600 shadow-md text-white py-2 px-4 rounded m-3">
                  Edit
                </a>
                <a href="#" class="bg-green-500 hover:bg-green-600 shadow-md text-white py-2 px-4 rounded m-3">
                  Password
                </a>
              </div>

            
        </div>

        
    </div>

</body>

</html>
