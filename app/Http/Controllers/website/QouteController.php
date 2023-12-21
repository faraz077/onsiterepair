<?php

namespace App\Http\Controllers\website;

use App\Models\Issue;
use App\Models\Model;
use App\Models\Order;
use App\Models\Device;
use App\Models\Manufacturer;
use App\Models\OrderedIssue;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

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





        return [
            'selected_location' => $selectedLocation,

        ];


        // return view('quote-information-form');
    }

    public function storeOrderData()
    {
        $selectedDeviceId = session('selected_device_id');
        $selectedManufacturerId = session('selected_manufacturer_id');
        $selectedModelId = session('selected_model_id');
        $selectedIssues = session('selected_issues');
        $selectedLocation = session('selected_location');

        // Retrieve manufacturers based on the selected device_id
        $device = Device::where('id', $selectedDeviceId)->first();
        $manufacturer = Manufacturer::where('id', $selectedManufacturerId)->first();

        // Retrieve models based on the selected manufacturer_id
        $model = Model::where('id', $selectedModelId)->first();

        // Retrieve issues based on the selected model_id
        $issues = Issue::whereIn('id', $selectedIssues)->get();
        $totalPrice = $issues->sum('price');
        // dd($issues);
        return view('quote-information-form', compact('device','manufacturer','model','issues','totalPrice','selectedLocation'));
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
        // Retrieve data from the session
        $selectedDeviceId = session('selected_device_id');
        $selectedManufacturerId = session('selected_manufacturer_id');
        $selectedModelId = session('selected_model_id');
        $selectedIssues = session('selected_issues');
        $selectedLocation = session('selected_location');

        // Validate the request data
        $validator = Validator::make($request->all(), [
            'contact_through' => 'required|in:phone,whatsapp,email',
            'customer_name' => 'required|string',
            'customer_email' => 'required|email',
            'customer_phone' => 'required|string',
            'total_price' => 'required|numeric',
            // Add other validation rules as needed
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)  // Pass the validation errors to the view
                ->withInput();           // Pass the old input data to the view
        }
       $orderNo = time() . rand(1000, 9999);
        // Create a new Order instance
        $order = Order::create([
            'order_no' => $orderNo,
            'device_id' => $selectedDeviceId,
            'manufacturer_id' => $selectedManufacturerId,
            'model_id' => $selectedModelId,
            'location' => $selectedLocation,
            'total_price' => $request->input('total_price'),
            'customer_name' => $request->input('customer_name'),
            'customer_email' => $request->input('customer_email'),
            'customer_phone' => $request->input('customer_phone'),
            'contact_through' => $request->input('contact_through'),
            'message' => $request->input('message'),
            'payment_status' => 'unpaid', // Assuming it's unpaid by default
            'status' => 'on_hold', // Assuming it's unpaid by default
        ]);
        $issues = Issue::whereIn('id', $selectedIssues)->get();
        // Create OrderedIssue instances for each selected issue
        foreach ($issues as $issue) {
            OrderedIssue::create([
                'order_id' => $order->id,
                'issue_id' => $issue->id,
                'issue_name' => $issue->name, // Replace with actual data
                'issue_price' => $issue->price, // Replace with actual data
                'issue_timeframe' => $issue->timeframe, // Replace with actual data
                'issue_warranty' => $issue->warranty, // Replace with actual data
            ]);
        }

        // Clear the session data after storing it in the database
        session()->forget(['selected_device_id', 'selected_manufacturer_id', 'selected_model_id', 'selected_issues', 'selected_location']);

        // Redirect or perform additional actions as needed
        return redirect('/thank-you-page');
    }

    public function thankYou()
    {
        return view('thank-you-page');
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
