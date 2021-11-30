<?php

namespace App\Http\Controllers;

use App\Models\Triplay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TriplayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $triplays = triplay::all();
        return view('content-admin-part/adminTriplay/index',compact('triplays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content-admin-part/adminTriplay/tambah');
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

        if($request->file('imageCheckout')){
            $imageCheckout= $request -> file('imageCheckout')->store('image', 'public');

        }else{
            $image=null;
        };

        Triplay::insert([
            'name' => $request->get('name'),
            'slug' => Str::slug($request->name),
            'description' => $request->get('description'),
            'image' => $image,
            'imageCheckout' => $imageCheckout
            ]);
        return Redirect::back()->with('status', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Triplay  $triplay
     * @return \Illuminate\Http\Response
     */
    public function show(Triplay $triplay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Triplay  $triplay
     * @return \Illuminate\Http\Response
     */
    public function edit(Triplay $triplay)
    {
        return view('content-admin-part/adminTriplay/edit', compact('triplay'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Triplay  $triplay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Triplay $triplay)
    {
            if($request->file('image')){
                $image= $request->file('image')->store('images', 'public');
                $data = Triplay::findOrfail($triplay->id);
                if($data->image){
                Storage::delete('public/'. $data->image);
                    $data->image = $image;
                }else{
                    $data->image = $image;
                }
                $data->save();
            };
            if($request->file('imageCheckout')){
                $imageCheckout= $request->file('imageCheckout')->store('images', 'public');
                $data = Triplay::findOrfail($triplay->id);
                if($data->imageCheckout){
                Storage::delete('public/'. $data->imageCheckout);
                    $data->imageCheckout = $imageCheckout;
                }else{
                    $data->imageCheckout = $imageCheckout;
                }
                $data->save();
            };


        Triplay::where('id', $triplay->id)
         ->update([
             'name' => $request->name,
             'description' => $request->description,
         ]);
         return Redirect::back()->with('status', 'Data Berhasil Di Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Triplay  $triplay
     * @return \Illuminate\Http\Response
     */
    public function destroy(Triplay $triplay)
    {
        Triplay::destroy($triplay->id);

        return Redirect::back()->with('status', 'Data Berhasil Di Dihapus');
    }
}
