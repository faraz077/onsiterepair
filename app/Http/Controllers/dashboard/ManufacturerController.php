<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Device;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Manufacturer;
use Illuminate\Support\Facades\Validator;

class ManufacturerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $manufacturers = Manufacturer::with('device')->get();
        return view('dashboard.manufacturer.manufacturers', compact('manufacturers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $devices = Device::all();
        return view('dashboard.manufacturer.add-manufacturer', compact('devices'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // Validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'device_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        // Custom error messages
        $messages = [
            'name.required' => 'The manufacturer name is required.',
            'name.max' => 'The manufacturer name should not exceed 255 characters.',
            'device_id.required' => 'The device name is required.',
            'image.required' => 'An image is required.',
            'image.image' => 'The uploaded file must be an image.',
            'image.mimes' => 'The image must be of type jpeg, png, jpg, or gif.',
            'image.max' => 'The image size should not exceed 2MB.',
        ];

        // Validation
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        // If validation passes, proceed with storing the data

        // Example: Storing the manufacturer
        $manufacturer = new Manufacturer;
        $manufacturer->name = $request->input('name');
        $manufacturer->device_id = $request->input('device_id');

        // Example: Handling image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/manufacturers'), $imageName);
            $manufacturer->image = $imageName;
        }

        // Save the manufacturer
        $manufacturer->save();

        // Redirect with success message
        return redirect()
            ->route('manufacturer.index')
            ->with('success', 'Manufacturer created successfully');
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
        $manufacturer = Manufacturer::findOrFail($id);
        $devices = Device::all(); // Assuming you have a Device model

        return view('dashboard.manufacturer.edit-manufacturer', compact('manufacturer', 'devices'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string',
            'device_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the image validation rules as needed
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $manufacturer = Manufacturer::findOrFail($id);

        $manufacturer->name = $request->input('name');
        $manufacturer->device_id = $request->input('device_id');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/manufacturers'), $imageName);
            $manufacturer->image = $imageName;
        }

        // Save the changes
        $manufacturer->save();

        // Redirect back with a success message
        return redirect()->route('manufacturer.index')->with('success', 'Manufacturer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $manufacturer = Manufacturer::findOrFail($id);
        $manufacturer->delete();

        return redirect()->route('manufacturer.index')->with('success', 'Manufacturer deleted successfully');
    }
}
