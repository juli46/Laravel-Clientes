<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Perfil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Nuevo Perfil</h3>

                    @if ($errors->any())
                        <div class="mb-4">
                            <ul class="text-red-500">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('perfiles.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="usuario_id" class="block text-sm font-medium text-gray-700">Seleccionar Usuario</label>
                            <select name="usuario_id" id="usuario_id" class="w-full border border-gray-300 rounded p-2">
                                <option value="">-- Seleccionar Usuario --</option>
                                @foreach ($usuarios as $usuario)
                                    <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                            <select name="descripcion" id="descripcion" class="w-full border border-gray-300 rounded p-2">
                                <option value="Administrador">Administrador</option>
                                <option value="Cliente">Cliente</option>
                                <option value="Proveedor">Proveedor</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="bg-blue-500 text-black px-4 py-2 rounded border border-gray-300 hover:bg-blue-700">
                                Crear Perfil
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
