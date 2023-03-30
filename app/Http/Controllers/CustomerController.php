<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Datatables;

class CustomerController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:customer-list|customer-create|customer-edit|customer-delete', ['only' => ['index','show']]);
         $this->middleware('permission:customer-create', ['only' => ['create','store']]);
         $this->middleware('permission:customer-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:customer-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Customer::latest()->where('user',Auth::user()->email)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('name', function ($row) {

                    // $nama = '<a href="' . route('application.list', $row->id) . '" >'.$row->name.'</a>';
                    $nama = '<a href="' . url('applicationlist/'.$row->id) . '" >'.$row->name.'</a>';

                    return $nama;
                })
                ->addColumn('action', function ($row) {

                    $btn = '<a href="' . route('customer.edit', $row->id) . '" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>';
                    $btn .= ' ';
                    $btn .= '<a href="javascript:void(0)" data-id="' . $row->id . '" class="btn btn-sm btn-danger deleteCustomer"><i class="bi bi-trash3-fill"></i></a>';
                    // $btn .= '<a href="javascript:void(0)" data-id="' . $row->id . '" class="btn btn-sm btn-success"><i class="bi bi-check-lg"></i></a>';

                    return $btn;
                })
                ->rawColumns(['name','action'])
                ->make(true);
        }

        return view('menu.background.customer.view');
    }

    public function create()
    {
        return view('menu.background.customer.add');
    }

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

    public function show(Customer $customer,$id)
    {
        dd($id);
    }

    public function edit(Customer $customer)
    {
        // $get_customer = Customer::find($id_customer);
        return view('menu.background.customer.edit', compact('customer'));
        // return response()->json($customer);
    }

    public function update(Request $request, Customer $customer)
    {

        // $customer->update($request->all());
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

        return redirect()->route('customer.index')->with('edit', 'Data '.$customer->name.' berhasil dirubah !');
    }

    public function destroy($id)
    {
        Customer::find($id)->delete();
        // return redirect()->route('customer.index')->with('delete', 'Data '.$id.' berhasil dihapus !');
        return response()->json(['success' => 'Customer deleted successfully.']);
    }

}
