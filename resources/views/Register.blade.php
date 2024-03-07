<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-blue-400 via-purple-500 to-pink-500 flex items-center justify-center h-screen">
    <div class="bg-white bg-opacity-20 backdrop-blur-lg p-8 rounded-lg shadow-md">
        <h2 class="text-3xl font-semibold text-white mb-4">Register</h2>
        <form action="#" method="POST">
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-white mb-2 ">Username</label>
                <input type="text" id="username" name="username" class="w-full px-4 py-2 rounded-md bg-white bg-opacity-10 text-white focus:outline-none border border-transparent focus:bg-opacity-20 placeholder-neutral-300" placeholder="Enter your username" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-white mb-2 ">Email Address</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 rounded-md bg-white bg-opacity-10 text-white focus:outline-none border border-transparent focus:bg-opacity-20 placeholder-neutral-300" placeholder="Enter your email" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-white mb-2">Password</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 rounded-md bg-white bg-opacity-10 text-white focus:outline-none focus:bg-opacity-20 placeholder-neutral-300 " placeholder="Enter your password" required>
            </div>
            <div class="mb-6">
                <label for="confirm_password" class="block text-sm font-medium text-white mb-2">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" class="w-full px-4 py-2 rounded-md bg-white bg-opacity-10 text-white focus:outline-none focus:bg-opacity-20 placeholder-neutral-300" placeholder="Confirm your password" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none transition-all">Register</button>
        </form>
    </div>
</body>
</html>