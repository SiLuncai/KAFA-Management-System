<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\ClassModel;
use App\Models\Year;
use App\Models\SubjectResult;
use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\FinalActivityReport;


class ReportController extends Controller
{
    // Function to show the form and display the report on the same page
    public function showStudentAcademicReport(Request $request)
    {
        $years = Year::all();
        $classes = ClassModel::all();
        $students = Student::all();
        
        $subjectResults = collect();
        $student = null;
        $resultsFound = false;

        if ($request->isMethod('post')) {
            // Validate the request parameters
            $request->validate([
                'year_id' => 'required|exists:years,id',
                'class_id' => 'required|exists:classes,id',
                'student_id' => 'required|exists:students,id',
            ]);

            // Fetch the student details
            $student = Student::with(['class', 'school', 'year', 'exam', 'subjectResults.subject'])
                              ->findOrFail($request->student_id);

            // Fetch the subject results for the selected student
            $subjectResults = SubjectResult::where('student_id', $request->student_id)->get();

            // Check if there are any results found
            $resultsFound = $subjectResults->isNotEmpty();
        }

        return view('manage-report.StudentAcademicReport', compact('years', 'classes', 'students', 'student', 'subjectResults', 'resultsFound'));
    }

    public function getClassesByYear($yearId)
    {
        $classes = Student::where('year_id', $yearId)->distinct()->pluck('classes_id');
        $classDetails = ClassModel::whereIn('id', $classes)->get();
        return response()->json($classDetails);
    }
    
    public function getStudentsByClass($classId)
    {
        $students = Student::where('classes_id', $classId)->get();
        return response()->json($students);
    }

    public function showClassAcademicReport(Request $request)
    {
        $years = Year::all();
        $classes = [];
        $students = [];
        $resultsFound = false;
    
        if ($request->filled('year_id') && $request->filled('class_id')) {
            // Fetch distinct classes for the selected year
            $classes = Student::where('year_id', $request->year_id)->distinct()->pluck('classes_id');
            $classDetails = ClassModel::whereIn('id', $classes)->get();
    
            // Fetch students for the selected class
            $students = Student::where('classes_id', $request->class_id)->with('subjectResults')->get();
    
            // Compute average marks for each student
            foreach ($students as $student) {
                $totalMarks = $student->subjectResults->sum('marks');
                $subjectCount = $student->subjectResults->count();
                $student->average_marks = $subjectCount ? $totalMarks / $subjectCount : 0;
            }
    
            // Sort students by average marks and assign rankings
            $students = $students->sortByDesc('average_marks')->values();
            foreach ($students as $index => $student) {
                $student->ranking = $index + 1;
            }
    
            $resultsFound = $students->isNotEmpty();
        }
    
        return view('manage-report.ClassAcademicReport', compact('years', 'classDetails', 'students', 'resultsFound'));
    }

    public function getYearAcademicReport()
    {
        $years = Year::all();
        return view('manage-report.YearAcademicReport', compact('years'));
    }
    
    public function showYearAcademicReport(Request $request)
    {
        $years = Year::all();
        $students = [];
        $resultsFound = false;
    
        if ($request->filled('year_id')) {
            // Fetch students for the selected year
            $students = Student::where('year_id', $request->year_id)->with('subjectResults')->get();
    
            // Compute average marks for each student
            foreach ($students as $student) {
                $totalMarks = $student->subjectResults->sum('marks');
                $subjectCount = $student->subjectResults->count();
                $student->average_marks = $subjectCount ? $totalMarks / $subjectCount : 0;
            }
    
            // Sort students by average marks and assign rankings
            $students = $students->sortByDesc('average_marks')->values();
            foreach ($students as $index => $student) {
                $student->ranking = $index + 1;
            }
    
            $resultsFound = $students->isNotEmpty();
        }
    
        return view('manage-report.YearAcademicReport', compact('years', 'students', 'resultsFound'));
    }

    public function getActivityReports()
    {
        $activities = Activity::all();
        return view('manage-report.ActivityReportList', compact('activities'));
    }

    public function getActivityReportForm($id)
    {
        $activity = Activity::findOrFail($id);
        return view('manage-report.ActivityReportForm', compact('activity'));
    }

    public function saveActivityReport(Request $request, $id)
    {
        $request->validate([
            'impact' => 'required|string',
            'budget' => 'required|numeric',
            'date_submitted' => 'required|date',
        ]);

        FinalActivityReport::updateOrCreate(
            ['activity_id' => $id],
            [
                'impact' => $request->impact,
                'budget' => $request->budget,
                'date_submitted' => $request->date_submitted,
            ]
        );

        return redirect()->route('activity-reports')->with('success', 'Report saved successfully.');
    }

}
