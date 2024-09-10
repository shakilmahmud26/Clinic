<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Test;
use Illuminate\Http\Request;

class OtherController extends Controller
{
    // profile setup method
    public function profileSetup()
    {
        $tests = Test::all();
        $items = Profile::paginate(10);
        return view('pages.other.profile-setup', compact('tests', 'items'));
    }

    //profile store method
    public function profileStore(Request $request)
    {
        $item = new Profile();
        $item->name = $request->input('name');
        $item->tests = $request->input('tests', []);
        $item->save();

        toastr()->success('profile added successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('profile-setup');
    }

    //Profile edit method
    public function profileEdit($id)
    {
        // Find the physician by ID
        $physician = Profile::findOrFail($id);

        // Return the physician data in JSON format
        return response()->json($physician);
    }

    //Profile update method
    public function profileUpdate(Request $request)
    {
        $item = Profile::findOrFail($request->id);

        $item->name = $request->input('name');
        $item->tests = $request->input('tests', []);
        $item->save();

        toastr()->success('test updated successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('profile-setup');
    }

    //Profile delete method
    public function profileDelete(Request $request)
    {
        $item = Profile::findOrFail($request->ItemID);
        $item->delete();
        toastr()->success('test deleted successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('profile-setup');
    }

    // levey jennings method
    public function leveyJennings()
    {
        return view('pages.other.levey-jennings');
    }
}
