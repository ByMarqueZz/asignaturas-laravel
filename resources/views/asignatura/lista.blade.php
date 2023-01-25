<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Asignaturas') }}
        </h2>
    </x-slot>
    <style>
        #tableAsignaturas{
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #000;
            margin: 0 auto;
        }

        #tableAsignaturas td, #tableAsignaturas th{
            border: 1px solid #000;
            text-align: center;
        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table id="tableAsignaturas">
                            <tr>
                                <th>Nombre</th>
                                <th>Nombre corto</th>
                                <th>Profesor</th>
                                <th>Color</th>
                                <th>Acciones</th>
                            </tr>
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
                    </table>
                    <br><br>
                <a href="/asignatura/crear">Nueva asignatura</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>