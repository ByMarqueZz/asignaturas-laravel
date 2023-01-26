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
                    Lista horas
                    <br><br>
                    @foreach ($asignaturas as $asignatura)
                    <b>{{$asignatura->nombreAs}}</b>
                        @foreach ($horas as $hora)
                            @if ($hora->codAs == $asignatura->codAS)
                                <br>
                                Dia:
                                @switch ($hora->diaH)
                                    @case(0)
                                        Lunes
                                        @break
                                    @case(1)
                                        Martes
                                        @break
                                    @case(2)
                                        Miercoles
                                        @break
                                    @case(3)
                                        Jueves
                                        @break
                                    @case(4)
                                        Viernes
                                        @break
                                @endswitch
                                <br>
                                Hora:
                                @switch ($hora->horaH)
                                    @case(0)
                                        8:15-9:15
                                        @break
                                    @case(1)
                                        9:15-10:15
                                        @break
                                    @case(2)
                                        10:15-11:15
                                        @break
                                    @case(3)
                                        11:45-12:45
                                        @break
                                    @case(4)
                                        12:45-13:45
                                        @break
                                    @case(5)
                                        13:45-14:45
                                        @break
                                @endswitch
                                <a href="/horas/delete/{{$hora->codAs}}/{{$hora->diaH}}/{{$hora->horaH}}">Borrar</a>
                            @endif
                        @endforeach
                        <br><br>
                    @endforeach
                    <br>
                    <a href="/horas/crear">Asignar nueva hora</a>                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>