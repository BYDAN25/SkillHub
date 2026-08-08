<x-app-layout>

    <x-slot name="header">

        <div>

            <h2 class="text-3xl font-bold text-slate-800">
                👤 Mi Perfil
            </h2>

            <p class="mt-2 text-slate-500">
                Administra tu información personal y la seguridad de tu cuenta.
            </p>

        </div>

    </x-slot>

    <div class="py-10">

        <div class="max-w-5xl mx-auto px-4 space-y-8">

            <!-- Información -->

            <div class="bg-white border border-slate-200 rounded-xl shadow-md">

                <div class="p-8">

                    @include('profile.partials.update-profile-information-form')

                </div>

            </div>

            <!-- Contraseña -->

            <div class="bg-white border border-slate-200 rounded-xl shadow-md">

                <div class="p-8">

                    @include('profile.partials.update-password-form')

                </div>

            </div>

            <!-- Eliminar cuenta -->

            <div class="bg-white border border-red-200 rounded-xl shadow-md">

                <div class="p-8">

                    @include('profile.partials.delete-user-form')

                </div>

            </div>

        </div>

    </div>

</x-app-layout>