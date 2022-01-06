<?php

namespace App\Http\Controllers;

use App\Models\PriceReseller;
use Illuminate\Http\Request;
use App\Models\GameReseller;
use Illuminate\Support\Facades\Redirect;

class PriceResellerController extends Controller
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
        PriceReseller::insert([
            'game_reseller_id'=>$request->get('game_reseller_id'),
            'price' => $request->get('price'),
            'item' => $request->get('item')
        ]);

        return Redirect::back()->with('status', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PriceReseller  $priceReseller
     * @return \Illuminate\Http\Response
     */
    public function show(PriceReseller $priceReseller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PriceReseller  $priceReseller
     * @return \Illuminate\Http\Response
     */
    public function edit(GameReseller $GameReseller)
    {
        return view('content-admin-reseller-part/Game/price',compact('GameReseller'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PriceReseller  $priceReseller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PriceReseller $PriceReseller)
    {
        PriceReseller::where('id', $PriceReseller->id)
        ->update([
            'price' => $request->price,
            'item' => $request->item
        ]);

        return Redirect::back()->with('status', 'Data Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PriceReseller  $priceReseller
     * @return \Illuminate\Http\Response
     */
    public function destroy(PriceReseller $PriceReseller)
    {
        PriceReseller::destroy($PriceReseller->id);
        return Redirect::back()->with('status', 'Data Berhasil Di Hapus');
    }
}
