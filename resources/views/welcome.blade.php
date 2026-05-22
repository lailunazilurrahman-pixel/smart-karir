<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Rekomendasi Karir</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-950 text-white">

    <nav class="flex justify-between items-center px-10 py-5 border-b border-gray-800">
        <h1 class="text-2xl font-bold text-cyan-400">
            kelompok 9
        </h1>

        <div class="space-x-4">
            <a href="/login" class="px-5 py-2 bg-cyan-500 rounded-lg hover:bg-cyan-600">
                Login
            </a>

            <a href="/register" class="px-5 py-2 border border-cyan-500 rounded-lg hover:bg-cyan-500">
                Register
            </a>
        </div>
    </nav>

    <section class="min-h-screen flex items-center justify-center px-10">
        <div class="max-w-3xl text-center">

            <h1 class="text-6xl font-extrabold leading-tight mb-6">
                Sistem Rekomendasi Karir
                <span class="text-cyan-400">Berbasis SAW</span>
            </h1>

            <p class="text-gray-400 text-lg mb-8">
                Website modern untuk membantu pengguna menemukan
                karir terbaik berdasarkan minat dan skill menggunakan
                metode Simple Additive Weighting (SAW).
            </p>

            <div class="space-x-4">
                <a href="/register"
                    class="px-8 py-4 bg-cyan-500 rounded-xl text-lg hover:bg-cyan-600 transition">
                    Mulai Sekarang
                </a>

                <a href="/login"
                    class="px-8 py-4 border border-cyan-500 rounded-xl text-lg hover:bg-cyan-500 transition">
                    Login
                </a>
            </div>

        </div>
    </section>

</body>
</html>