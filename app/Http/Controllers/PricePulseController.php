<?php

namespace App\Http\Controllers;

use App\Models\PricePulse;
use App\Models\Pulse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PricePulseController extends Controller
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
        PricePulse::insert([
            'pulse_id' =>$request->get('pulse_id'),
            'price' => $request->get('price'),
            'item' => $request->get('item'),

            ]);





        return Redirect::back()->with('status', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PricePulse  $pricePulse
     * @return \Illuminate\Http\Response
     */
    public function show(PricePulse $pricePulse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PricePulse  $pricePulse
     * @return \Illuminate\Http\Response
     */
    public function edit(Pulse $pulse)
    {
        return view('content-admin-part\pulsa\pricePulse', compact('pulse'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PricePulse  $pricePulse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,PricePulse $pricePulse)
    {

        PricePulse::where('id', $pricePulse->id)
        ->update([
           // 'nama' => $request->nama,
           // 'triplay_id'=>$request->triplay_id,
            'price' => $request->price,
            'item' => $request->item,
        ]);



        // if( $request->submit == "Update"){
        //     true;
        // }else{
        //     false;
        // }



        return Redirect::back()->with('status', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PricePulse  $pricePulse
     * @return \Illuminate\Http\Response
     */
    public function destroy(PricePulse $pricePulse)
    {
        PricePulse::destroy($pricePulse->id);


        return Redirect::back()->with('status', 'Data Berhasil Di Dihapus');
    }
}
