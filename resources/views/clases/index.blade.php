<x-app-layout>

<div class="max-w-7xl mx-auto px-6 py-8">

    <div class="mb-8">

        <h1 class="text-4xl font-bold text-slate-800">
            Clases Disponibles
        </h1>

        <p class="text-slate-500 mt-2">
            Explora nuestras clases y encuentra la que mejor se adapte a ti.
        </p>

    </div>

    <!-- Filtro por ubicación -->

    <div class="bg-white border border-slate-200 rounded-xl shadow p-5 mb-8">

        <form action="{{ route('clases.index') }}" method="GET">

            <div class="flex flex-col md:flex-row items-center gap-4">

                <div class="w-full md:w-80">

                    <label class="block text-sm font-semibold text-slate-700 mb-2">

                        Filtrar por ubicación

                    </label>

                    <select
                        name="ubicacion"
                        class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-emerald-500">

                        <option value="">

                            Todas las ubicaciones

                        </option>

                        @foreach($ubicaciones as $ubicacion)

                            <option
                                value="{{ $ubicacion->id }}"
                                {{ request('ubicacion') == $ubicacion->id ? 'selected' : '' }}>

                                {{ $ubicacion->ciudad }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <div class="flex gap-3 mt-6 md:mt-7">

                    <button
                        type="submit"
                        class="bg-emerald-600 hover:bg-emerald-700 text-white px-6 py-2 rounded-lg font-semibold transition">

                        Filtrar

                    </button>

                    <a
                        href="{{ route('clases.index') }}"
                        class="bg-slate-200 hover:bg-slate-300 text-slate-700 px-6 py-2 rounded-lg font-semibold transition">

                        Limpiar

                    </a>

                </div>

            </div>

        </form>

    </div>

    <!-- Tarjetas -->

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        @forelse($clases as $clase)

        <div class="bg-white border border-slate-200 rounded-xl shadow hover:shadow-xl transition duration-300 overflow-hidden">

            <!-- Encabezado -->

            <div class="bg-slate-800 p-5">

                <h2 class="text-2xl font-bold text-white">

                    {{ $clase->nombre }}

                </h2>

                <span class="inline-block mt-3 bg-emerald-100 text-emerald-700 px-3 py-1 rounded-full text-sm font-semibold">

                    {{ $clase->categoria->nombre }}

                </span>

            </div>

            <!-- Contenido -->

            <div class="p-5">

                <p class="text-slate-600 mb-5 h-12">

                    {{ $clase->descripcion }}

                </p>

                <div class="space-y-2 text-slate-700">

                    <p>
                        👨‍🏫 <strong>Instructor:</strong>
                        {{ $clase->instructor }}
                    </p>

                    <p>
                        🎯 <strong>Nivel:</strong>
                        {{ $clase->nivel->nombre }}
                    </p>

                    <p>
                        📍 <strong>Ubicación:</strong>
                        {{ $clase->ubicacion->ciudad }}
                    </p>

                    <p>
                        ⏱ <strong>Duración:</strong>
                        {{ $clase->duracion }} minutos
                    </p>

                    <p>
                        💵 <strong>Costo:</strong>
                        ${{ number_format($clase->costo, 2) }}
                    </p>

                </div>

                <a
                    href="{{ route('clases.show', $clase->id) }}"
                    class="mt-6 block w-full bg-emerald-600 hover:bg-emerald-700 text-white text-center py-3 rounded-lg font-semibold transition duration-300">

                    Ver detalles

                </a>

            </div>

        </div>

        @empty

        <div class="col-span-3 bg-yellow-100 border border-yellow-300 rounded-xl p-6 text-center text-yellow-800">

            No se encontraron clases para la ubicación seleccionada.

        </div>

        @endforelse

    </div>

</div>

</x-app-layout>