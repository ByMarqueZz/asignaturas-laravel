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
                <form action="/alumnos/editar/{{ $alumno->id}}" method ="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    <label>Código asignatura:</label>
                    <input type="text" name="codAs" placeholder="Código asignatura" value="{{ $asignatura->codAs}}">
                    <label>Nombre asignatura:</label>
                    <input type="text" name="nombreAs" placeholder="Nombre asignatura:" value="{{ $asignatura->nombreAs}}">
                    <label>Nombre corto asignatura:</label>
                    <input type="text" name="nombreCortoAs" placeholder="Nombre corto asignatura" value="{{ $asignatura->nombreCortoAs}}">
                    <label>Profesor asignatura:</label>
                    <input type="text" name="profesorAs" placeholder="Profesor asignatura:" value="{{ $asignatura->profesorAs}}">
                    <label>Color asignatura:</label>
                    <input type="text" name="colorAs" placeholder="Color asignatura" value="{{ $asignatura->colorAs}}">
                    <input type="submit" value="Guardar">
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>