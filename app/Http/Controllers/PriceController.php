<?php

namespace App\Http\Controllers;

use App\Models\Price;
use App\Models\Triplay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Triplay $triplay)
    {

        // if($request->get('triplay_id')){
        //     $id = $request->get('triplay_id')->$triplay->id;

        // }

        Price::insert([
            'triplay_id' =>$request->get('triplay_id'),
            'harga' => $request->get('harga'),
            'item' => $request->get('item'),

            ]);


        return Redirect::back()->with('status', 'Data Berhasil Di Tambahkan');
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
    public function update(Request $request, Price $price)
    {
        Price::where('id', $price->id)
        ->update([
            'harga' => $request->harga,
            'item' => $request->item,
        ]);


        return Redirect::back()->with('status', 'Data Berhasil Di Update');
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


        return Redirect::back()->with('status', 'Data Berhasil Di Dihapus');
    }
}
