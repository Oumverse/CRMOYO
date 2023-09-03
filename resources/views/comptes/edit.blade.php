@extends('adminlte::page')

@section('content')
    <h1>Edit Compte</h1>

    <form method="POST" action="{{ route('comptes.update', $compte->id) }}">
        @csrf
        @method('PUT')
        <label for="company_name">Company Name:</label>
        <input type="text" id="company_name" name="company_name" value="{{ $compte->company_name }}" required>

        <!-- Add more form fields for other compte attributes -->

        <button type="submit">Update Compte</button>
    </form>
@endsection
