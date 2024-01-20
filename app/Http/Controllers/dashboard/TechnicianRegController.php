<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Technician;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TechnicianRegController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technicians = Technician::all();
        return view('dashboard.technician.technician', compact('technicians'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.technician.add-technician');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation rules
        $rules = [
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email|unique:technicians,email', // Added 'unique' rule
            'password' => 'required|min:8|confirmed',
            'address' => 'required|string',
            'expertise' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cnic_front' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cnic_back' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/technicians'), $imageName);
        }
        if ($request->hasFile('cnic_front')) {
            $imagecf = $request->file('cnic_front');
            $imageNamecf = time() . '.' . $imagecf->getClientOriginalExtension();
            $imagecf->move(public_path('images/technicians/cnic'), $imageNamecf);
        }
        if ($request->hasFile('cnic_back')) {
            $imagecb = $request->file('cnic_back');
            $imageNamecb = time() . '.' . $imagecb->getClientOriginalExtension();
            $imagecb->move(public_path('images/technicians/cnic'), $imageNamecb);
        }

        // Create a new technician
        $technician = new Technician([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'address' => $request->input('address'),
            'expertise' => $request->input('expertise'),
            'image' => $imageName,
            'cnic_front' => $imageNamecf,
            'cnic_back' => $imageNamecb,
        ]);

        // Save the technician
        $technician->save();

        // You may also want to redirect the user after successful submission
        return redirect()->route('reg-technician.index')->with('success', 'Technician has been added successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tech = Technician::find($id);
        return view('dashboard.technician.technician-show', compact('tech'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Retrieve the technician by ID from the database
        $technician = Technician::findOrFail($id); // Replace 'Technician' with your actual model name

        // Pass the technician data to the view for editing
        return view('dashboard.technician.edit-technician', compact('technician'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'password' => 'nullable|min:6|confirmed', // Add any password validation rules if needed
            'address' => 'required|string',
            'expertise' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'cnic_front' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'cnic_back' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Retrieve the technician by ID from the database
        $technician = Technician::findOrFail($id);

        // Update the technician with the form data
        $technician->name = $request->input('name');
        $technician->phone = $request->input('phone');
        $technician->email = $request->input('email');
        $technician->address = $request->input('address');
        $technician->expertise = $request->input('expertise');

        // Update the password if provided
        if ($request->filled('password')) {
            $technician->password = bcrypt($request->input('password'));
        }

        // Handle image uploads
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/technicians'), $imageName);
            $technician->image = $imageName;
        }
        if ($request->hasFile('cnic_front')) {
            $imagecf = $request->file('cnic_front');
            $imageNamecf = time() . '.' . $imagecf->getClientOriginalExtension();
            $imagecf->move(public_path('images/technicians/cnic'), $imageNamecf);
            $technician->cnic_front = $imageNamecf;
        }
        if ($request->hasFile('cnic_back')) {
            $imagecb = $request->file('cnic_back');
            $imageNamecb = time() . '.' . $imagecb->getClientOriginalExtension();
            $imagecb->move(public_path('images/technicians/cnic'), $imageNamecb);
            $technician->cnic_back = $imageNamecb;
        }

        // Save the changes
        $technician->save();

        // Redirect back with a success message
        return redirect()->route('reg-technician.index')->with('success', 'Technician updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $technician = Technician::findOrFail($id);
        $technician->delete();

        return redirect()->route('reg-technician.index')->with('success', 'Technician deleted successfully');
    }
}
