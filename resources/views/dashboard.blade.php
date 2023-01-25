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
                            <td>Vacío</td>
                            <td>Vacío</td>
                            <td>Vacío</td>
                            <td>Vacío</td>
                            <td>Vacío</td>
                        </tr>
                        <tr>
                            <td>9:15-10:15</td>
                            <td>Vacío</td>
                            <td>Vacío</td>
                            <td>Vacío</td>
                            <td>Vacío</td>
                            <td>Vacío</td>
                        </tr>
                        <tr>
                            <td>10:15-11:15</td>
                            <td>Vacío</td>
                            <td>Vacío</td>
                            <td>Vacío</td>
                            <td>Vacío</td>
                            <td>Vacío</td>
                        </tr>
                        <tr>
                            <td>11:15-11:45</td>
                            <td colspan="5" id="recreotd">RECREO</td>
                        </tr>
                        <tr>
                            <td>11:45-12:45</td>
                            <td>Vacío</td>
                            <td>Vacío</td>
                            <td>Vacío</td>
                            <td>Vacío</td>
                            <td>Vacío</td>
                        </tr>
                        <tr>
                            <td>12:45-13:45</td>
                            <td>Vacío</td>
                            <td>Vacío</td>
                            <td>Vacío</td>
                            <td>Vacío</td>
                            <td>Vacío</td>
                        </tr>
                        <tr>
                            <td>13:45-14:45</td>
                            <td>Vacío</td>
                            <td>Vacío</td>
                            <td>Vacío</td>
                            <td>Vacío</td>
                            <td>Vacío</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
