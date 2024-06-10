<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentResultController extends Controller
{
   
    public function searchExamList (Request $request): View
    {
        return view('ManageStudentResult.ExamList', [
            'user' => $request->user(),
        ]);
    }

    /*public function editExamList()
    {
        
    }

    public function deleteExamList()
    {
        
    }*/

    
    public function insertExamResult (Request $request): View
    {
        return view('ManageStudentResult.StudentList', [
            'user' => $request->user(),
        ]);
    }

    public function updateStudentStatus()
    {
        
    }

    public function searchStudent()
    {
        
    }

    public function searchExamType()
    {
        
    }
}
