<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->
  @vite('resources/css/app.css')

  <link href="./output.css" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <link rel="stylesheet" href="main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
  
  <title>Frontend Mentor | Four card feature section</title>
</head>
<body class="font-Poppins bg-gray-100">

  <div class="container mx-auto xl:w-screen w-96 text-center px-9 py-16">
    <header class="mb-16">
      <h1 class="mb-4 leading-8">
        <span class="text-gray-400 block text-2xl">Reliable, efficient delivery</span>
        <span class="block font-semibold text-2xl">Powered by Technology</span>
      </h1>
      <p class="xl:w-5/12 xl:mx-auto leading-6 text-s text-gray-400">Our Artificial Intelligence powered tools use millions of project data points 
        to ensure that your project is successful</p>
    </header>

    {{-- <main class="xl:grid grid-cols-12 grid-rows-4 gap-x-8 xl:px-52"> --}}
        {{ $slot }}
    {{-- </main> --}}
  </div>
</body>
</html>