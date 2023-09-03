<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;
use App\Models\Report;

class ReportController extends Controller
{
    /**
     * Display a listing of the reports.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::all(); // Retrieve all reports from the database.
        return view('reports.index', compact('reports'));
    }

    /**
     * Show the form for creating a new report.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reports.create');
    }

    /**
     * Store a newly created report in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data.
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'report_type' => 'required|string', // Add a field for report type.
            // Add more validation rules as needed.
        ]);

        // Create a new report instance and save it to the database.
        $report = new Report([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'report_type' => $request->input('report_type'), // Store report type.
            // Add more fields as needed.
        ]);
        $report->save();

        return redirect()->route('reports.index')
            ->with('success', 'Report created successfully.');
    }

    /**
     * Display the specified report.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $report = Report::find($id); // Retrieve a specific report by ID.
        return view('reports.show', compact('report'));
    }

    // Add more methods like edit, update, destroy as needed.
}
