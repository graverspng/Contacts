<?php
// ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;

class ContactController extends Controller
{
    public function index() {
        $contacts = Contacts::all(); // Retrieve all contacts from the database
        return view('contacts.index', compact('contacts')); // Pass the contacts to the view
    }

    public function create() {
        return view('contacts.create');
    }

    public function edit($id) {
        $contact = Contacts::findOrFail($id);
        return view('contacts.edit', compact('contact'));
    }

    public function destroy($id) {
        $contact = Contacts::findOrFail($id);
        $contact->delete();

        return redirect(route('contacts.index'))->with('success', 'Contact deleted successfully!');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:35',
            'number' => [
                'required',
                'digits_between:8,10',
                function($attribute, $value, $fail) {
                    if ($value < 0) {
                        $fail('The '.$attribute.' cannot be negative.');
                    }
                },
            ],
        ], [
            'number.digits_between' => 'The number field must be between 8 and 10 digits.',
        ]);
            
        $contact = Contacts::create($validatedData);

        return redirect(route('contacts.index'))->with('success', 'Contact created successfully!');
    }

    public function update(Request $request, $id) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:35',
            'number' => [
                'required',
                'digits_between:8,10',
                function($attribute, $value, $fail) {
                    if ($value < 0) {
                        $fail('The '.$attribute.' cannot be negative.');
                    }
                },
            ],
        ], [
            'number.digits_between' => 'The number field must be between 8 and 10 digits.',
        ]);
    
        $contact = Contacts::findOrFail($id);
        $contact->update($validatedData);
    
        $request->session()->flash('success', 'Contact edited successfully!');
    
        return redirect(route('contacts.index'));

    }
}

