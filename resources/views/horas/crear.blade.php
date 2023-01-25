<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear horario') }}
        </h2>
    </x-slot>
    <style>

    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Añadir horas a las asignaturas
                    <br>
                    @foreach ($asignaturas as $asignatura)
                        <b>{{$asignatura->nombreAs}}: </b>
                        <form action="crear" method="POST">
                            @csrf
                            <input type="hidden" name="codAs" value="{{$asignatura->codAS}}">
                            <select name="diaH" id="">
                                <option value="0">Lunes</option>
                                <option value="1">Martes</option>
                                <option value="2">Miercoles</option>
                                <option value="3">Jueves</option>
                                <option value="4">Viernes</option>
                            </select>
                            <select name="horaH" id="">
                                <option value="0">8:15-9:15</option>
                                <option value="1">9:15-10:15</option>
                                <option value="2">10:15-11:15</option>
                                <option value="3">11:45-12:45</option>
                                <option value="4">12:45-13:45</option>
                                <option value="5">13:45-14:45</option>
                            </select>
                            <input type="submit" value="Añadir horas">
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>