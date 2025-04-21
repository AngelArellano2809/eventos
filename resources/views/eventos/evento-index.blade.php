<x-layouts.app :title="__('Lista eventos')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">

            <table border="1">
                <tr>
                    <th>Nombre</th>
                    <th>Administrador</th>
                    <th>Codigo</th>
                    <th>Creditos</th>
                    <th>Dia</th>
                </tr>

                @foreach ($eventos as $evento)
                    <tr>
                        <td><a href="{{ route('eventos.show', $evento) }}">{{ $evento->nombre }}</a></td>
                        <td>{{ $evento->administrador->nombre }}</td>
                        <td>{{ $evento->codigo }}</td>
                        <td>{{ $evento->creditos }}</td>
                        <td>{{ $evento->dia }}</td>
                        <td>
                            @foreach ($evento->alumnos as $alumno)
                                {{ $alumno->nombre }}<br>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </table>


        </div>
    </div>
</x-layouts.app>
