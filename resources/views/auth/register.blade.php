<x-guest-layout>

    <div class="text-center mb-6">

        <h1 class="text-3xl font-bold text-white">
            Buat Akun
        </h1>

        <p class="text-gray-400 mt-2">
            Daftar untuk menemukan karir terbaikmu
        </p>

    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>

            <x-input-label
                for="name"
                :value="__('Nama')"
            />

            <x-text-input
                id="name"
                class="block mt-1 w-full bg-gray-800 border border-gray-700 text-white rounded-lg py-3"
                type="text"
                name="name"
                :value="old('name')"
                required
                autofocus
                autocomplete="name"
            />

            <x-input-error
                :messages="$errors->get('name')"
                class="mt-2"
            />

        </div>

        <!-- Email -->
        <div class="mt-4">

            <x-input-label
                for="email"
                :value="__('Email')"
            />

            <x-text-input
                id="email"
                class="block mt-1 w-full bg-gray-800 border border-gray-700 text-white rounded-lg py-3"
                type="email"
                name="email"
                :value="old('email')"
                required
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

            <div class="relative mt-1">

                <input
                    id="password"
                    type="password"
                    name="password"
                    required
                    autocomplete="new-password"
                    class="block w-full rounded-lg bg-gray-800 border border-gray-700 text-white py-3 px-3 pr-12 focus:ring-2 focus:ring-indigo-500"
                >

                <button
                    type="button"
                    onclick="togglePassword()"
                    class="absolute inset-y-0 right-0 flex items-center pr-4 text-gray-400 hover:text-white"
                >
                    👁️
                </button>

            </div>

            <x-input-error
                :messages="$errors->get('password')"
                class="mt-2"
            />

        </div>

        <!-- Confirm Password -->
        <div class="mt-4">

            <x-input-label
                for="password_confirmation"
                :value="__('Konfirmasi Password')"
            />

            <div class="relative mt-1">

                <input
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                    class="block w-full rounded-lg bg-gray-800 border border-gray-700 text-white py-3 px-3 pr-12 focus:ring-2 focus:ring-indigo-500"
                >

                <button
                    type="button"
                    onclick="toggleConfirmPassword()"
                    class="absolute inset-y-0 right-0 flex items-center pr-4 text-gray-400 hover:text-white"
                >
                    👁️
                </button>

            </div>

            <x-input-error
                :messages="$errors->get('password_confirmation')"
                class="mt-2"
            />

        </div>

        <!-- Button -->
        <div class="flex items-center justify-between mt-6">

            <a
                class="underline text-sm text-gray-400 hover:text-white"
                href="{{ route('login') }}"
            >
                Sudah punya akun?
            </a>

            <x-primary-button class="ms-4">

                Daftar

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

        function toggleConfirmPassword() {

            const password =
                document.getElementById('password_confirmation');

            if (password.type === 'password') {

                password.type = 'text';

            } else {

                password.type = 'password';

            }
        }

    </script>

</x-guest-layout>