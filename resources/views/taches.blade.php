<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Créer une Tâche') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form  method="POST">
                        @csrf

                        <!-- Titre -->
                        <div class="mb-4">
                            <label for="titre" class="block text-gray-700 dark:text-gray-300 text-sm font-medium mb-2">
                                {{ __('Titre') }}
                            </label>
                            <input type="text" name="titre" id="titre" class="w-full p-2 rounded border dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" required>
                        </div>

                        <!-- Description -->
                        <div class="mb-4">
                            <label for="description" class="block text-gray-700 dark:text-gray-300 text-sm font-medium mb-2">
                                {{ __('Description') }}
                            </label>
                            <textarea name="description" id="description" rows="4" class="resize-none  w-full p-2 rounded border dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" required></textarea>
                        </div>

                        <!-- Statut -->
                        <div class="mb-4">
                            <label for="statut" class="block text-gray-700 dark:text-gray-300 text-sm font-medium mb-2">
                                {{ __('Statut') }}
                            </label>
                            <select name="statut" id="statut" class="w-full p-2 rounded border dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" required>
                                <option value="En attente">{{ __('En attente') }}</option>
                                <option value="En cours">{{ __('En cours') }}</option>
                                <option value="Terminé">{{ __('Terminé') }}</option>
                            </select>
                        </div>

                        <!-- Priorité -->
                        <div class="mb-4">
                            <label for="priorite" class="block text-gray-700 dark:text-gray-300 text-sm font-medium mb-2">
                                {{ __('Priorité') }}
                            </label>
                            <select name="priorite" id="priorite" class="w-full p-2 rounded border dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" required>
                                <option value="Basse">{{ __('Basse') }}</option>
                                <option value="Moyenne">{{ __('Moyenne') }}</option>
                                <option value="Haute">{{ __('Haute') }}</option>
                            </select>
                        </div>

                        <!-- Projet -->
                        <div class="mb-4">
                            <label for="projet_id" class="block text-gray-700 dark:text-gray-300 text-sm font-medium mb-2">
                                {{ __('Projet') }}
                            </label>
                            <select name="assigne_a" id="assigne_a" class="w-full p-2 rounded border dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" required>
                                <option value="Utilisateur 1">{{ __('Projet 1') }}</option>
                                <option value="Utilisateur 2">{{ __('Projet 2') }}</option>
                                <option value="Utilisateur 3">{{ __('Projet 3') }}</option>
                            </select>
                        </div>

                        <!-- Assigné à -->
                        <div class="mb-4">
                            <label for="assigne_a" class="block text-gray-700 dark:text-gray-300 text-sm font-medium mb-2">
                                {{ __('Assigné à') }}
                            </label>
                            <select name="assigne_a" id="assigne_a" class="w-full p-2 rounded border dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" required>
                                <option value="Utilisateur 1">{{ __('Utilisateur 1') }}</option>
                                <option value="Utilisateur 2">{{ __('Utilisateur 2') }}</option>
                                <option value="Utilisateur 3">{{ __('Utilisateur 3') }}</option>
                            </select>
                        </div>

                        <!-- Submit -->
                        <div class="mt-6">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                                {{ __('Créer la Tâche') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
