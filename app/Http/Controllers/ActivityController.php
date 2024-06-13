<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    public function getData()
    {
        // Fetch all activities from the database
        $activities = Activity::all();

        // Pass the activities data to the view
        return view('ManageKAFAActivities.viewActivityGeneral', compact('activities'));
    }

    public function getDataAdmin()
    {
        // Fetch all activities from the database
        $activities = Activity::all();

        // Pass the activities data to the view
        return view('ManageKAFAActivities.ActivityList', compact('activities'));
    }

    public function create()
    {
        return view('ManageKAFAActivites.addActivity');
    }

    public function store(Request $request)
    {
        $request->validate([
            'activityName' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',
            'studentInvolved' => 'required|string',
            'venue' => 'required|string',
        ]);

        Activity::create($request->all());

        return redirect()->route('activity.getDataAdmin')->with('success', 'Activity created successfully!');
    }

    public function edit($activity)
    {
        $activityDetail = Activity::find($activity);
        return view('ManageKAFAActivities.editActivity', compact('activityDetail'));
    }

    public function update(Request $request, $activityID)
    {
        $request->validate([
            'activityName' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',
            'studentInvolved' => 'required|string',
            'venue' => 'required|string',
        ]);

        $activity = Activity::find($activityID);
        $activity->update($request->all());

        return redirect()->route('activity.getDataAdmin')->with('success', 'Activity updated successfully');
    }

    public function destroy($activityID)
    {
        $activity = Activity::findOrFail($activityID);
        $activity->delete();

        return redirect()->route('activity.getDataAdmin')->with('success', 'Activity deleted successfully');
    }

    public function adminsearch(Request $request){

        $search = $request->input('search');

        $activities = Activity::when($search, function($query, $search) {
            return $query->where('activityName', 'like', '%' . $search . '%');
        })->get();

        return view('ManageKAFAActivities.searchAdmin', ['activities' => $activities]);

    }

    public function usersearch(Request $request){

        $search = $request->input('search');

        $activities = Activity::when($search, function($query, $search) {
            return $query->where('activityName', 'like', '%' . $search . '%');
        })->get();

        return view('ManageKAFAActivities.searchUser', ['activities' => $activities]);

    }


}
