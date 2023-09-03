@extends('adminlte::page')

@section('content')
    <h1>Comptes Details</h1>

    <p><strong>Company Name:</strong> {{ $compte->company_name }}</p>
    <p><strong>Industry:</strong> {{ $compte->industry }}</p>
    <!-- Include more details here -->

    <a href="{{ route('comptes.edit', $compte->id) }}">Edit Compte</a>
    <a href="{{ route('comptes.index') }}">Back to List</a>
@endsection
