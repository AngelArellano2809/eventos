<x-layouts.app :title="__('Lista Admins')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">

            <table border="1">
                <tr>
                    <th>Nombre</th>
                    <th>correo</th>
                    <th>eventos</th>
                </tr>

                @foreach ($administradores as $administrador)
                    <tr>
                        <td><a href="{{ route('evento.show', $evento) }}">{{ $administrador->nombre }}</a></td>
                        <td>{{ $administrador->correo }}</td>
                        <td>
                            @foreach ($administrador->eventos as $evento)
                                {{ $evento->nombre }}<br>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </table>


        </div>
    </div>
</x-layouts.app>
 