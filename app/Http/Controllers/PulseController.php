<?php

namespace App\Http\Controllers;

use App\Models\Pulse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PulseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pulses = Pulse::all();
        return view('content-admin-part/pulsa/pulse',compact('pulses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content-admin-part/pulsa/addPulse');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('image')){
            $image= $request -> file('image')->store('image', 'public');

        }else{
            $image=null;
        };


        Pulse::insert([
            'name' => $request->get('name'),
            'slug' => Str::slug($request->name),
            'description' => $request->get('description'),
            'image' => $image,
            ]);
        return redirect('/admin/pulse')->with('status', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pulse  $pulse
     * @return \Illuminate\Http\Response
     */
    public function show(Pulse $pulse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pulse  $pulse
     * @return \Illuminate\Http\Response
     */
    public function edit(Pulse $pulse)
    {
        return view('content-admin-part/pulsa/pulseEdit',compact('pulse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pulse  $pulse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pulse $pulse)
    {
        if($request->file('image')){
            $image= $request->file('image')->store('images', 'public');
            $data = Pulse::findOrfail($pulse->id);
            if($data->image){
            Storage::delete('public/'. $data->image);
                $data->image = $image;
            }else{
                $data->image = $image;
            }
            $data->save();
        };



    Pulse::where('id', $pulse->id)
     ->update([
         'name' => $request->name,
         'description' => $request->description,
     ]);
     return redirect('/admin/pulse')->with('status', 'Data Berhasil Di Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pulse  $pulse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pulse $pulse)
    {
        Pulse::destroy($pulse->id);

        return redirect('/admin/pulse')->with('status', 'Data Berhasil Di Dihapus');
    }
}
