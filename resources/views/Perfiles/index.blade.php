<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Perfiles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Lista de Perfiles</h3>

                    <!-- Botón para registrar un nuevo perfil -->
                    <a href="{{ route('perfiles.create') }}" class="mb-4 inline-block bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                        Registrar Nuevo Perfil
                    </a>

                    @if ($perfiles->isEmpty())
                        <p class="mt-4">No hay perfiles registrados.</p>
                    @else
                        <table class="mt-4 w-full border-collapse border border-gray-300">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border border-gray-300 px-4 py-2">ID</th>
                                    <th class="border border-gray-300 px-4 py-2">Usuario</th>
                                    <th class="border border-gray-300 px-4 py-2">Descripción</th>
                                    <th class="border border-gray-300 px-4 py-2">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($perfiles as $perfil)
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">{{ $perfil->id }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $perfil->usuario->nombre }} {{ $perfil->usuario->apellido }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $perfil->descripcion }}</td>
                                        <td class="border border-gray-300 px-4 py-2 text-center">
                                            <a href="{{ route('perfiles.edit', $perfil->id) }}" 
                                            class="bg-blue-500 text-black px-4 py-2 rounded border border-gray-300 hover:bg-blue-700">
                                                Editar
                                            </a>
                                            <form action="{{ route('perfiles.destroy', $perfil->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-blue-500 text-black px-4 py-2 rounded border border-gray-300 hover:bg-blue-700">Eliminar</button>
                                        </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
