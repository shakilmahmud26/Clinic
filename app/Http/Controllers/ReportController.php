<?php

namespace App\Http\Controllers;

use App\Models\ControlLog;
use App\Models\Qc;
use App\Models\ReagentLog;
use App\Models\Test;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    // accession method
    public function accession()
    {
        return view('pages.report.accession');
    }

    // daily worksheet method
    public function dailyWorksheet()
    {
        return view('pages.report.daily-worksheet');
    }

    // result viewer method
    public function resultViewer()
    {
        return view('pages.report.result-viewer');
    }

    // test list method
    public function testList()
    {
        $items = Test::paginate(10);
        return view('pages.report.test-list', compact('items'));
    }

    //test store method
    public function testStore(Request $request)
    {
        // Create a new physician record
        Test::create($request->all());

        toastr()->success('test added successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('report.test-list');
    }

    //test edit method
    public function testEdit($id)
    {
        // Find the physician by ID
        $physician = Test::findOrFail($id);

        // Return the physician data in JSON format
        return response()->json($physician);
    }

    //test update method
    public function testUpdate(Request $request)
    {
        $item = Test::findOrFail($request->id);

        $item->category = $request->input('category');
        $item->cpt_code = $request->input('cpt_code');
        $item->lonic_code = $request->input('lonic_code');
        $item->code = $request->input('code');
        $item->name = $request->input('name');
        $item->test_group = $request->input('test_group');
        $item->short_name = $request->input('short_name');
        $item->sample_type = $request->input('sample_type');
        $item->display_order = $request->input('display_order');
        $item->price_a = $request->input('price_a');
        $item->price_b = $request->input('price_b');
        $item->price_c = $request->input('price_c');
        $item->price_d = $request->input('price_d');
        $item->save();

        toastr()->success('test updated successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('report.test-list');
    }

    //test delete method
    public function testDelete(Request $request)
    {
        $item = Test::findOrFail($request->ItemID);
        $item->delete();
        toastr()->success('test deleted successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('report.test-list');
    }

    // reagent log method
    public function reagentLog()
    {
        $tests = Test::all();
        $items = ReagentLog::paginate(10);
        return view('pages.report.reagent-log', compact('tests', 'items'));
    }

    // reagent store method
    public function reagentStore(Request $request)
    {
        $item = new ReagentLog();
        $item->instrument = $request->input('instrument');
        $item->test_name = $request->input('test_name');
        $item->lot_number = $request->input('lot_number');
        $item->test_per_kit = $request->input('test_per_kit');
        $item->date_opened = $request->input('date_opened');
        $item->expiration = $request->input('expiration');
        $item->unit = $request->input('unit');
        $item->reference_range_from = $request->input('reference_range_from');
        $item->reference_range_to = $request->input('reference_range_to');
        $item->panic_value_high = $request->input('panic_value_high');
        $item->panic_value_low = $request->input('panic_value_low');
        $item->save();

        toastr()->success('reagent log added successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('log.reagent');
    }

    //reagent edit method
    public function reagentEdit($id)
    {
        // Find the physician by ID
        $physician = ReagentLog::findOrFail($id);

        // Return the physician data in JSON format
        return response()->json($physician);
    }

    //reagent update method
    public function reagentUpdate(Request $request)
    {
        $item = ReagentLog::findOrFail($request->id);

        $item->instrument = $request->input('instrument');
        $item->test_name = $request->input('test_name');
        $item->lot_number = $request->input('lot_number');
        $item->test_per_kit = $request->input('test_per_kit');
        $item->date_opened = $request->input('date_opened');
        $item->expiration = $request->input('expiration');
        $item->unit = $request->input('unit');
        $item->reference_range_from = $request->input('reference_range_from');
        $item->reference_range_to = $request->input('reference_range_to');
        $item->panic_value_high = $request->input('panic_value_high');
        $item->panic_value_low = $request->input('panic_value_low');
        $item->save();

        toastr()->success('reagent log updated successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('log.reagent');
    }

    //reagent delete method
    public function reagentDelete(Request $request)
    {
        $item = ReagentLog::findOrFail($request->ItemID);
        $item->delete();
        toastr()->success('reagent log deleted successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('log.reagent');
    }

    // control log method
    public function controlLog()
    {
        $items = ControlLog::paginate(10);
        return view('pages.report.control-log', compact('items'));
    }

    // control store method
    public function controlStore(Request $request)
    {
        $item = new ControlLog();
        $item->instrument = $request->input('instrument');
        $item->control_name = $request->input('control_name');
        $item->date_opened = $request->input('date_opened');
        $item->expiration = $request->input('expiration');
        $item->lot_number = $request->input('lot_number');
        $item->unit = $request->input('unit');
        $item->level = $request->input('level');
        $item->average_mean = $request->input('average_mean');
        $item->range_from = $request->input('range_from');
        $item->range_to = $request->input('range_to');
        $item->qc_range = $request->input('qc_range');
        $item->standard_deviation = $request->input('standard_deviation');
        $item->save();

        toastr()->success('control log added successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('log.control');
    }

    //control edit method
    public function controlEdit($id)
    {
        // Find the physician by ID
        $item = ControlLog::findOrFail($id);

        // Return the physician data in JSON format
        return response()->json($item);
    }

    //control update method
    public function controlUpdate(Request $request)
    {
        $item = ControlLog::findOrFail($request->id);

        $item->instrument = $request->input('instrument');
        $item->control_name = $request->input('control_name');
        $item->date_opened = $request->input('date_opened');
        $item->expiration = $request->input('expiration');
        $item->lot_number = $request->input('lot_number');
        $item->unit = $request->input('unit');
        $item->level = $request->input('level');
        $item->average_mean = $request->input('average_mean');
        $item->range_from = $request->input('range_from');
        $item->range_to = $request->input('range_to');
        $item->qc_range = $request->input('qc_range');
        $item->standard_deviation = $request->input('standard_deviation');
        $item->save();

        toastr()->success('control log updated successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('log.control');
    }

    //control delete method
    public function controlDelete(Request $request)
    {
        $item = ControlLog::findOrFail($request->ItemID);
        $item->delete();
        toastr()->success('control log deleted successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('log.control');
    }

    // daily qc method
    public function dailyQc()
    {
        $items = Qc::paginate(10);
        $tests = Test::all();
        return view('pages.report.daily-qc', compact('items', 'tests'));
    }

    // qc store method
    public function qcStore(Request $request)
    {
        $item = new Qc();
        $item->instrument = $request->input('instrument');
        $item->run_no = $request->input('run_no');
        $item->run_date_time = $request->input('run_date_time');
        $item->performed_by = $request->input('performed_by');
        $item->tests = $request->input('tests', []);
        $item->save();

        toastr()->success('qc added successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('qc.daily');
    }

    //qc edit method
    public function qcEdit($id)
    {
        // Find the physician by ID
        $item = Qc::findOrFail($id);

        // Return the physician data in JSON format
        return response()->json($item);
    }

    //qc update method
    public function qcUpdate(Request $request)
    {
        $item = Qc::findOrFail($request->id);

        $item->instrument = $request->input('instrument');
        $item->run_no = $request->input('run_no');
        $item->run_date_time = $request->input('run_date_time');
        $item->performed_by = $request->input('performed_by');
        $item->tests = $request->input('tests', []);
        $item->save();

        toastr()->success('qc updated successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('qc.daily');
    }

    //qc delete method
    public function qcDelete(Request $request)
    {
        $item = Qc::findOrFail($request->ItemID);
        $item->delete();
        toastr()->success('qc deleted successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('qc.daily');
    }

    // qc auto analysis method
    public function qcAutoAnalysis()
    {
        return view('pages.report.qc-auto-analysis');
    }

    // billing report method
    public function billing()
    {
        return view('pages.report.billing');
    }


    // production report method
    public function production()
    {
        return view('pages.report.production');
    }
}