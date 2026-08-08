<x-guest-layout>

    <form method="POST" action="{{ route('register') }}">

        @csrf

        <div class="text-center mb-8">

            <h1 class="text-3xl font-bold text-slate-800">
                SkillHub
            </h1>

            <p class="text-slate-500 mt-2">
                Crea una cuenta para comenzar a reservar clases.
            </p>

        </div>

        <!-- Nombre -->

        <div>

            <x-input-label
                for="name"
                value="Nombre completo" />

            <x-text-input
                id="name"
                class="block mt-2 w-full"
                type="text"
                name="name"
                :value="old('name')"
                required
                autofocus
                autocomplete="name" />

            <x-input-error
                :messages="$errors->get('name')"
                class="mt-2" />

        </div>

        <!-- Correo -->

        <div class="mt-5">

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
                autocomplete="new-password" />

            <x-input-error
                :messages="$errors->get('password')"
                class="mt-2" />

        </div>

        <!-- Confirmar contraseña -->

        <div class="mt-5">

            <x-input-label
                for="password_confirmation"
                value="Confirmar contraseña" />

            <x-text-input
                id="password_confirmation"
                class="block mt-2 w-full"
                type="password"
                name="password_confirmation"
                required
                autocomplete="new-password" />

            <x-input-error
                :messages="$errors->get('password_confirmation')"
                class="mt-2" />

        </div>

        <!-- Botones -->

        <div class="flex justify-between items-center mt-8">

            <a href="{{ route('login') }}"
               class="px-5 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold transition">

                Ya tengo cuenta

            </a>

            <button
                type="submit"
                class="px-6 py-2 rounded-lg bg-emerald-600 hover:bg-emerald-700 text-white font-semibold transition">

                Registrarme

            </button>

        </div>

    </form>

</x-guest-layout>