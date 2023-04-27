<?php

namespace App\Http\Controllers\EnamC;

use App\Http\Controllers\Controller;
use App\Models\LoanHistory;
use Illuminate\Http\Request;

class LoanHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        $plafond =  $request->input('plafond_column', []);
        $status =  $request->input('status_column', []);
        $balance =  $request->input('balance_column', []);
        $document =  $request->input('document_column', []);
        $history =  $request->input('history_column', []);

        $array = [];
            for ($i=0; $i < count($plafond); $i++) {
                if($plafond[$i] != ''){
                    array_push($array, [
                        "plafond" => $plafond[$i],
                        "status" => $status[$i],
                        "balance" => $balance[$i],
                        "document" => $document[$i],
                        "history" => $history[$i],
                    ]);
                }
            }
            // json_encode($array);
            dd($array);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoanHistory  $loanHistory
     * @return \Illuminate\Http\Response
     */
    public function show(LoanHistory $loanHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoanHistory  $loanHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(LoanHistory $loanHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LoanHistory  $loanHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoanHistory $loanHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoanHistory  $loanHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoanHistory $loanHistory)
    {
        //
    }
}
