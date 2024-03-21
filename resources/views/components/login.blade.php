<dialog id="my_modal_1" class="modal">
  <div class="modal-box new-rocker-regular">
    <h3 class="font-bold text-lg">Login</h3>
    <form id="loginForm" class="py-4">
      @csrf
      
      <div class="mb-4">
        <label for="email" class="block text-sm font-medium ">Email address</label>
        <input type="email" name="email" id="email" class="mt-1 p-2 block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
      </div>
      <div class="mb-4">
        <label for="password" class="block text-sm font-medium ">Password</label>
        <input type="password" name="password" id="password" class="mt-1 p-2 block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
      </div>
      
      <div class="flex justify-end">
        <button type="submit" class="btn w-full" onclick="handleLogin(event); my_modal_1.close();">Login</button>
      </div>
    </form>
    <p class="text-sm text-gray-500">Don't have an account? <button onclick="my_modal_2.showModal(); my_modal_1.close();" class="text-indigo-500">Register here</button></p>
  </div>
</dialog>


<script>
    <!-- JS Untuk mengatur warna teks sesuai tema browser -->
  const isDarkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;

  const inputBorder = document.querySelectorAll('.border');
  inputBorder.forEach(border => {
    border.style.borderColor = isDarkMode ? 'white' : 'black'; // Adjust border color based on theme
  });

//   <!-- JS Untuk mencegah default tombol submit -->
  function handleLogin(event) {
    event.preventDefault(); 
    
  }
</script>
