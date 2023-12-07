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
        $selectedIssues = $request->input('selected_issues');

        // Ensure the session key is initialized if it doesn't exist
        $existingIssues = session('selected_issues', []);

        // Update the session with the modified array
        session(['selected_issues' => $selectedIssues]);

        return response()->json(['success' => true]);
    }

    public function storeLocation(Request $request)
    {
        $selectedLocation = $request->input('selected_location');

        // Store the selected location in the session
        session(['selected_location' => $selectedLocation]);


        $selectedDeviceId = session('selected_device_id');
        $selectedManufacturerId = session('selected_manufacturer_id');
        $selectedModelId = session('selected_model_id');
        $selectedIssues = session('selected_issues');
        $selectedLocation1 = session('selected_location');

        // Retrieve manufacturers based on the selected device_id
        $device = Device::where('id', $selectedDeviceId)->first();
        $manufacturer = Manufacturer::where('id', $selectedManufacturerId)->first();

        // Retrieve models based on the selected manufacturer_id
        $model = Model::where('id', $selectedModelId)->first();

        // Retrieve issues based on the selected model_id
        $issues = Issue::whereIn('id', $selectedIssues)->get();


        return [
            'device_id' => $selectedDeviceId,
            'manufacturer_id' => $selectedManufacturerId,
            'model_id' => $selectedModelId,
            'selected_issues' => $selectedIssues,
            'selected_location' => $selectedLocation1,
            'device' => $device,
            'manufacturer' => $manufacturer,
            'model' => $model,
            'issues' => $issues,
        ];
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
