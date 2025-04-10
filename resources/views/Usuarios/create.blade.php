<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Usuario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Nuevo Usuario</h3>

                    <form action="{{ route('usuarios.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="nombre" class="block text-gray-700">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="w-full p-2 border border-gray-300 rounded" required>
                        </div>

                        <div class="mb-4">
                            <label for="apellido"class="block text-gray-700">Apellido</label>
                            <input type="text" name="apellido" id="apellido" class="w-full p-2 border border-gray-300 rounded" required>
                        </div>
                        <div class="mb-4">
                            <label for="correo" class="block text-gray-700">Correo</label>
                            <input type="text" name="correo" id="correo" class="w-full p-2 border border-gray-300 rounded" required>
                        </div>

                        

                        <div class="mt-6">
                            <button type="submit" class="bg-blue-500 text-black px-4 py-2 rounded  border border-gray-300 hover:bg-blue-700">
                                Crear Usuario
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>