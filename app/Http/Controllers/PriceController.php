<?php

namespace App\Http\Controllers;

use App\Models\Price;
use App\Models\Triplay;
use Illuminate\Http\Request;

class PriceController extends Controller
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
        return view('content-admin-part\adminTriplay\addPrice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Price::insert([
            'triplay_id' => $request->get('triplay_id'),
            'harga' => $request->get('harga'),
            'item' => $request->get('item'),

            ]);


        return redirect('/admin')->with('status', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function show(Price $price)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function edit(Triplay $triplay)
    {
        return view('content-admin-part\adminTriplay\price', compact('triplay'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Triplay $triplay)
    {
        Price::where('id', $triplay->price->id)
        ->update([
           // 'nama' => $request->nama,
           // 'triplay_id'=>$request->triplay_id,
            'harga' => $request->harga,
        ]);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function destroy(Price $price)
    {
        Price::destroy($price->id);


        return redirect('/admin')->with('status', 'Data Berhasil Di Dihapus');
    }
}
