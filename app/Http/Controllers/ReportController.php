<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Year;
use App\Models\ClassModel;

class ReportController extends Controller
{
    public function index()
    {
        // Fetch all available academic sessions and years
        $years = Year::all();

        return view('manage-report.StudentAcademicReport', compact('years'));
    }

    public function getClass(Request $request)
    {
        $year_id = $request->input('year_id');
        $classes = ClassModel::where('year_id', $year_id)->get();

        return response()->json($classes);
    }

    public function getStudents(Request $request)
    {
        $class_id = $request->input('class_id');
        $students = Student::where('classes_id', $class_id)->get();

        return response()->json($students);
    }

    public function generateReport(Request $request)
    {
        // Validate the request
        $request->validate([
            'academic_session' => 'required',
            'year_id' => 'required',
            'class_id' => 'required',
            'student_id' => 'required',
        ]);

        // Fetch the student
        $student = Student::with(['school', 'class', 'year', 'exam', 'subjectResults.subject'])
                          ->findOrFail($request->student_id);

        // Fetch all available academic sessions and years for the form
        $years = Year::all();

        return view('manage-report.StudentAcademicReport', compact('student', 'years'));
    }
}
