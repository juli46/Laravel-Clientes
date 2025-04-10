<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            Editar Perfil
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <h3 class="text-lg font-bold mb-4 text-gray-800">Actualizar Perfil</h3>

                {{-- Depuración: Muestra datos del perfil si es necesario --}}
                {{-- {{ dd($perfil) }} --}}

                @if ($errors->any())
                    <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                        <strong>Errores encontrados:</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>- {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('perfiles.update', $perfil->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="descripcion" class="block text-gray-700 font-medium">Descripción</label>
                        <select name="descripcion" id="descripcion" class="w-full border rounded p-2 mt-1">
                            <option value="Administrador" {{ old('descripcion', $perfil->descripcion) == 'Administrador' ? 'selected' : '' }}>Administrador</option>
                            <option value="Cliente" {{ old('descripcion', $perfil->descripcion) == 'Cliente' ? 'selected' : '' }}>Cliente</option>
                            <option value="Proveedor" {{ old('descripcion', $perfil->descripcion) == 'Proveedor' ? 'selected' : '' }}>Proveedor</option>
                        </select>
                    </div>

                    <div class="mt-6">
                        <button type="submit" class="bg-blue-500 text-black px-4 py-2 rounded border border-gray-300 hover:bg-blue-700">
                            Guardar cambios
                        </button>
                        <a href="{{ route('perfiles.index') }}" class="bg-blue-500 text-black px-4 py-2 rounded border border-gray-300 hover:bg-blue-700">
                            Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
