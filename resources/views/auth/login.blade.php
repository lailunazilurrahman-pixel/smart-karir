<x-guest-layout>

    <div class="text-center mb-6">

        <h1 class="text-3xl font-bold text-white">
            Sistem Rekomendasi Karir
        </h1>

        <p class="text-gray-400 mt-2">
            Temukan karir terbaik sesuai minat dan kemampuanmu 🚀
        </p>

    </div>

    <!-- Session Status -->
    <x-auth-session-status
        class="mb-4"
        :status="session('status')"
    />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div>

            <x-input-label
                for="email"
                :value="__('Email')"
            />

            <x-text-input
                id="email"
                class="block mt-1 w-full bg-gray-800 border-gray-700 text-white"
                type="email"
                name="email"
                :value="old('email')"
                required
                autofocus
                autocomplete="username"
            />

            <x-input-error
                :messages="$errors->get('email')"
                class="mt-2"
            />

        </div>

        <!-- Password -->
        <div class="mt-4">

    <x-input-label
        for="password"
        :value="__('Password')"
    />

    <div class="relative">

        <input
            id="password"
            type="password"
            name="password"
            required
            autocomplete="current-password"
            class="block mt-1 w-full rounded-md bg-gray-800 border-gray-700 text-white pr-12"
        >

      <button
    type="button"
    onclick="togglePassword()"
    class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500"
>
    👁️
</button>

    </div>

</div>

        <!-- Remember Me -->
        <div class="block mt-4">

            <label
                for="remember_me"
                class="inline-flex items-center"
            >

                <input
                    id="remember_me"
                    type="checkbox"
                    class="rounded border-gray-700 bg-gray-900 text-indigo-600 shadow-sm focus:ring-indigo-500"
                    name="remember"
                >

                <span class="ms-2 text-sm text-gray-400">
                    Remember me
                </span>

            </label>

        </div>

        <!-- Button -->
        <div class="flex items-center justify-between mt-6">

            @if (Route::has('password.request'))

                <a
                    class="underline text-sm text-gray-400 hover:text-white"
                    href="{{ route('password.request') }}"
                >
                    Forgot password?
                </a>

            @endif

            <x-primary-button class="ms-3">

                Login

            </x-primary-button>

        </div>

    </form>

    <script>

        function togglePassword() {

            const password =
                document.getElementById('password');

            if (password.type === 'password') {

                password.type = 'text';

            } else {

                password.type = 'password';

            }
        }

    </script>

</x-guest-layout>