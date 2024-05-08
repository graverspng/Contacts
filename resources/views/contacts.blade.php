<head>
<a href="/existing-contacts">Existing Contacts</a>
<a href="/create-contacts" style="margin-left:15px">Create Contact</a>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Contact') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('contacts.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                            <input type="text" id="name" name="name" class="form-input rounded-md shadow-sm">
                        </div>
                        <div class="mb-4">
                            <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone Number:</label>
                            <input type="text" id="phone" name="phone" class="form-input rounded-md shadow-sm">
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Create Contact
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
