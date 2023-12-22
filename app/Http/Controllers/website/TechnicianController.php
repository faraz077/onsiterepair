<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('technician-new-order-page');
    }



       public function completeOrder()
    {
        return view('technician-completed-orderpage');
    }

         public function profileEdit()
    {
        return view('technician-profile-edit');
    }

             public function technicianOrderDetail()
    {
        return view('technician-order-detail');
    }

             public function 
technicianActiveOrderDetail()
    {
        return view('technician-active-order-detail');
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
