<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 py-12">
                    {{ __("Voir les resultat JSon de l'api film ?") }} <a href="/api/films">Voir</a>
                </div>
                <div class="p-6 text-gray-900 py-12">
                    {{ __("Voir les resultat JSon de l'api user ?") }} <a href="/api/users">Voir</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
