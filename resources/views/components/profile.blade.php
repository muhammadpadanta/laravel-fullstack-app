<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
    <style>
        
        .glassmorphism {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            padding: 20px;
        }
    </style>
</head>
<body class="h-screen bg-gray-200 flex flex-row-1 justify-center items-center">

    <div class="kon1 flex flex-col justify-between">
        <div class="glassmorphism max-w-md w-full p-8">
            <div class="flex justify-center mb-6">
                <img class="w-32 h-32 rounded-full" src="https://avatars.githubusercontent.com/u/115600378?v=4" alt="Profile Picture">
            </div>
            <h2 class="text-3xl font-bold text-center mb-4">Muhammad Padanta Tarigan</h2>
            <p class="text-center text-gray-400 mb-6">Customer</p>
            <div class="border-t border-gray-300"></div>
            <div class="mt-6">
                <div class="flex justify-between items-center mb-4">
                    <span class="text-gray-600">Email:</span>
                    <span class="text-gray-800">danta.mail.com</span>
                </div>
                <div class="flex justify-between items-center mb-4">
                    <span class="text-gray-600">Phone:</span>
                    <span class="text-gray-800">+62 821 7577 4102</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-600">Address:</span>
                    <span class="text-gray-800">Batam, Indonesia</span>
                </div>
            </div>
        </div>
        <div class="mt-6 flex justify-center items-center space-x-5">
            <a href="/">
            <button class="btn ">Back</button>
            </a>
        
            <a href="/editProfile">
            <button class="btn btn-neutral ">Edit Profile</button>
             </a>
        </div>
    </div>

</body>


</html>
