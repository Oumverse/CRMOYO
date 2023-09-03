@extends('adminlte::page')

@section('content')
    <h1>Compte List</h1>

    <table>
        <thead>
            <tr>
                <th>Company Name</th>
                <th>Industry</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comptes as $compte)
                <tr>
                    <td>{{ $compte->company_name }}</td>
                    <td>{{ $compte->industry }}</td>
                    <td>
                        <a href="{{ route('comptes.show', $compte->id) }}">View</a>
                        <a href="{{ route('comptes.edit', $compte->id) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('comptes.create') }}">Create New Compte</a>
@endsection
