@extends('adminlte::page')

@section('content')
<div class="container">
    <h2>Reports</h2>
    <a href="{{ route('reports.create') }}" class="btn btn-primary">Create Report</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $report)
                <tr>
                    <td>{{ $report->title }}</td>
                    <td>{{ $report->description }}</td>
                    <td>{{ $report->report_type }}</td>
                    <td>
                        <a href="{{ route('reports.show', $report->id) }}" class="btn btn-info">View</a>
                        <!-- Add edit and delete buttons as needed -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
