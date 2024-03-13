<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    @vite('resources/css/app.css')
    <title>Pembayaran | Orders</title>
</head>

<body class="bg-gray-100 font-sans bg-gradient-to-br from-blue-400 via-purple-500 to-pink-500  h-screen">

  <div class="container mx-auto mt-8 p-8 bg-white bg-opacity-50 shadow-md max-w-2xl">

    <!-- Detail Tiket -->
    <div class="mb-8">
      <h1 class="text-2xl font-bold mb-4">Detail Tiket</h1>
      <!-- Tambahkan detail tiket di sini -->
      <div class="border p-4 rounded shadow-lg flex items-center ">
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
    <div class="border p-4 rounded shadow-lg">
        <h2 class="text-2xl font-bold mb-4">Pembayaran</h2>

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
                    <input type="file" name="upload" id="upload" accept="image/*" class="mt-1 p-2 border rounded">
                </div>
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Buy Tickets</button>
            </form>
        </div>
    </div>

</div>


</body>

</html>
