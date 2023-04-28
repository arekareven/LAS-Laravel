<?php

namespace App\Http\Controllers\EnamC;

use App\Http\Controllers\Controller;
use App\Models\character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $character_name_column =  $request->input('character_name_column', []);
        $character_number_column =  $request->input('character_number_column', []);
        $alamat_column =  $request->input('alamat_column', []);

        $character_detail = [];
            for ($i=0; $i < count($character_name_column); $i++) {
                if($character_name_column[$i] != ''){
                    array_push($character_detail, [
                        "plafond" => $character_name_column[$i],
                        "character_number_column" => $character_number_column[$i],
                        "alamat_column" => $alamat_column[$i]
                    ]);
                }
            }

        $character                         = new character();
        $character->id                     = $request->id;
        $character->id_application         = $request->id_application;
        $character->personal_information   = $request->personal_information_column; // diambil dari name bukan dari id
        $character->behavioral_information = $request->behavioral_information_column;
        $character->family_information     = $request->family_information_column;
        $character->character_detail       = json_encode($character_detail);
        $character->save();

        return redirect()->back()->with('success', 'Data berhasil ditambahkan !');
        // return redirect()->route('enamc.show',$character->id_application)->with('success', 'Data berhasil ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\character  $character
     * @return \Illuminate\Http\Response
     */
    public function show(character $character)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\character  $character
     * @return \Illuminate\Http\Response
     */
    public function edit(character $character)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\character  $character
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, character $character)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\character  $character
     * @return \Illuminate\Http\Response
     */
    public function destroy(character $character)
    {
        //
    }
}
