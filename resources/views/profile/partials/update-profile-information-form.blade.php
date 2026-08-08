<section>

    <div class="mb-6">

        <h2 class="text-2xl font-bold text-slate-800">
            👤 Información personal
        </h2>

        <p class="text-slate-500 mt-2">
            Actualiza tu nombre y correo electrónico.
        </p>

    </div>

    <form method="post" action="{{ route('profile.update') }}" class="space-y-6">

        @csrf
        @method('patch')

        <div>

            <x-input-label for="name" value="Nombre completo" />

            <x-text-input
                id="name"
                name="name"
                type="text"
                class="mt-2 block w-full rounded-lg"
                :value="old('name', $user->name)"
                required
                autofocus />

            <x-input-error
                :messages="$errors->get('name')"
                class="mt-2" />

        </div>

        <div>

            <x-input-label for="email" value="Correo electrónico" />

            <x-text-input
                id="email"
                name="email"
                type="email"
                class="mt-2 block w-full rounded-lg"
                :value="old('email', $user->email)"
                required />

            <x-input-error
                :messages="$errors->get('email')"
                class="mt-2" />

        </div>

        <div>

            <button
                class="bg-emerald-600 hover:bg-emerald-700 text-white px-6 py-3 rounded-lg font-semibold transition">

                Guardar cambios

            </button>

        </div>

    </form>

</section>