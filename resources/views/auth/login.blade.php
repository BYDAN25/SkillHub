<x-guest-layout>

    <!-- Mensaje de sesión -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">

        @csrf

        <div class="text-center mb-8">

            <h1 class="text-3xl font-bold text-slate-800">
                SkillHub
            </h1>

            <p class="text-slate-500 mt-2">
                Inicia sesión para reservar tus clases.
            </p>

        </div>

        <!-- Correo -->

        <div>

            <x-input-label
                for="email"
                value="Correo electrónico" />

            <x-text-input
                id="email"
                class="block mt-2 w-full"
                type="email"
                name="email"
                :value="old('email')"
                required
                autofocus
                autocomplete="username" />

            <x-input-error
                :messages="$errors->get('email')"
                class="mt-2" />

        </div>

        <!-- Contraseña -->

        <div class="mt-5">

            <x-input-label
                for="password"
                value="Contraseña" />

            <x-text-input
                id="password"
                class="block mt-2 w-full"
                type="password"
                name="password"
                required
                autocomplete="current-password" />

            <x-input-error
                :messages="$errors->get('password')"
                class="mt-2" />

        </div>

        <!-- Recordarme -->

        <div class="mt-5">

            <label class="inline-flex items-center">

                <input
                    id="remember_me"
                    type="checkbox"
                    name="remember"
                    class="rounded border-gray-300 text-emerald-600 shadow-sm focus:ring-emerald-500">

                <span class="ml-2 text-sm text-gray-600">

                    Recordarme

                </span>

            </label>

        </div>

        @if (Route::has('password.request'))

            <div class="mt-4 text-right">

                <a href="{{ route('password.request') }}"
                   class="text-sm text-emerald-600 hover:text-emerald-700">

                    ¿Olvidaste tu contraseña?

                </a>

            </div>

        @endif

        <!-- Botones -->

        <div class="flex justify-between items-center mt-8">

            <a href="{{ route('register') }}"
               class="px-5 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold transition">

                Crear cuenta

            </a>

            <button
                type="submit"
                class="px-6 py-2 rounded-lg bg-emerald-600 hover:bg-emerald-700 text-white font-semibold transition">

                Iniciar sesión

            </button>

        </div>

    </form>

</x-guest-layout>