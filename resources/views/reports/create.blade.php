@extends('adminlte::page')

@section('content')
<div class="container">
    <h2>Create Report</h2>
    <form method="POST" action="{{ route('reports.store') }}">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="report_type">Report Type</label>
            <input type="text" class="form-control" id="report_type" name="report_type" required>
        </div>
        <!-- Add more fields as needed -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
