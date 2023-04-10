<?php

namespace App\Http\Controllers;

use App\Models\Approximation;
use Illuminate\Http\Request;

class EnamC extends Controller
{
    public function index($id)
    {
        $approximation = Approximation::all();
        // dd($approximation);
        return view('menu.enamc',compact('id','approximation'));
    }
}
