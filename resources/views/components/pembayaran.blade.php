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

  <div class="container mx-auto mt-8 p-8 bg-white bg-opacity-50 max-w-2xl mb-9 rounded">

    <!-- Detail Tiket -->
    <div class="mb-8">
      <h1 class="text-2xl font-bold mb-4 noto-serif ">Detail Tiket</h1>
      <!-- Tambahkan detail tiket di sini -->
      <div class="border-b-2 border-t-2 border-black p-4 rounded shadow-2xl flex items-center ">
          <div class="">
            <img src="{{ asset('img/roc.jfif') }}" alt="Gambar Event" class="rounded-lg h-40 q-40">
          </div>
          <div class="ml-9 mr-5">
            
            <p class="mb-2"><strong>Event Konser:</strong> Rex Orange County </p>
            <p class="mb-2"><strong>Tanggal:</strong> 10 Maret 2024</p>
            <p class="mb-2"><strong>Jumlah Tiket:</strong> 2</p>
            <p class="mb-2"><strong>Jenis Tiket:</strong> VVIP</p>
            <p class="mb-2"><strong>Total Harga:</strong> Rp. 15.000.000,00</p>
          </div>
        </div>
    </div>

    <!-- Pembayaran -->
    <h2 class="text-2xl font-bold mb-4 noto-serif ">Pembayaran</h2>
    <div class="border-b-2 border-t-2 border-black p-4 rounded shadow-2xl">

        <!-- Pilihan Jenis Pembayaran -->
        <div class="mb-4">
            <h3 class="text-lg font-semibold mb-2">Pilih Jenis Pembayaran</h3>
            <!-- Radio buttons untuk pilihan jenis pembayaran -->
            <div class="flex items-center space-x-4">
                <label class="flex items-center">
                    <input type="radio" name="paymentMethod" value="creditCard" class="form-radio">
                    <span class="ml-2">E-Wallet</span>
                </label>
                <label class="flex items-center">
                    <input type="radio" name="paymentMethod" value="bankTransfer" class="form-radio">
                    <span class="ml-2">Transfer Bank</span>
                </label>
                <!-- Tambahkan pilihan pembayaran lainnya sesuai kebutuhan -->
            </div>
        </div>

        <!-- Form Upload Bukti Pembayaran -->
        <div>
            <h3 class="text-lg font-semibold mb-2">Upload Bukti Pembayaran</h3>
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="mb-4">
                    <label for="upload" class="block text-sm font-medium text-gray-700">Pilih File Foto</label>
                    <input type="file" name="upload" id="upload" accept="image/*" class="mt-1 p-2 border-b border-r shadow-lg rounded bg-gray-400">
                </div>
                <button type="submit"
                    class="btn hover:bg-gray-500">Buy Tickets</button>
            </form>
        </div>
    </div>

</div>

@include('components.footer')
</body>

</html>
