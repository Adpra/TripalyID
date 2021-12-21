<?php

namespace App\Http\Controllers;

use App\Models\Reseller;
use App\Models\GameReseller;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ResellerController extends Controller
{
 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gameResellers= GameReseller::all();
        return view('content-admin-reseller-part/admin-reseller/index',compact('gameResellers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(GameReseller $GameReseller)
    {

        return view('content-admin-reseller-part/admin-reseller/gamePrice',compact('GameReseller'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Notification::insert([
            'user_id' => $request->get('user_id'),
            'nameId' => $request->get('nameId'),
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'item' => $request->get('item'),
            'status' => $request->get('status'),
            'description' => $request->get('description')
        ]);

        return redirect('/reseller/status');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reseller  $reseller
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        return view('content-admin-reseller-part/admin-reseller/status',);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reseller  $reseller
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $notification = Notification::all();
        return view('content-admin-reseller-part/admin-reseller/permission',compact('notification'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reseller  $reseller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notification $notification)
    {
        Notification::where('id', $notification->id)
        ->update([
            'nameId' => $request->nameId,
            'name' => $request->name,
            'price' => $request->price,
            'item' => $request->item,
            'description' => $request->description,
            'status' => $request->status,


        ]);
        return Redirect::back()->with('status', 'Data Berhasil Di Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reseller  $reseller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reseller $reseller)
    {
        //
    }
}
