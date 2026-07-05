<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VYXIAN Library</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-black">

<section class="relative flex min-h-screen items-center justify-center overflow-hidden">

    <!-- Background -->
    <div class="absolute inset-0">
        <img
            src="https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=1920&auto=format&fit=crop"
            class="h-full w-full object-cover"
            alt="">
    </div>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/70"></div>

    <!-- Gradient -->
    <div class="absolute inset-0 bg-gradient-to-r from-black via-black/60 to-red-950/40"></div>

    <!-- Content -->
    <div class="relative z-10 text-center">

        <p class="mb-4 text-red-500 tracking-[8px] font-semibold">
            GAME COLLECTION
        </p>

        <h1 class="text-7xl font-black text-white">
            VYXIAN
        </h1>

        <h2 class="mt-2 text-5xl font-bold text-red-500">
            LIBRARY
        </h2>

        <p class="mx-auto mt-8 max-w-xl text-lg text-gray-300">
            Every game has a story.
            Build your personal collection and explore your favorite adventures.
        </p>

        <a href="/home"
           class="mt-12 inline-block rounded-xl bg-red-600 px-10 py-4 text-lg font-bold text-white transition duration-300 hover:scale-105 hover:bg-red-700">
            ENTER LIBRARY
        </a>

    </div>

</section>

</body>
</html>