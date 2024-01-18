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
        return view('dashboard.technician', compact('technicians'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.add-technician');
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
        return view('dashboard.technician-show', compact('tech'));
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
