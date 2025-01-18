<x-app-layout>
    <x-slot name="header">
        <div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 p-6 rounded-lg shadow-md">
            <h2 class="font-semibold text-2xl text-white leading-tight">
                Bienvenido: {{ Auth::user()->name }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12 bg-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4">New Dashboard</h3>
                <p class="text-gray-600">
                    Este es tu nuevo panel de control. Aquí podrás gestionar todas tus configuraciones y ver el progreso general.
                </p>
                <div class="mt-6">
                    <a href="{{ route('profile.show') }}" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition duration-300">
                        Ir a Configuración
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
