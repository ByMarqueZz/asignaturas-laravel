<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Asignaturas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                @foreach ($asignatura as $asignaturas)
                    <tr>
                        <td>{{ $asignaturas->nombreAs }}</td>
                        <td>{{ $asignaturas->nombreCortoAs }}</td>
                        <td>{{ $asignaturas->profesorAs }}</td>
                        <td>{{ $asignaturas->colorAs }}</td>
                        <td>
                            <a href="/asignatura/ver/{{$asignaturas->codAs}}">Ver</a>
                            <a href="/asignatura/editar/{{$asignaturas->codAs}}">Editar</a>
                            <a href="/asignatura/eliminar/{{$asignaturas->codAs}}">Eliminar</a>
                        </td>
                    </tr>
                @endforeach

                <a href="/asignatura/crear">Nueva asignatura</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>