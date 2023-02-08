<?php

namespace App\Http\Controllers\Background;

use App\Models\Customer;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $data = [
        //     'data' => Customer::all()
        // ];
        // return view('menu.background.customer.view', $data);

        if ($request->ajax()) {

            $data = Customer::latest()->get();

            return Datatables::of($data)
            ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editCustomer">Edit</a>';

                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteCustomer">Delete</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('menu.background.customer.view');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.background.customer.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Customer::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
                'name' => $request->name,
                'marital_status' => $request->marital_status,
                // 'place_of_birth' => $request->place_of_birth,
                // 'date_of_birth' => $request->date_of_birth,
                // 'id_card_number' => $request->id_card_number,
                // 'phone_number' => $request->phone_number,
                // 'status_of_residence' => $request->status_of_residence,
                // 'profession' => $request->profession,
                // 'id_card_address' => $request->id_card_address,
                // 'residence_address' => $request->residence_address,
                // 'amenability' => $request->amenability,
                // 'education' => $request->education,
                // 'gender' => $request->gender,
            ]
        );

        return response()->json(['success' => 'Customer saved successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return response()->json($customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customer::find($id)->delete();

        return response()->json(['success' => 'Customer deleted successfully.']);
    }
}
