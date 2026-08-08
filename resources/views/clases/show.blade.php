<x-app-layout>

<div class="max-w-6xl mx-auto px-6 py-8">

    <!-- Encabezado -->
    <div class="bg-white rounded-xl shadow border border-slate-200 p-8 mb-8">

        <span class="inline-block bg-emerald-100 text-emerald-700 px-3 py-1 rounded-full text-sm font-semibold mb-4">
            {{ $clase->categoria->nombre }}
        </span>

        <h1 class="text-4xl font-bold text-slate-800">
            {{ $clase->nombre }}
        </h1>

        <p class="text-slate-500 mt-3 text-lg">
            {{ $clase->descripcion }}
        </p>

    </div>

    <!-- Información -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">

        <div class="bg-white rounded-xl shadow border border-slate-200 p-6">

            <h2 class="text-xl font-bold text-slate-800 mb-5">
                Información de la clase
            </h2>

            <div class="space-y-4 text-slate-700">

                <p>
                    👨‍🏫 <strong>Instructor:</strong>
                    {{ $clase->instructor }}
                </p>

                <p>
                    🎯 <strong>Nivel:</strong>
                    {{ $clase->nivel->nombre }}
                </p>

                <p>
                    💵 <strong>Costo:</strong>
                    ${{ number_format($clase->costo,2) }}
                </p>

                <p>
                    ⏱ <strong>Duración:</strong>
                    {{ $clase->duracion }} minutos
                </p>

                <p>
                    📍 <strong>Ubicación:</strong>
                    {{ $clase->ubicacion->ciudad }}
                </p>

            </div>

        </div>

        <div class="bg-slate-800 rounded-xl text-white p-6 flex flex-col justify-center">

            <h2 class="text-2xl font-bold mb-4">

                ¿Listo para aprender?

            </h2>

            <p class="text-slate-300">

                Selecciona uno de los horarios disponibles y reserva tu lugar.

            </p>

        </div>

    </div>

    <!-- Horarios -->
    <h2 class="text-3xl font-bold text-slate-800 mb-6">

        Horarios Disponibles

    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        @forelse($clase->horarios as $horario)

        <div class="bg-white rounded-xl shadow border border-slate-200 p-6">

            <div class="space-y-3 mb-5">

                <p>

                    📅 <strong>Fecha:</strong>

                    {{ \Carbon\Carbon::parse($horario->fecha)->format('d/m/Y') }}

                </p>

                <p>

                    🕒 <strong>Horario:</strong>

                    {{ substr($horario->hora_inicio,0,5) }}

                    -

                    {{ substr($horario->hora_fin,0,5) }}

                </p>

            </div>

            <form action="{{ route('reservas.store') }}" method="POST">

                @csrf

                <input
                    type="hidden"
                    name="horario_id"
                    value="{{ $horario->id }}">

                <button
                    type="submit"
                    class="w-full bg-emerald-600 hover:bg-emerald-700 text-white py-3 rounded-lg font-semibold transition">

                    Reservar Clase

                </button>

            </form>

        </div>

        @empty

        <div class="col-span-2 bg-yellow-100 border border-yellow-300 rounded-xl p-5 text-yellow-800">

            No existen horarios disponibles para esta clase.

        </div>

        @endforelse

    </div>

</div>

</x-app-layout>