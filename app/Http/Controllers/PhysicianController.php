<?php

namespace App\Http\Controllers;

use App\Models\Physician;
use Illuminate\Http\Request;

class PhysicianController extends Controller
{
    //list method
    public function list()
    {
        // Retrieve all physicians with pagination
        $items = Physician::paginate(10); // Adjust the number to the desired number of items per page

        // Return the view with the paginated data
        return view('pages.physician.list', compact('items'));
    }

    //add method
    public function store(Request $request)
    {
        // Create a new physician record
        $item = new Physician();
        $item->account_no = $request->account_no;
        $item->facility_name = $request->facility_name;
        $item->account_representative = $request->account_representative;
        $item->first_name = $request->first_name;
        $item->last_name = $request->last_name;
        $item->pcp_no = $request->pcp_no;
        $item->npi_no = $request->npi_no;
        $item->street_address = $request->street_address;
        $item->city = $request->city;
        $item->state = $request->state;
        $item->zip_code = $request->zip_code;
        $item->clinic_name = $request->clinic_name;
        $item->office_name = $request->office_name;
        $item->fax_no = $request->fax_no;
        $item->phone_no = $request->phone_no;
        $item->notify_1 = $request->notify_1;
        $item->notify_2 = $request->notify_2;
        $item->save();

        toastr()->success('phycisian added successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('physician.list');
    }

    //edit method
    public function edit($id)
    {
        // Find the physician by ID
        $item = Physician::findOrFail($id);

        // Return the physician data in JSON format
        return response()->json($item);
    }

    //update method
    public function update(Request $request)
    {
        $item = Physician::findOrFail($request->id);

        // Update physician data
        $item->account_no = $request->account_no;
        $item->facility_name = $request->facility_name;
        $item->account_representative = $request->account_representative;
        $item->first_name = $request->first_name;
        $item->last_name = $request->last_name;
        $item->pcp_no = $request->pcp_no;
        $item->npi_no = $request->npi_no;
        $item->street_address = $request->street_address;
        $item->city = $request->city;
        $item->state = $request->state;
        $item->zip_code = $request->zip_code;
        $item->clinic_name = $request->clinic_name;
        $item->office_name = $request->office_name;
        $item->fax_no = $request->fax_no;
        $item->phone_no = $request->phone_no;
        $item->notify_1 = $request->notify_1;
        $item->notify_2 = $request->notify_2;
        $item->save();

        toastr()->success('phycisian updated successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('physician.list');
    }

    //delete method
    public function delete(Request $request)
    {
        $item = Physician::findOrFail($request->ItemID);
        $item->delete();
        toastr()->success('physician deleted successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('physician.list');
    }
}