<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>
    <style>
        .p-6 {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            border: 1px solid #dddddd;
        }
        table th, table td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            text-align: center;
        }
        #recreotd {
            background-color: #dddddd;
            
        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>Bienvenido</h1>
                    <table>
                        <tr>
                            <th>HORAS</th>
                            <th>Lunes</th>
                            <th>Martes</th>
                            <th>Miercoles</th>
                            <th>Jueves</th>
                            <th>Viernes</th>
                        </tr>
                        <tr>
                            <td>8:15-9:15</td>
                            @if ($lunes0 != null)
                                <td>{{ $lunes0->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                            @if ($martes0 != null)
                                <td>{{ $martes0->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                            @if ($miercoles0 != null)
                                <td>{{ $miercoles0->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                            @if ($jueves0 != null)
                                <td>{{ $jueves0->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                            @if ($viernes0 != null)
                                <td>{{ $viernes0->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                        </tr>
                        <tr>
                            <td>9:15-10:15</td>
                            @if ($lunes1 != null)
                                <td>{{ $lunes1->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                            @if ($martes1 != null)
                                <td>{{ $martes1->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                            @if ($miercoles1 != null)
                                <td>{{ $miercoles1->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                            @if ($jueves1 != null)
                                <td>{{ $jueves1->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                            @if ($viernes1 != null)
                                <td>{{ $viernes1->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                        </tr>
                        <tr>
                            <td>10:15-11:15</td>
                            @if ($lunes2 != null)
                                <td>{{ $lunes2->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                            @if ($martes2 != null)
                                <td>{{ $martes2->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                            @if ($miercoles2 != null)
                                <td>{{ $miercoles2->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                            @if ($jueves2 != null)
                                <td>{{ $jueves2->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                            @if ($viernes2 != null)
                                <td>{{ $viernes2->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                        </tr>
                        <tr>
                            <td>11:15-11:45</td>
                            <td colspan="5" id="recreotd">RECREO</td>
                        </tr>
                        <tr>
                            <td>11:45-12:45</td>
                            @if ($lunes3 != null)
                                <td>{{ $lunes3->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                            @if ($martes3 != null)
                                <td>{{ $martes3->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                            @if ($miercoles3 != null)
                                <td>{{ $miercoles3->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                            @if ($jueves3 != null)
                                <td>{{ $jueves3->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                            @if ($viernes3 != null)
                                <td>{{ $viernes3->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                        </tr>
                        <tr>
                            <td>12:45-13:45</td>
                            @if ($lunes4 != null)
                                <td>{{ $lunes4->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                            @if ($martes4 != null)
                                <td>{{ $martes4->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                            @if ($miercoles4 != null)
                                <td>{{ $miercoles4->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                            @if ($jueves4 != null)
                                <td>{{ $jueves4->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                            @if ($viernes4 != null)
                                <td>{{ $viernes4->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                        </tr>
                        <tr>
                            <td>13:45-14:45</td>
                            @if ($lunes5 != null)
                                <td>{{ $lunes5->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                            @if ($martes5 != null)
                                <td>{{ $martes5->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                            @if ($miercoles5 != null)
                                <td>{{ $miercoles5->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                            @if ($jueves5 != null)
                                <td>{{ $jueves5->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                            @if ($viernes5 != null)
                                <td>{{ $viernes5->nombreCortoAs }}</td>
                            @else
                                <td></td>
                            @endif
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
