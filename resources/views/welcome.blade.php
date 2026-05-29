<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Rekomendasi Karir</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-950 text-white overflow-x-hidden">

    <!-- Navbar -->
    <nav class="flex justify-between items-center px-6 md:px-10 py-5 border-b border-gray-800">

        <h1 class="text-xl md:text-2xl font-bold text-cyan-400">
            CareerPath AI
        </h1>

        <div class="flex items-center gap-3">

            <a
                href="/login"
                class="px-4 md:px-5 py-2 bg-cyan-500 rounded-lg hover:bg-cyan-600 transition text-sm md:text-base"
            >
                Login
            </a>

            <a
                href="/register"
                class="px-4 md:px-5 py-2 border border-cyan-500 rounded-lg hover:bg-cyan-500 transition text-sm md:text-base"
            >
                Register
            </a>

        </div>

    </nav>

    <!-- Hero -->
    <section class="min-h-screen flex items-center justify-center px-6 md:px-10 -mt-16 md:-mt-10">

        <div class="w-full max-w-4xl text-center mx-auto">

           <h1 class="text-6xl sm:text-6xl md:text-8xl font-extrabold leading-tight md:leading-[95px] mb-6 -mt-10">

                Temukan Karir Terbaik

                <span class="text-cyan-400">
                    Untuk Masa Depanmu
                </span>

            </h1>

            <p class="text-base sm:text-lg md:text-xl text-gray-400 leading-relaxed mb-10 max-w-2xl mx-auto">

                Platform cerdas untuk membantu menemukan karir terbaik
                berdasarkan minat, kemampuan, dan potensi diri.

            </p>

            <!-- Button -->
            <div class="flex flex-wrap items-center justify-center gap-4">

                <a
                    href="/register"
                    class="px-6 md:px-8 py-3 md:py-4 bg-cyan-500 rounded-xl text-base md:text-lg hover:bg-cyan-600 transition duration-300"
                >
                    Mulai Sekarang
                </a>

                <a
                    href="/login"
                    class="px-6 md:px-8 py-3 md:py-4 border border-cyan-500 rounded-xl text-base md:text-lg hover:bg-cyan-500 transition duration-300"
                >
                    Login
                </a>

            </div>

        </div>

    </section>

</body>
</html>