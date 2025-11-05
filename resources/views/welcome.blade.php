<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cloud Class ☁️</title>

  <link rel="icon" type="image/png" href="{{ asset('cloud.png') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to bottom right, #fffbea, #fef3c7);
    }
  </style>
</head>
<body class="flex flex-col min-h-screen justify-center items-center text-center p-6">

  <!-- Cloud Header -->
  <div class="bg-white/70 backdrop-blur-sm border border-yellow-100 shadow-md rounded-3xl p-10 max-w-lg w-full">
    <div class="flex justify-center mb-6">
      <div class="bg-yellow-100 p-4 rounded-2xl shadow-inner">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
            d="M3 8l9 6 9-6M4 6h16a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2z" />
        </svg>
      </div>
    </div>

    <h1 class="text-3xl font-semibold text-gray-800">Welcome to <span class="text-amber-500">Labubu Class ☁️</span></h1>
    <p class="text-gray-600 mt-3">Learn about cloud computing! 🌤️</p>

    <!-- Button -->
    <div class="mt-8">
      <a href="{{ url('/mail-form') }}"
         class="inline-block bg-amber-400 hover:bg-amber-500 text-gray-800 font-medium px-8 py-3 rounded-lg shadow-md hover:shadow-lg transition-all duration-200">
         📧 Register with Email
      </a>
    </div>

    <!-- Illustration -->
    <div class="mt-10">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fef3c7" fill-opacity="1" 
          d="M0,288L48,261.3C96,235,192,181,288,149.3C384,117,480,107,576,112C672,117,768,139,864,144C960,149,1056,139,1152,149.3C1248,160,1344,192,1392,208L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
      </svg>
    </div>
  </div>

  <!-- Footer -->
  <footer class="mt-8 text-gray-500 text-sm">
    &copy; {{ date('Y') }} feli.pakevan.web.id | Cloud Class ☁️
  </footer>

</body>
</html>
