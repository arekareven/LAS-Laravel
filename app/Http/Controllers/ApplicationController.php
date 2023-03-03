<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Application::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('name', function ($row) {

                    $nama = '<a href="' . route('customer.edit', $row->id) . '" >'.$row->name.'</a>';

                    return $nama;
                })
                ->addColumn('action', function ($row) {

                    $btn = '<a href="' . route('customer.edit', $row->id) . '" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>';
                    $btn .= '<a href="javascript:void(0)" data-id="' . $row->id . '" class="btn btn-sm btn-danger deleteCustomer"><i class="bi bi-trash3-fill"></i></a>';
                    // $btn .= '<a href="javascript:void(0)" data-id="' . $row->id . '" class="btn btn-sm btn-success"><i class="bi bi-check-lg"></i></a>';

                    return $btn;
                })
                ->rawColumns(['name','action'])
                ->make(true);
        }

        return view('menu.background.application.view');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.background.application.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        //
    }
}
