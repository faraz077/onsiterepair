<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $orders = Order::with([
            'model' => function ($query) {
                $query->select('id', 'name');
            }
        ])->get();

        // dd($orders);
        return view('dashboard.order', compact('orders'));
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
    return view('dashboard.show-order');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        // Retrieve the order with its related models
        $order = Order::with('device', 'manufacturer', 'model', 'orderedIssues')->find($id);

        // Check if the order exists
        if (!$order) {
            abort(404, 'Order not found');
        }

        // Pass the order data to the view
        return view('dashboard.edit-order', ['order' => $order]);
    }

    public function updateStatus(Request $request, $id)
    {

        $request->validate([
            'status' => 'required|in:on_hold,processing,completed,cancelled',
        ]);

        $order = Order::findOrFail($id);
        $order->update(['status' => $request->input('status')]);

        return redirect()->back()->with('success', 'Order status updated successfully');
    }

    public function updatePaymentStatus(Request $request, $id)
    {

        $request->validate([
            'payment_status' => 'required|in:paid,unpaid',
        ]);

        $order = Order::findOrFail($id);
        $order->update(['payment_status' => $request->input('payment_status')]);

        return redirect()->back()->with('success', 'Order Payment status updated successfully');
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
        $order = Order::find($id);

        if (!$order) {
            return redirect()->route('order.index')->with('error', 'Order not found');
        }

        $order->delete();

        return redirect()->route('order.index')->with('success', 'Order deleted successfully');
    }

}
