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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TechnicianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('technician-profile-page');
    }


    public function newOrder()
    {

        $orders = Order::with('device', 'manufacturer', 'model', 'orderedIssues', 'technician')
        ->where('technician_id', Auth::id()) // Assuming 'technician_id' is the column name in your orders table
        ->where('status', 'processing')
        ->get();
        // dd($orders);
        return view('technician-new-order-page', compact('orders'));
    }



    public function completeOrder()
    {
        $orders = Order::with('device', 'manufacturer', 'model', 'orderedIssues', 'technician')
        ->where('technician_id', Auth::id()) // Assuming 'technician_id' is the column name in your orders table
        ->where('status', 'completed')
        ->get();

        $new_orders = Order::with('device', 'manufacturer', 'model', 'orderedIssues', 'technician')
        ->where('technician_id', Auth::id()) // Assuming 'technician_id' is the column name in your orders table
        ->where('status', 'processing')
        ->get();
        // dd($orders);
        return view('technician-completed-orderpage', compact('orders','new_orders'));
    }

    public function profileEdit()
    {
        return view('technician-profile-edit');
    }

    public function technicianOrderDetail($id)
    {
        $order = Order::with('device', 'manufacturer', 'model', 'orderedIssues','technician')->find($id);
        $devices = Device::all();
        $new_orders = Order::with('device', 'manufacturer', 'model', 'orderedIssues', 'technician')
        ->where('technician_id', Auth::id()) // Assuming 'technician_id' is the column name in your orders table
        ->where('status', 'processing')
        ->get();

        return view('technician-order-detail', compact('order','devices','new_orders'));
    }

    public function changeStatus(Request $request) {
        $orderId = $request->input('order_id');

        // Update the order status and payment status in the database
        // Example:
        Order::where('id', $orderId)->update([
            'status' => 'completed',
            'payment_status' => 'paid',
        ]);

        return redirect()->route('technician-new-order')->with('success', 'Order Completed successfully');
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


    public function getManufacturers($deviceId)
    {
        // Fetch and return manufacturers based on the device ID
        $manufacturers = Device::findOrFail($deviceId)->manufacturers;
        return response()->json($manufacturers);
    }

    public function getModels($manufacturerId)
    {
        // Fetch and return models based on the manufacturer ID
        $models = Manufacturer::findOrFail($manufacturerId)->models;
        return response()->json($models);
    }

    public function getIssues($modelId)
    {
        // Fetch and return issues based on the model ID
        $issues = Model::findOrFail($modelId)->issues;
        return response()->json($issues);
    }

    public function storeOrder(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'device_id' => 'required',
            'manufacturer_id' => 'required',
            'model_id' => 'required',
            'issue_id' => 'required',
            // Add other validation rules as needed
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)  // Pass the validation errors to the view
                ->withInput();           // Pass the old input data to the view
        }


        $issues = Issue::whereIn('id', $request->issue_id)->get();
        $totalPrice = $issues->sum('price');
        $orderNo = time() . rand(1000, 9999);

        $order = Order::create([
            'order_no' => $orderNo,
            'device_id' => $request->device_id,
            'manufacturer_id' => $request->manufacturer_id,
            'model_id' => $request->model_id,
            'location' => $request->location,
            'total_price' => $totalPrice,
            'customer_name' => $request->input('customer_name'),
            'customer_email' => $request->input('customer_email'),
            'customer_phone' => $request->input('customer_phone'),
            'contact_through' => $request->input('contact_through'),
            'message' => $request->input('message'),
            'payment_status' => $request->input('payment_status'), // Assuming it's unpaid by default
            'status' => $request->input('status'), // Assuming it's unpaid by default
            'technician_id' => $request->input('technician_id'), // Assuming it's unpaid by default
        ]);
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

        return redirect()->route('technician-order-detail', $order->id);

    }
}
