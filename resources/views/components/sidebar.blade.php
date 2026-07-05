<aside class="w-72 bg-[#121821] border-r border-zinc-800 min-h-screen text-white">

    <!-- LOGO -->
    <div class="p-8">
        <h1 class="text-3xl font-black tracking-wider">
            <span class="text-white">VYXIAN</span>
            <span class="text-red-500">Libary</span>
        </h1>
    </div>

    <!-- NAV -->
    <nav class="px-5">

        <a href="#" class="mb-3 flex items-center gap-3 rounded-xl bg-red-600 px-5 py-4 font-semibold">
            🏠 Home
        </a>

        <a href="/library" class="mb-3 flex items-center gap-3 rounded-xl px-5 py-4 hover:bg-zinc-800">
        📚 Library
        </a>

        <a href="#" class="mb-3 flex items-center gap-3 rounded-xl px-5 py-4 hover:bg-zinc-800">
            🔥 Trending
        </a>

        <a href="#" class="mb-3 flex items-center gap-3 rounded-xl px-5 py-4 hover:bg-zinc-800">
            ❤️ Wishlist
        </a>

        <a href="#" class="mb-3 flex items-center gap-3 rounded-xl px-5 py-4 hover:bg-zinc-800">
            ⭐ Favorites
        </a>

        <a href="#" class="mb-3 flex items-center gap-3 rounded-xl px-5 py-4 hover:bg-zinc-800">
            ⚙️ Settings
        </a>

    </nav>

    <!-- DARK MODE -->
    <div class="absolute bottom-5 w-full px-5">

        <button
            onclick="toggleDark()"
            class="w-full flex items-center justify-between rounded-xl bg-zinc-900 px-5 py-3 hover:bg-zinc-800">

            <span>🌙 Dark Mode</span>

            <span id="modeText" class="text-xs text-zinc-400">ON</span>

        </button>

    </div>

</aside>

<script>
let darkMode = true;

function toggleDark() {
    darkMode = !darkMode;

    const body = document.body;
    const text = document.getElementById("modeText");

    if (darkMode) {
        body.style.background = "#0b0b0b";
        text.innerText = "ON";
    } else {
        body.style.background = "#f3f4f6";
        text.innerText = "OFF";
    }
}
</script>