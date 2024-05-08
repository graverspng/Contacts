<x-app-layout>
<x-slot name="header">
        <a href="/create-contacts" class="px-4 py-2 bg-blue-500 text-white font-semibold text-xl leading-tight rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline transition duration-500">
            {{ __('Create Contacts') }}
        </a>
        <a href="/existing-contacts" class="ml-4 px-4 py-2 bg-green-300 text-white font-semibold text-xl leading-tight rounded hover:bg-green-700 focus:outline-none focus:shadow-outline transition duration-500">
            {{ __('Existing Contacts') }}
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
