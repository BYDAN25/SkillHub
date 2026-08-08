<section>

    <div class="mb-6">

        <h2 class="text-2xl font-bold text-red-600">
            🗑 Eliminar cuenta
        </h2>

        <p class="text-slate-500 mt-2">

            Esta acción eliminará permanentemente tu cuenta y toda la información almacenada.

        </p>

    </div>

    <button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-semibold transition">

        Eliminar mi cuenta

    </button>

    <x-modal name="confirm-user-deletion" focusable>

        <form method="post"
              action="{{ route('profile.destroy') }}"
              class="p-6">

            @csrf
            @method('delete')

            <h2 class="text-xl font-bold text-gray-800">

                Confirmar eliminación

            </h2>

            <p class="mt-3 text-gray-600">

                Escribe tu contraseña para confirmar que deseas eliminar tu cuenta.

            </p>

            <div class="mt-6">

                <x-input-label
                    for="password"
                    value="Contraseña" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-2 block w-full" />

                <x-input-error
                    :messages="$errors->userDeletion->get('password')"
                    class="mt-2" />

            </div>

            <div class="mt-8 flex justify-end gap-3">

                <button
                    type="button"
                    x-on:click="$dispatch('close')"
                    class="bg-gray-300 hover:bg-gray-400 px-5 py-2 rounded-lg">

                    Cancelar

                </button>

                <button
                    class="bg-red-600 hover:bg-red-700 text-white px-5 py-2 rounded-lg">

                    Eliminar cuenta

                </button>

            </div>

        </form>

    </x-modal>

</section>