<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnamC extends Controller
{
    public function index($id)
    {
        return view('menu.enamc',compact('id'));
    }
}
