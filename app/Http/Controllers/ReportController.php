<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class ReportController extends Controller
{
    public function index()
    {
        // Fetch data from the database
        $activities = Activity::all(); // Fetch all activities

        // Pass the data to the view
        return view('manage-report.ActivityReportList', ['activities' => $activities]);
    }
}
