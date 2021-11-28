<?php

namespace App\Http\Controllers;

use App\Models\ImageSlide;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ImageSlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imageSlide = ImageSlide::all();
        return view('content-admin-part\adminImage\imageSlide',compact('imageSlide'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content-admin-part\adminImage\addSlide');
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

        ImageSlide::insert([
            'image' => $image,
            ]);
        return redirect('/admin/imageslide')->with('status', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImageSlide  $imageSlide
     * @return \Illuminate\Http\Response
     */
    public function show(ImageSlide $imageSlide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImageSlide  $imageSlide
     * @return \Illuminate\Http\Response
     */
    public function edit(ImageSlide $imageSlide)
    {
        return view('content-admin-part\adminImage\slideEdit',compact('imageSlide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ImageSlide  $imageSlide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImageSlide $imageSlide)
    {

        if($request->file('image')){
            $image= $request->file('image')->store('images', 'public');
            $data = ImageSlide::findOrfail($imageSlide->id);
            if($data->image){
            Storage::delete('public/'. $data->image);
                $data->image = $image;
            }else{
                $data->image = $image;
            }
            $data->save();
        };


     return redirect('/admin/imageslide')->with('status', 'Data Berhasil Di Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageSlide  $imageSlide
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImageSlide $imageSlide)
    {
        ImageSlide::destroy($imageSlide->id);
        return redirect('/admin/imageslide')->with('status', 'Data Berhasil Di Di Ubah');
    }
}
