<?php

namespace App\Http\Controllers\EnamC;

use App\Http\Controllers\Controller;
use App\Models\Approximation;
use Illuminate\Http\Request;

class EnamC extends Controller
{
    public function index($id)
    {
        $approximation = Approximation::all();
        // dd($approximation);
        return view('menu.enamc.enamc',compact('id','approximation'));
    }
}
