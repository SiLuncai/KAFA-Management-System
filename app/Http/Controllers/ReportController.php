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
    public function showStudentAcademicReport(Request $request)
    {
        $years = Year::all();
        $classes = ClassModel::all();
        $students = Student::all();
        
        $subjectResults = collect();
        $student = null;
        $resultsFound = false;

        if ($request->isMethod('post')) {
            $request->validate([
                'year_id' => 'required|exists:years,id',
                'class_id' => 'required|exists:classes,id',
                'student_id' => 'required|exists:students,id',
            ]);

            $student = Student::with(['class', 'school', 'year', 'subjectResults.subject'])
                              ->findOrFail($request->student_id);

            $subjectResults = SubjectResult::where('student_id', $request->student_id)->get();

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
        $classDetails = collect();
        $students = collect();
        $resultsFound = false;
    
        if ($request->filled('year_id') && $request->filled('class_id')) {
            $classes = Student::where('year_id', $request->year_id)->distinct()->pluck('classes_id');
            $classDetails = ClassModel::whereIn('id', $classes)->get();
    
            $students = Student::where('classes_id', $request->class_id)->with('subjectResults')->get();
    
            foreach ($students as $student) {
                $totalMarks = $student->subjectResults->sum('marks');
                $subjectCount = $student->subjectResults->count();
                $student->average_marks = $subjectCount ? $totalMarks / $subjectCount : 0;
            }
    
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
        $students = collect();
        $resultsFound = false;
    
        if ($request->filled('year_id')) {
            $students = Student::where('year_id', $request->year_id)->with('subjectResults')->get();
    
            foreach ($students as $student) {
                $totalMarks = $student->subjectResults->sum('marks');
                $subjectCount = $student->subjectResults->count();
                $student->average_marks = $subjectCount ? $totalMarks / $subjectCount : 0;
            }
    
            $students = $students->sortByDesc('average_marks')->values();
            foreach ($students as $index => $student) {
                $student->ranking = $index + 1;
            }
    
            $resultsFound = $students->isNotEmpty();
        }
    
        return view('manage-report.YearAcademicReport', compact('years', 'students', 'resultsFound'));
    }

    public function showActivityReportList()
    {
        $activity = Activity::all();
        return view('manage-report.ActivityReportList', compact('activities'));
    }

    public function showActivityReportForm($activityId)
    {
        $activity = Activity::findOrFail($activityId);
        $report = FinalActivityReport::where('activity_id', $activityId)->first();
        return view('manage-report.ActivityReportForm', compact('activity', 'report'));
    }

    public function storeActivityReport(Request $request, $activityId)
    {
        $request->validate([
            'impact' => 'required',
            'budget' => 'required|numeric',
            'date_submitted' => 'required|date',
        ]);

        $report = FinalActivityReport::updateOrCreate(
            ['activity_id' => $activityId],
            [
                'impact' => $request->impact,
                'budget' => $request->budget,
                'date_submitted' => $request->date_submitted,
            ]
        );

        return redirect()->route('activity-report-list')->with('success', 'Report saved successfully');
    }
}