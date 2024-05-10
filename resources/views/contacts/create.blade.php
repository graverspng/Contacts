<h1>create contact</h1>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="">
                <form action="{{ route('contacts.store') }}" method="POST">
                    
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                            <input type="text" placeholder="Enter name" id="name" name="name" class="form-input rounded-md shadow-sm">
                        </div>
                        <div class="mb-4">
                            <label for="number" class="block text-gray-700 text-sm font-bold mb-2">Phone Number: (+371)</label>
                            <input type="number" placeholder="Enter number" id="number" name="number" class="form-input rounded-md shadow-sm">
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Create Contact
                        </button>
                        <a href="{{ route('contacts.index') }}">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color:red;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif