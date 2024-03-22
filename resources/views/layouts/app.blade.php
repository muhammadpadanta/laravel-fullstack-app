<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Welcome Page')</title>

    <!-- Install Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Install DaisyUI CSS -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />

    <!-- Install Custom Font -->
    <link href="https://fonts.googleapis.com/css2?family=Praise&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=New+Rocker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Thai:wght@100..900&display=swap" rel="stylesheet">

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

        .noto-serif thai-<uniquifier> {
            font-family: "Noto Serif Thai", serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
            font-variation-settings:
                "wdth" 100;
        }

    </style>

</head>

<body class="overflow-x-hidden" >
    <header class="bg-gray-800">
        @include('components.navbar')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('components.footer')
    </footer>
</body>
</html>
