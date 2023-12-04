<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Issue;
use Illuminate\Support\Facades\Validator;

class IssueController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $issues = Issue::with('manufacturer.device.model')->get();
        // dd($issues);
        return view('dashboard.issues', compact('issues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $models = Model::all();
        return view('dashboard.add-issues', compact('models'));

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
            'model_id' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        // Custom error messages
        $messages = [
            'name.required' => 'The issue name is required.',
            'price.required' => 'Price is required.',
            'name.max' => 'The issue name should not exceed 255 characters.',
            'model_id.required' => 'The model name is required.',
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
        $issue = new Issue;
        $issue->name = $request->input('name');
        $issue->price = $request->input('price');
        $issue->model_id = $request->input('model_id');

        // Example: Handling image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/issues'), $imageName);
            $issue->image = $imageName;
        }

        // Save the device
        $issue->save();

        // Redirect with success message
        return redirect()
            ->route('issues.index')
            ->with('success', 'Issue created successfully');
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
         return view('dashboard.edit-issues');
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
