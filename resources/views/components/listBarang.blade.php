<!doctype html>
<html>
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

<body>

<nav>
    @include('components.navbar')
</nav>

<div class="bg-gray-800 text-white flex justify-center">
    <div class="p-5 space-y-5">
    <div class="flex items-start space-x-4 border-4 border-white px-8 py-8 rounded ">
      <img src="{{ asset('img/foto1.png') }}" style="width: 400px; height:500px;">
      <div class="space-y-2">
        <h3 class="text-xl">15 February 2024</h2>
        <h2 class="text-xl">JAKARTA, INDONESIA ICE BSD CITY</h2>
        <p>Rp 800.000 - Rp 13.000.000</p>
      <button class="bg-purple-600 text-white px-4 py-2 rounded">Get tickets</button>
        <h3 class="text-xl">20 March 2024</h2>
        <h2 class="text-xl">JAKARTA, INDONESIA ICE BSD CITY</h2>
        <p>Rp 800.000 - Rp 13.000.000</p>
      <button class="bg-purple-600 text-white px-4 py-2 rounded">Get tickets</button>
        <h3 class="text-xl">10 May 2024</h2>
        <h2 class="text-xl">JAKARTA, INDONESIA ICE BSD CITY</h2>
        <p>Rp 800.000 - Rp 13.000.000</p>
      <button class="bg-purple-600 text-white px-4 py-2 rounded">Get tickets</button>
        </div>
    <div class="space-y-2">
        <h3 class="text-xl">25 July 2024</h2>
        <h2 class="text-xl">JAKARTA, INDONESIA ICE BSD CITY</h2>
        <p>Rp 800.000 - Rp 13.000.000</p>
      <button class="bg-purple-600 text-white px-4 py-2 rounded">Get tickets</button>
        <h3 class="text-xl">05 September 2024</h2>
        <h2 class="text-xl">JAKARTA, INDONESIA ICE BSD CITY</h2>
        <p>Rp 800.000 - Rp 13.000.000</p>
      <button class="bg-purple-600 text-white px-4 py-2 rounded">Get tickets</button>
      </div>
    </div>
    
    <div class="flex items-start space-x-4 border-4 border-white px-8 py-8 rounded ">
      <img src="{{ asset('img/foto2.png') }}" style="width: 400px; height:500px;">
      <div class="space-y-2" >
        <h3 class="text-xl">15 February 2024</h2>
        <h2 class="text-xl">JAKARTA, INDONESIA ICE BSD CITY</h2>
        <p>Rp 800.000 - Rp 13.000.000</p>
      <button class="bg-purple-600 text-white px-4 py-2 rounded">Get tickets</button>
        <h3 class="text-xl">20 March 2024</h2>
        <h2 class="text-xl">JAKARTA, INDONESIA ICE BSD CITY</h2>
        <p>Rp 800.000 - Rp 13.000.000</p>
      <button class="bg-purple-600 text-white px-4 py-2 rounded">Get tickets</button>
        <h3 class="text-xl">10 May 2024</h2>
        <h2 class="text-xl">JAKARTA, INDONESIA ICE BSD CITY</h2>
        <p>Rp 800.000 - Rp 13.000.000</p>
      <button class="bg-purple-600 text-white px-4 py-2 rounded">Get tickets</button>
        </div>
    <div class="space-y-2">
        <h3 class="text-xl">25 July 2024</h2>
        <h2 class="text-xl">JAKARTA, INDONESIA ICE BSD CITY</h2>
        <p>Rp 800.000 - Rp 13.000.000</p>
      <button class="bg-purple-600 text-white px-4 py-2 rounded">Get tickets</button>
        <h3 class="text-xl">05 September 2024</h2>
        <h2 class="text-xl">JAKARTA, INDONESIA ICE BSD CITY</h2>
        <p>Rp 800.000 - Rp 13.000.000</p>
      <button class="bg-purple-600 text-white px-4 py-2 rounded">Get tickets</button>
      </div>
    </div>

    </div>
</div>
    
</body>
</html>