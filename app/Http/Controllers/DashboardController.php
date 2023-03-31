<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Customer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $nasabah = Customer::count();
        $plafond = Application::where('id_customer',2)->sum('plafond');
        $pending = Application::where('status','pending')->count();
        $acc = Application::where('status','acc')->count();
        return view('layout.dashboard', compact('nasabah','plafond','pending','acc'));

        // $customer = Customer::find(4)->pengajuan;
        // echo $customer->sum('plafond');
        // foreach ($customer as $object){
        //     echo $object->sum('id');
        // }
        // echo $customer[0]->purpose;
    }
}
