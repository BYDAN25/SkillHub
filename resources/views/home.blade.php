<x-app-layout>

    <div class="max-w-7xl mx-auto px-6 py-6">

        <!-- Encabezado -->
        <div class="bg-white rounded-xl shadow-md border p-8 mb-8">

            <h1 class="text-4xl font-bold text-gray-800">
                SkillHub
            </h1>

            <p class="text-gray-600 mt-3 text-lg">
                Plataforma para reservar clases de programación, desarrollo web,
                bases de datos, redes, inteligencia artificial y ciberseguridad.
            </p>

        </div>

        <!-- Título -->
        <div class="mb-8">

            <h2 class="text-3xl font-bold text-gray-800">
                Clases Disponibles
            </h2>

            <p class="text-gray-500">
                Explora todas las clases disponibles y reserva tu lugar.
            </p>

        </div>

        <!-- Tarjetas -->
        <div class="flex flex-wrap justify-center gap-8">

            @foreach($clases as $clase)

            <div class="w-80 bg-white rounded-xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden">

                {{-- Imagen según categoría --}}

                @switch($clase->categoria->nombre)

                    @case('Programación')

                        <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?w=800"
                            class="w-full h-44 object-cover">

                        @break

                    @case('Desarrollo Web')

                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=800"
                            class="w-full h-44 object-cover">

                        @break

                    @case('Bases de Datos')

                        <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=800"
                            class="w-full h-44 object-cover">

                        @break

                    @case('Ciberseguridad')

                        <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?w=800"
                            class="w-full h-44 object-cover">

                        @break

                    @default

                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=800"
                            class="w-full h-44 object-cover">

                @endswitch

                <div class="p-5">

                    <span class="inline-block bg-blue-100 text-blue-700 text-xs px-3 py-1 rounded-full font-semibold">

                        {{ $clase->categoria->nombre }}

                    </span>

                    <h3 class="text-2xl font-bold mt-4">

                        {{ $clase->nombre }}

                    </h3>

                    <p class="text-gray-600 mt-3 h-12">

                        {{ $clase->descripcion }}

                    </p>

                    <div class="mt-5 space-y-2 text-gray-700">

                        <p>👨‍🏫 <strong>Instructor:</strong> {{ $clase->instructor }}</p>

                        <p>🎯 <strong>Nivel:</strong> {{ $clase->nivel->nombre }}</p>

                        <p>⏱ <strong>Duración:</strong> {{ $clase->duracion }} minutos</p>

                        <p>💵 <strong>Costo:</strong> ${{ number_format($clase->costo,2) }}</p>

                    </div>

                    <a href="{{ route('clases.show',$clase->id) }}"
                       class="block mt-6 text-center bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg font-semibold">

                        Ver detalles

                    </a>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</x-app-layout>