@extends('adminlte::page')

@section('content')
<div class="container">
    <h2>Report Details</h2>
    <table class="table">
        <tbody>
            <tr>
                <th>Title</th>
                <td>{{ $report->title }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ $report->description }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ $report->report_type }}</td>
            </tr>
            <!-- Add more fields as needed -->
        </tbody>
    </table>
</div>
@endsection
