<section>

    <div class="mb-6">

        <h2 class="text-2xl font-bold text-slate-800">
            🔒 Cambiar contraseña
        </h2>

        <p class="text-slate-500 mt-2">
            Mantén tu cuenta protegida utilizando una contraseña segura.
        </p>

    </div>

    <form method="post" action="{{ route('password.update') }}" class="space-y-6">

        @csrf
        @method('put')

        <div>

            <x-input-label
                for="update_password_current_password"
                value="Contraseña actual" />

            <x-text-input
                id="update_password_current_password"
                name="current_password"
                type="password"
                class="mt-2 block w-full rounded-lg" />

            <x-input-error
                :messages="$errors->updatePassword->get('current_password')"
                class="mt-2" />

        </div>

        <div>

            <x-input-label
                for="update_password_password"
                value="Nueva contraseña" />

            <x-text-input
                id="update_password_password"
                name="password"
                type="password"
                class="mt-2 block w-full rounded-lg" />

            <x-input-error
                :messages="$errors->updatePassword->get('password')"
                class="mt-2" />

        </div>

        <div>

            <x-input-label
                for="update_password_password_confirmation"
                value="Confirmar contraseña" />

            <x-text-input
                id="update_password_password_confirmation"
                name="password_confirmation"
                type="password"
                class="mt-2 block w-full rounded-lg" />

        </div>

        <button
            class="bg-emerald-600 hover:bg-emerald-700 text-white px-6 py-3 rounded-lg font-semibold transition">

            Actualizar contraseña

        </button>

    </form>

</section>