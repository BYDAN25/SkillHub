<x-app-layout>

<div class="max-w-7xl mx-auto px-6 py-8">

    <div class="mb-8">

        <h1 class="text-4xl font-bold text-slate-800">
            Mis Reservas
        </h1>

        <p class="text-slate-500 mt-2">
            Consulta las clases que has reservado y administra tus reservas.
        </p>

    </div>

    @if(session('success'))

        <div class="mb-6 rounded-lg border border-emerald-300 bg-emerald-100 p-4 text-emerald-700">

            {{ session('success') }}

        </div>

    @endif

    <div class="bg-white rounded-xl shadow border border-slate-200 overflow-hidden">

        <table class="min-w-full">

            <thead class="bg-slate-800 text-white">

                <tr>

                    <th class="px-6 py-4 text-left">Clase</th>

                    <th class="px-6 py-4 text-left">Fecha</th>

                    <th class="px-6 py-4 text-left">Hora</th>

                    <th class="px-6 py-4 text-center">Estado</th>

                    <th class="px-6 py-4 text-center">Acciones</th>

                </tr>

            </thead>

            <tbody>

                @forelse($reservas as $reserva)

                <tr class="border-b hover:bg-slate-50 transition">

                    <td class="px-6 py-4 font-semibold text-slate-800">

                        {{ $reserva->horario->clase->nombre }}

                    </td>

                    <td class="px-6 py-4">

                        {{ \Carbon\Carbon::parse($reserva->horario->fecha)->format('d/m/Y') }}

                    </td>

                    <td class="px-6 py-4">

                        {{ substr($reserva->horario->hora_inicio,0,5) }}

                    </td>

                    <td class="px-6 py-4 text-center">

                        @if($reserva->estado == 'Reservada')

                            <span class="bg-emerald-100 text-emerald-700 px-3 py-1 rounded-full text-sm font-semibold">

                                Reservada

                            </span>

                        @else

                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-semibold">

                                {{ $reserva->estado }}

                            </span>

                        @endif

                    </td>

                    <td class="px-6 py-4 text-center">

                        @if($reserva->estado == 'Reservada')

                        <form action="{{ route('reservas.destroy',$reserva->id) }}" method="POST">

                            @csrf

                            @method('DELETE')

                            <button
                                onclick="return confirm('¿Deseas cancelar esta reserva?')"
                                class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition">

                                Cancelar

                            </button>

                        </form>

                        @else

                            <span class="text-slate-400">

                                —

                            </span>

                        @endif

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="5" class="text-center py-10 text-slate-500">

                        No tienes reservas registradas.

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

</x-app-layout>