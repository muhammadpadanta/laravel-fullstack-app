<!doctype html>
<html>
<head>
  <title>Dashboard</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-black text-center bg-opacity-45">
        <h1>Dashboard</h1>
    </div>

    <div class="header">
        <h1>Image 1</h1>
    </div>

    <div class="col-md-10">

    <div class="mb-4">

    <div class="container">

        <div class="sidebar1">
        <img src="{{ asset('images/image (1).jpg') }}" style="width: 200px; height:200px;">

        </div>

        <div class="sidebar2">
        <img src="{{ asset('images/image (2).jpg') }}" style="width: 200px; height:200px;">

        </div>   
    </div>
</div>

<div class="header">
        <h1>Image 2</h1>
    </div>

    <div class="container">
            
        <div class="sidebar3">
        <img src="{{ asset('images/image (3).jpg') }}" style="width: 200px; height:200px;">

        </div>

        
        <div class="sidebar4">
        <img src="{{ asset('images/image (4).jpg') }}" style="width: 200px; height:200px;">

        </div>
    </div>
</div>

    <div class="footer">
        <p>&copy; 2024 Dashboard App</p>
    </div>
</body>
</html>