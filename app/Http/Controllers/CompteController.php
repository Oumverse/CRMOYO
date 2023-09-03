<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Compte;

class CompteController extends Controller
{
    public function index()
    {
        $comptes = Compte::all();
        return view('comptes.index', compact('comptes'));
    }

    public function create()
    {
        return view('comptes.create');
    }

    public function store(Request $request)
    {
        // Validation goes here
        $compte = new Compte($request->all());
        $compte->save();
        return redirect()->route('comptes.index');
    }

    // Add more methods for editing, deleting, and viewing comptes
    public function show($id)
    {
        // Retrieve the compte (account) by its ID from the database
        $compte = Compte::findOrFail($id);

        // Pass the retrieved compte to the view
        return view('comptes.show', compact('compte'));
    }


    public function edit($id)
    {
        // Retrieve the compte (account) by its ID from the database
        $compte = Compte::findOrFail($id);

        // Pass the retrieved compte to the view for editing
        return view('comptes.edit', compact('compte'));
    }


    public function destroy($id)
    {
        // Find the compte (account) by its ID from the database
        $compte = Compte::findOrFail($id);
    
        // Delete the compte
        $compte->delete();
    
        // Redirect back to the index page with a success message
        return redirect()->route('comptes.index')->with('success', 'Compte deleted successfully.');
    }


    
    public function update(Request $request, $id)
    {
        // Validate the form data here
    
        // Find the compte (account) by its ID from the database
        $compte = Compte::findOrFail($id);
    
        // Update the compte's attributes with the new data from the form
        $compte->fill($request->all());
        
        // Save the updated compte
        $compte->save();
    
        // Redirect back to the index page with a success message
        return redirect()->route('comptes.index')->with('success', 'Compte updated successfully.');
    }
        



}
