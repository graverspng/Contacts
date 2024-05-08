<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Import the Contact model

class ContactController extends Controller
{
    public function create()
    {
        return view('contacts');
    }

    public function store(Request $request)
    {
        // Validate form data
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20', // Adjust validation rules as needed
        ]);

        // Save the contact to the database (assuming you have a 'contacts' table)
        Contact::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
        ]);

        // Redirect back or show a success message
        return redirect()->route('contacts.create')->with('success', 'Contact created successfully!');
    }
}
