@extends('adminlte::page')

@section('content')
    <h1>Create New Compte</h1>

    <form method="POST" action="{{ route('comptes.store') }}">
        @csrf
        <label for="company_name">Company Name:</label>
        <input type="text" id="company_name" name="company_name" required>
        <input type="text" id="compte_type" name="compte_type" required>
        
        <!-- Add more form fields for other compte attributes -->

        <button type="submit">Create Compte</button>
    </form>
@endsection
