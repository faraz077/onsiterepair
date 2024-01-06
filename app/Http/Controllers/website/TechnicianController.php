<?php

namespace App\Http\Controllers\website;

use App\Models\Issue;
use App\Models\Model;
use App\Models\Order;
use App\Models\Device;
use App\Models\Manufacturer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
        // dd($orders);
        return view('technician-completed-orderpage', compact('orders'));
    }

    public function profileEdit()
    {
        return view('technician-profile-edit');
    }

    public function technicianOrderDetail($id)
    {
        $order = Order::with('device', 'manufacturer', 'model', 'orderedIssues','technician')->find($id);
        $devices = Device::all();

        return view('technician-order-detail', compact('order','devices'));
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
        dd($request->all());
    }
}
