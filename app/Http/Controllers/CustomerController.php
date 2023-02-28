<?php

namespace App\Http\Controllers;

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

                    // $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editCustomer">Edit</a>';

                    //     $btn = $btn . '<form action="'.route('customer.destroy', $row->id).'" method="post">
                    //     <input type="hidden" name="_token" value="'.csrf_token().'">
                    //     <input type="hidden" name="_method" value="DELETE">

                    //     <button class="btn btn-danger btn-sm"
                    //         onclick="return confirm("Apakah Anda Yakin?")"><i class="bi bi-trash3-fill"></i></button>
                    // </form>';

                    $btn = '<a href="' . route('customer.edit', $row->id) . '" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>';
                    $btn = $btn . '<a href="javascript:void(0)" data-toggle="tooltip" data-id="' . $row->id .
                     '" data-original-title="Delete" class="btn btn-danger btn-sm deleteCustomer"><i class="bi bi-trash3-fill"></i></a>';
                    // $btn = $btn . '<a href="javascript:void(0)" data-toggle="tooltip" data-id="' . $row->id .
                    //  '" data-original-title="Delete" class="btn btn-danger btn-sm deleteCustomer"><i class="bi bi-trash3-fill"></i></a>';

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
        return view('menu.background.customer.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer                           = new Customer();
        $customer->id                       = $request->id;
        $customer->name                     = $request->name_column; // "name" diambil dari name bukan dari id
        $customer->marital_status           = $request->marital_status_column;
        $customer->place_of_birth           = $request->place_of_birth_column;
        $customer->date_of_birth            = $request->date_of_birth_column;
        $customer->id_card_number           = $request->id_card_number_column;
        $customer->phone_number             = $request->phone_number_column;
        $customer->status_of_residence      = $request->status_of_residence_column;
        $customer->profession               = $request->profession_column;
        $customer->id_card_address          = $request->id_card_address_column;
        $customer->residence_address        = $request->residence_address_column;
        $customer->amenability              = $request->amenability_column;
        $customer->education                = $request->education_column;
        $customer->gender                   = $request->gender_column;
        $customer->office_number            = $request->office_number_column;
        $customer->mate_name                = $request->mate_name_column;
        $customer->mate_place_of_birth      = $request->mate_place_of_birth_column;
        $customer->mate_date_of_birth       = $request->mate_date_of_birth_column;
        $customer->mate_id_card_address     = $request->mate_id_card_address_column;
        $customer->mate_residence_address   = $request->mate_residence_address;
        $customer->mate_profession          = $request->mate_profession_column;
        $customer->mate_phone_number        = $request->mate_phone_number_column;
        $customer->family_name              = $request->family_name_column;
        $customer->family_relationship      = $request->family_relationship_column;
        $customer->family_residence_address = $request->family_residence_address_column;
        $customer->family_phone_number      = $request->family_phone_number_column;
        $customer->save();

        return redirect()->route('customer.index')->with('success', 'Data '.$request->name_column.' berhasil ditambahkan !');
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
    public function edit($id_customer)
    {
        $get_customer = Customer::find($id_customer);
        return view('menu.background.customer.sunting', compact('get_customer'));
        // return response()->json($customer);
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
        $customer->name                     = $request->name_column; // "name" diambil dari name bukan dari id
        $customer->marital_status           = $request->marital_status_column;
        $customer->place_of_birth           = $request->place_of_birth_column;
        $customer->date_of_birth            = $request->date_of_birth_column;
        $customer->id_card_number           = $request->id_card_number_column;
        $customer->phone_number             = $request->phone_number_column;
        $customer->status_of_residence      = $request->status_of_residence_column;
        $customer->profession               = $request->profession_column;
        $customer->id_card_address          = $request->id_card_address_column;
        $customer->residence_address        = $request->residence_address_column;
        $customer->amenability              = $request->amenability_column;
        $customer->education                = $request->education_column;
        $customer->gender                   = $request->gender_column;
        $customer->office_number            = $request->office_number_column;
        $customer->mate_name                = $request->mate_name_column;
        $customer->mate_place_of_birth      = $request->mate_place_of_birth_column;
        $customer->mate_date_of_birth       = $request->mate_date_of_birth_column;
        $customer->mate_id_card_address     = $request->mate_id_card_address_column;
        $customer->mate_residence_address   = $request->gender_column;
        $customer->mate_profession          = $request->mate_profession_column;
        $customer->mate_phone_number        = $request->mate_phone_number_column;
        $customer->family_name              = $request->family_name_column;
        $customer->family_relationship      = $request->family_relationship_column;
        $customer->family_residence_address = $request->family_residence_address_column;
        $customer->family_phone_number      = $request->family_phone_number_column;
        $customer->save();

        return redirect()->route('customer.index')->with('edit', 'Data '.$customer->name_column.' berhasil dirubah !');
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

        // return redirect()->route('customer.index')->with('delete', 'Data '.$id.' berhasil dihapus !');
        return response()->json(['success' => 'Customer deleted successfully.']);
    }

}
