<style>
    @import url('https://fonts.bunny.net/css?family=figtree:400,600&display=swap');

/* General body styling */
body {
    font-family: 'figtree', sans-serif;
    background: #f4f4f4; /* Light grey background */
    margin: 0;
    padding: 20px;
}

/* Styling for the logout form and link */
.logout-form {
    margin-top: 1rem; /* Equivalent to 'mt-3' */
    display: flex;
    flex-direction: column;
    gap: 0.25rem; /* Equivalent to 'space-y-1' */
}

.logout-link {
    background-color: #3498db;
    color: white;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    border-radius: 5px;
    cursor: pointer;
}

.logout-link:hover {
    background-color: #2980b9;
}

/* Styling for the 'Create Contact' link */
.create-contact-link {
    display: inline-block;
    margin-left: 15px;
    color: #3498db;
    text-decoration: none;
}

.create-contact-link:hover {
    color: #2980b9;
}

/* Styling for the contact list */
.contact-list p {
    margin: 0;
    color: #333;
}

.contact-list form {
    margin-top: 10px;
}

.contact-list button {
    background-color: #e74c3c;
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
}

.contact-list button:hover {
    background-color: #c0392b;
}

.contact-list a {
    margin-left: 10px;
    color: #3498db;
    text-decoration: none;
}

.contact-list a:hover {
    color: #2980b9;
    transition:0.5s;
}


.alert-success {
    background-color: #2ecc71;
    width: 150px;
    color: white;
    padding: 10px;
    border-radius: 5px;
    margin-top: 20px;
}
</style>
                <head>    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
                </head>
               

<a href="/create-contacts" style="margin-left:15px">Create Contact</a>


@foreach ($contacts as $contact)
    <p>Name: {{ $contact->name }}</p>
    <p>Number: +371 {{ $contact->number }}</p>
    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
        <a href="{{ route('contacts.edit', $contact->id) }}">Edit</a>
    </form>
@endforeach

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

                

