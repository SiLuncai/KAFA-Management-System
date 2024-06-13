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

            $userID = auth()->user()->id;
            return view('manageBulletin.createBulletin', compact('userID'));
    }

    public function store(Request $request)
    {

            $validatedData['userID'] = auth()->user()->id;

            $request->validate([
                'titleBulletin' => 'required|string',
                'descBulletin' => 'required|string',
            ]);

            Bulletin::create($request->all());

            return redirect()->route('bulletins.index')->with('success', 'Bulletin created successfully');
    }

    public function show()
    {
        $bulletins = Bulletin::all();

        return view('manageBulletin.viewBulletin', compact('bulletins'));
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
