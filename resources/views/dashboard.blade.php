<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-black leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <div class="space-x-4">
                <a href="{{ route('usuarios.index') }}" class="px-4 py-2 bg-blue-500 text-black rounded-lg shadow hover:bg-blue-600 hover:text-white transition">
                    Usuarios
                </a>
                <a href="{{ route('usuarios.create') }}" class="px-4 py-2 bg-green-500 text-black rounded-lg shadow hover:bg-green-600 hover:text-white transition">
                    Crear Usuario
                </a>
                <a href="{{ route('perfiles.index') }}" class="px-4 py-2 bg-purple-500 text-black rounded-lg shadow hover:bg-purple-600 hover:text-white transition">
                    Perfiles
                </a>
                <a href="{{ route('perfiles.create') }}" class="px-4 py-2 bg-yellow-500 text-black rounded-lg shadow hover:bg-yellow-600 hover:text-white transition">
                    Crear Perfil
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <p class="text-gray-700">Bienvenido al panel de administración.</p>
                {{-- Sección para contenido dinámico --}}
                {{-- @yield('contenido') --}}
            </div>
        </div>
    </div>
</x-app-layout>
