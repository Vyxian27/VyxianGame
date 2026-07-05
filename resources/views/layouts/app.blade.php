<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Vyxian</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#0b0b0b] text-white flex">

<!-- SIDEBAR -->
<aside class="w-72 bg-[#121821] border-r border-zinc-800 min-h-screen">

    <div class="p-8">
        <h1 class="text-3xl font-black tracking-wider">
            <span class="text-white">VYXIAN</span>
            <span class="text-red-500">.</span>
        </h1>
    </div>

    <nav class="px-5">

        <a href="/home" class="mb-3 block rounded-xl px-5 py-4 hover:bg-zinc-800">
            🏠 Home
        </a>

        <a href="/library" class="mb-3 block rounded-xl px-5 py-4 hover:bg-zinc-800">
            📚 Library
        </a>

        <a href="#" class="mb-3 block rounded-xl px-5 py-4 hover:bg-zinc-800">
            ❤️ Wishlist
        </a>

        <a href="#" class="mb-3 block rounded-xl px-5 py-4 hover:bg-zinc-800">
            🔥 Trending
        </a>

        <a href="#" class="mb-3 block rounded-xl px-5 py-4 hover:bg-zinc-800">
            ⚙️ Settings
        </a>

    </nav>

</aside>

<!-- MAIN AREA -->
<div class="flex-1">

    <!-- NAVBAR -->
    <header class="flex items-center justify-between border-b border-zinc-800 bg-[#121821] px-8 py-5">

        <input
            type="text"
            placeholder="Search games..."
            class="w-96 rounded-xl bg-[#1b2430] px-5 py-3 outline-none text-white">

        <nav class="flex items-center gap-5 text-sm text-zinc-300">
            <a href="/home" class="hover:text-white">Home</a>
            <a href="/library" class="hover:text-white">Library</a>
            <a href="#">Wishlist</a>
            <a href="#">News</a>
            <a href="#">Community</a>
        </nav>

    </header>

    <!-- CONTENT DINAMIS -->
    <main class="p-6">
        @yield('content')
    </main>

</div>

</body>
</html>