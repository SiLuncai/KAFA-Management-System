<?php

namespace App\Http\Controllers;

use App\Models\YearModel;
use App\Models\ClassModel;
use App\Models\SubjectModel;
use App\Models\ExamModel;
use App\Models\StudentResult;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentResultController extends Controller
{

    public function navigatetoExamList(Request $request): View //added method due to page directional
    {
        return view('ManageStudentResult.ExamList', [
            'user' => $request->user(),
        ]);
    }

    public function searchExamList(Request $request)
    { 
            // Validate the request
            $validatedData = $request->validate([
                'session' => 'required|integer',
                'class' => 'required|string',
                'subject' => 'required|string',
                'year' => 'required|integer',
                'examtype' => 'required|string', //name dekat form input
            ]);

            // Create
            YearModel::firstOrCreate(
                ['session' => $validatedData['session'], 'year' => $validatedData['year']]
            );

            ClassModel::firstOrCreate(
                ['className' => $validatedData['class']],
                ['totalStudentClass' => 0]
            ); // Provide a default value

            SubjectModel::firstOrCreate(['subjectName' => $validatedData['subject']]);

            ExamModel::firstOrCreate(['examType' => $validatedData['examtype']]);

            // Redirect or return response
            return redirect()->back()->with('success', 'Data inserted successfully.');
    }

        /*public function deleteExamList()
    {
        
    }*/


    public function insertExamResult(Request $request): View
    {
        return view('ManageStudentResult.StudentList', [
            'user' => $request->user(),
        ]);
    }

    /*public function updateStudentStatus()
    {
    }

    public function searchStudent()
    {
    }

    public function searchExamType()
    {
    }*/


///CRUD LATEST
    public function index()
    {
                         //model
        $studentresult = StudentResult::get();
        //return view('folder.bladeFile');
        return view('ManageStudentResult.StudentList',compact('studentresult'));
        
    }

    public function create()
    {
        return view('ManageStudentResult.CreateStudentResult');
    }

    //kalau route post mesti kena request
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required|max:255|string',
            'marks'=>'required|max:255|string',
            'grade'=>'required|max:255|string',
            
            
        ]);

        StudentResult::create([
            'name' => $request->name,
            'marks' => $request->marks,
            'grade' => $request->grade
        ]);

        //based on route
        return redirect('try/create')->with('status', 'Result created');

    }

    public function edit( $StudentResult)
    {
        $result = StudentResult::findOrFail($StudentResult);
        //return $result;
        return view('ManageStudentResult.editStudentResult', compact('result'));

    }

    public function update(Request $request, $StudentResult)
    {
        $request->validate([
            'name' =>'required|max:255|string',
            'marks'=>'required|max:255|string',
            'grade'=>'required|max:255|string',
            
            
        ]);

        StudentResult::findOrFail($StudentResult)->update([
            'name' => $request->name,
            'marks' => $request->marks,
            'grade' => $request->grade
        ]);

        //based on route
        return redirect()->back()->with('status', 'Result created');

    }

    public function destroy ($StudentResult)
    {
        $result = StudentResult::find($StudentResult);
        $result->delete();

        return redirect()->back()->with('status', 'Result deleted');
    }





}
