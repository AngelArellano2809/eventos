<x-layouts.app :title="__('Lista Alumnos')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">

            <table border="1">
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Creditos</th>
                </tr>

                @foreach ($alumnos as $alumno)
                    <tr>
                        <td><a href="{{ route('alumnos.show', $alumno) }}">{{ $alumno->nombre }}</a></td>
                        <td>{{ $alumno->correo }}</td>
                        <td>{{ $alumno->creditos }}</td>
                            @foreach ($alumno->eventos as $evento)
                                {{ $evento->nombre }}<br>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </table>


        </div>
    </div>
</x-layouts.app>
