<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Liste des Projets') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if($projets->isEmpty())
                        <p class="text-center">Aucun projet n'a été créé pour le moment.</p>
                    @else
                        <div class="overflow-x-auto">
                            <table class="w-full bg-white dark:bg-gray-800 border-collapse">
                                <thead>
                                    <tr class="bg-gray-100 dark:bg-gray-700">
                                        <th class="border p-3 text-left">Titre</th>
                                        <th class="border p-3 text-left">Description</th>
                                        <th class="border p-3 text-left">Date Limite</th>
                                        <th class="border p-3 text-left">Statut</th>
                                        <th class="border p-3 text-left">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($projets as $projet)
                                        <tr class="border-b dark:border-gray-700">
                                            <td class="p-3">{{ $projet->titre }}</td>
                                            <td class="p-3">{{ $projet->description }}</td>
                                            <td class="p-3">{{ $projet->date_limite }}</td>
                                            <td class="p-3">
                                                <span class="
                                                    {{ $projet->statut == 'terminé' ? 'text-green-600' :
                                                       ($projet->statut == 'annulé' ? 'text-red-600' : 'text-blue-600') }}
                                                ">
                                                    {{ ucfirst($projet->statut) }}
                                                </span>
                                            </td>
                                            <td class="p-3">
                                                <div class="flex space-x-2">
                                                    <a href="{{ route('projets.edit', $projet->id) }}"
                                                       class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
                                                        Éditer
                                                    </a>
                                                    <form action="{{ route('projets.destroy', $projet->id) }}"
                                                          method="POST"
                                                          onsubmit="return confirm('Voulez-vous vraiment supprimer ce projet ?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                                class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                                            Supprimer
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
