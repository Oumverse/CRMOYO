@extends('adminlte::page')

@section('content')
    <h1>Compte Created</h1>

    <p>Thank you! The compte has been created successfully.</p>

    <a href="{{ route('comptes.index') }}">Back to compte List</a>
@endsection
