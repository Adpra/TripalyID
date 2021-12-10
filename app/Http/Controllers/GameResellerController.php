<?php

namespace App\Http\Controllers;

use App\Models\GameReseller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class GameResellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gameResellers= GameReseller::all();
        return view('content-admin-reseller-part/Game/index', compact('gameResellers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content-admin-reseller-part/Game/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        GameReseller::insert([
            'name' => $request->get('name'),
        ]);

        return Redirect::back()->with('status', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GameReseller  $gameReseller
     * @return \Illuminate\Http\Response
     */
    public function show(GameReseller $gameReseller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GameReseller  $gameReseller
     * @return \Illuminate\Http\Response
     */
    public function edit(GameReseller $GameReseller)
    {
        return view('content-admin-reseller-part/Game/edit',compact('GameReseller'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GameReseller  $gameReseller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GameReseller $GameReseller)
    {
        GameReseller::where('id', $GameReseller->id)
        ->update([
            'name' => $request->name,
        ]);

        return Redirect::back()->with('status', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GameReseller  $gameReseller
     * @return \Illuminate\Http\Response
     */
    public function destroy(GameReseller $GameReseller)
    {
        GameReseller::destroy($GameReseller->id);

        return Redirect::back()->with('status', 'Data Berhasil Di Dihapus');
    }
}
