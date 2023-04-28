<?php

namespace App\Http\Controllers\EnamC;

use App\Http\Controllers\Controller;
use App\Models\capacity;
use App\Models\Capacity as ModelsCapacity;
use Illuminate\Http\Request;

class CapacityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $capacity = new Capacity();
        $capacity->id = $request->id;
        $capacity->id_application = $request->id_application;
        $capacity->business_name = $request->business_name_column; // "name" diambil dari name bukan dari id
        $capacity->business_sector = $request->business_sector_column;
        $capacity->business_status = $request->business_status_column;
        $capacity->business_status = $request->phone_number_column;
        $capacity->business_start = $request->business_start_column;
        $capacity->customer_start = $request->customer_start_column;
        $capacity->deed_number = $request->deed_number_column;
        $capacity->deed_date = $request->deed_date_column;
        $capacity->npwp = $request->npwp_column;
        $capacity->npwp_date = $request->npwp_date_column;
        $capacity->business_address = $request->business_address_column;
        $capacity->content = $request->content;
        $capacity->save();

        return redirect()->back()->with('success', 'Data berhasil ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\capacity  $capacity
     * @return \Illuminate\Http\Response
     */
    public function show(capacity $capacity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\capacity  $capacity
     * @return \Illuminate\Http\Response
     */
    public function edit(capacity $capacity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\capacity  $capacity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, capacity $capacity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\capacity  $capacity
     * @return \Illuminate\Http\Response
     */
    public function destroy(capacity $capacity)
    {
        //
    }
}
