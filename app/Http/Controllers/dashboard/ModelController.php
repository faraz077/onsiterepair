<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Model;
use App\Models\Device;
use App\Models\Manufacturer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ModelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $models = Model::with('manufacturer.device')->get();
        //  dd($models);
        return view('dashboard.device-model.models', compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $manufacturers = Manufacturer::all();
        return view('dashboard.device-model.add-models' , compact('manufacturers'));

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
            'manufacturer_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        // Custom error messages
        $messages = [
            'name.required' => 'The model name is required.',
            'name.max' => 'The model name should not exceed 255 characters.',
            'manufacturer_id.required' => 'The manufacturer name is required.',
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

        // Example: Storing the device
        $model = new Model;
        $model->name = $request->input('name');
        $model->manufacturer_id = $request->input('manufacturer_id');

        // Example: Handling image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/models'), $imageName);
            $model->image = $imageName;
        }

        // Save the device
        $model->save();

        // Redirect with success message
        return redirect()
            ->route('models.index')
            ->with('success', 'Model created successfully');
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
        $model = Model::findOrFail($id);
        $manufacturers = Manufacturer::all();
        return view('dashboard.device-model.edit-models' , compact('model','manufacturers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        // Validate the form data
        $validator = Validator::make($request->all(),[
            'name' => 'required|string',
            'manufacturer_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the image validation rules as needed
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $model = Model::findOrFail($id);

        $model->name = $request->input('name');
        $model->manufacturer_id = $request->input('manufacturer_id');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/models'), $imageName);
            $model->image = $imageName;
        }

        // Save the changes
        $model->save();

        // Redirect back with a success message
        return redirect()->route('models.index')->with('success', 'Model updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Model::findOrFail($id);
        $model->delete();

        return redirect()->route('models.index')->with('success', 'Model deleted successfully');
    }
}
