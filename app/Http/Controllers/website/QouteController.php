<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Device;
use App\Models\Issue;
use App\Models\Manufacturer;
use App\Models\Model;
use Illuminate\Http\Request;

class QouteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $devices = Device::all();
        return view('instant-price-qoute', compact('devices'));
    }

    public function storeDevice(Request $request)
    {
        $device_id = $request->input('device_id');
        // dd($device_id);
        session(['selected_device_id' => $device_id]);

        // Retrieve manufacturers based on the selected device_id
        $manufacturers = Manufacturer::where('device_id', $device_id)->get();
        // dd($manufacturers);

        return response()->json(['success' => true, 'manufacturers' => $manufacturers]);
    }

    public function storeManufacturer(Request $request)
    {
        $manufacturer_id = $request->input('manufacturer_id');
        session(['selected_manufacturer_id' => $manufacturer_id]);

        // Retrieve models based on the selected manufacturer_id
        $models = Model::where('manufacturer_id', $manufacturer_id)->get();

        return response()->json(['success' => true, 'models' => $models]);
    }

    public function storeModel(Request $request)
    {
        $model_id = $request->input('model_id');
        session(['selected_model_id' => $model_id]);

        // Retrieve issues based on the selected model_id
        $issues = Issue::where('model_id', $model_id)->get();

        return response()->json(['success' => true, 'issues' => $issues]);
    }

    public function storeIssue(Request $request)
    {
        $issue_id = $request->input('issue_id');
        session(['selected_issue_id' => $issue_id]);

        return response()->json(['success' => true]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
