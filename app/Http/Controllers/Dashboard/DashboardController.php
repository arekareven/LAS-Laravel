<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $nasabah = Customer::where('user',Auth::user()->email )->count();
        $plafond = Application::where('id_user',Auth::user()->id)->sum('plafond');
        $pending = Application::where('id_user',Auth::user()->id)->where('status','pending')->count();
        $acc = Application::where('id_user',Auth::user()->id)->where('status','acc')->count();
        return view('layout.dashboard', compact('nasabah','plafond','pending','acc'));

        // $customer = Customer::find(4)->pengajuan;
        // echo $customer->sum('plafond');
        // foreach ($customer as $object){
        //     echo $object->sum('id');
        // }
        // echo $customer[0]->purpose;
    }
}
