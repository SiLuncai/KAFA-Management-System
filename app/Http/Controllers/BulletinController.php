<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bulletin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class BulletinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bulletins = Bulletin::all();
        return view('manageBulletin.index', compact('bulletins'));
    }

    public function create()
    {
        if ($this->isTeacher()) {
            $userID = auth()->user()->id;
            return view('manageBulletin.createBulletin', compact('userID'));
        } else {
            return $this->unauthorizedResponse();
        }
    }

    public function store(Request $request)
    {
        if ($this->isTeacher()) {
            $validatedData = $this->validateBulletinData($request);

            $validatedData['userID'] = auth()->user()->id;

            Bulletin::create($validatedData);

            return redirect()->route('bulletins.index')->with('success', 'Bulletin created successfully');
        } else {
            return $this->unauthorizedResponse();
        }
    }

    public function show($Bulletin)
    {
        $bulletins = Bulletin::findOrFail($Bulletin);
        return view('manageBulletin.viewBulletin', compact('bulletin'));
    }

    public function edit($Bulletin)
    {
        $bulletins = Bulletin::find($Bulletin);   
        return view('manageBulletin.editBulletin', compact('bulletins'));

    }

    public function update(Request $request, $bulletinID)
    {
        $bulletins = Bulletin::find($bulletinID);  
        $bulletins->update($request->all());
        return redirect()->route('bulletins.index')->with('success', 'Bulletin updated successfully');
    }

    public function destroy($Bulletin)
    {
        $bulletins = Bulletin::findOrFail($Bulletin);
        $bulletins->delete();
        return redirect()->route('bulletins.index')->with('success', 'Bulletin deleted successfully');
    }
}
