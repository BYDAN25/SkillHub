<x-app-layout>

<div class="max-w-7xl mx-auto px-6 py-8">

    <div class="mb-8">

        <h1 class="text-4xl font-bold text-slate-800">
            Historial de Reservas
        </h1>

        <p class="text-slate-500 mt-2">
            Consulta todas las reservas realizadas, incluyendo las canceladas.
        </p>

    </div>

    <div class="bg-white rounded-xl shadow border border-slate-200 overflow-hidden">

        <table class="min-w-full">

            <thead class="bg-slate-800 text-white">

                <tr>

                    <th class="px-6 py-4 text-left">
                        Clase
                    </th>

                    <th class="px-6 py-4 text-left">
                        Fecha
                    </th>

                    <th class="px-6 py-4 text-center">
                        Estado
                    </th>

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

                    <td class="px-6 py-4 text-center">

                        @if($reserva->estado == 'Reservada')

                            <span class="bg-emerald-100 text-emerald-700 px-3 py-1 rounded-full text-sm font-semibold">

                                Reservada

                            </span>

                        @elseif($reserva->estado == 'Cancelada')

                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-semibold">

                                Cancelada

                            </span>

                        @else

                            <span class="bg-slate-100 text-slate-700 px-3 py-1 rounded-full text-sm font-semibold">

                                {{ $reserva->estado }}

                            </span>

                        @endif

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="3" class="text-center py-10 text-slate-500">

                        No hay registros en el historial.

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

</x-app-layout>