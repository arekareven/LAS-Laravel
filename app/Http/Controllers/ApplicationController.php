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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('menu.background.application.add',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $application                       = new Application();
        $application->id                   = $request->id;
        $application->id_user              = $request->id_user;
        $application->id_customer          = $request->id_customer;
        $application->application_date     = $request->application_date_column; // "name" diambil dari name bukan dari id
        $application->analysis_date        = $request->analysis_date_column;
        $application->plafond              = $request->plafond_column;
        $application->time_period          = $request->time_period_column;
        $application->credit_type          = $request->credit_type_column;
        $application->application_type     = $request->application_type_column;
        $application->purpose              = $request->purpose_column;
        $application->purpose_description  = $request->purpose_description_column;
        $application->status               = "pending";
        $application->save();

        return redirect()->route('application.show',$application->id_customer)->with('success', 'Data berhasil ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        // $id_customer = $request->route()->parameter('id');
        if ($request->ajax()) {
            $detail = Application::latest()->where('id_customer',$id)->get();
            return Datatables::of($detail)
                ->addIndexColumn()
                ->addColumn('plafond', function ($row) {

                    $plafond = '<a href="' . url('enamc', $row->id) . '" >'.'Rp. '.number_format($row->plafond).'</a>';

                    return $plafond;
                })
                ->addColumn('action', function ($row) {

                    $btn = '<a href="' . route('application.edit', $row->id) . '" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>';
                    $btn .= ' ';
                    $btn .= '<a href="javascript:void(0)" data-id="' . $row->id . '" class="btn btn-sm btn-danger deleteApplication"><i class="bi bi-trash3-fill"></i></a>';

                    return $btn;
                })
                ->rawColumns(['plafond','action'])
                ->make(true);
        }
        return view('menu.background.application.view',compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        return view('menu.background.application.edit', compact('application'));
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
        $application->application_date     = $request->application_date_column; // "name" diambil dari name bukan dari id
        $application->analysis_date        = $request->analysis_date_column;
        $application->plafond              = $request->plafond_column;
        $application->time_period          = $request->time_period_column;
        $application->credit_type          = $request->credit_type_column;
        $application->application_type     = $request->application_type_column;
        $application->purpose              = $request->purpose_column;
        $application->purpose_description  = $request->purpose_description_column;
        $application->save();

        return redirect()->route('application.show',$application->id_customer)->with('edit', 'Data berhasil diedit !');
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

    public function create2($id)
    {
        return view('menu.background.application.add',compact('id'));
    }

    public function applicationList(Request $request)
    {
        if ($request->ajax()) {
            $detail = Application::latest()->get();
            return Datatables::of($detail)
                ->addIndexColumn()
                ->addColumn('plafond', function ($row) {

                    $plafond = '<a href="' . route('application.edit', $row->id) . '" >'.'Rp. '.number_format($row->plafond).'</a>';

                    return $plafond;
                })
                ->addColumn('action', function ($row) {

                    $btn = '<a href="' . route('application.edit', $row->id) . '" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>';
                    $btn .= '<a href="javascript:void(0)" data-id="' . $row->id . '" class="btn btn-sm btn-danger deleteApplication"><i class="bi bi-trash3-fill"></i></a>';

                    return $btn;
                })
                ->rawColumns(['plafond','action'])
                ->make(true);
        }

        return view('menu.background.application.view');

    }
}
