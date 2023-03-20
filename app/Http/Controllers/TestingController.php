<?php

namespace App\Http\Controllers;

use App\Models\Testing;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TestingController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Testing::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('name', function ($row) {

                    $nama = '<a href="' . route('application.list', $row->id) . '" >'.$row->name.'</a>';

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

        return view('menu.background.customer.view');
    }
}
