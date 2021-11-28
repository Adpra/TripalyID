<?php

namespace App\Http\Controllers;

use App\Models\ImageBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ImageBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imageBanner = ImageBanner::all();
        return view('content-admin-part\adminImage\ImageBanner',compact('imageBanner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content-admin-part\adminImage\addBanner');
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

        ImageBanner::insert([
            'image' => $image,
            ]);
        return redirect('/admin/imagebanner')->with('status', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImageBanner  $imageBanner
     * @return \Illuminate\Http\Response
     */
    public function show(ImageBanner $imageBanner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImageBanner  $imageBanner
     * @return \Illuminate\Http\Response
     */
    public function edit(ImageBanner $imageBanner)
    {
        return view('content-admin-part\adminImage\bannerEdit',compact('imageBanner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ImageBanner  $imageBanner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImageBanner $imageBanner)
    {

        if($request->file('image')){
            $image= $request->file('image')->store('images', 'public');
            $data = ImageBanner::findOrfail($imageBanner->id);
            if($data->image){
            Storage::delete('public/'. $data->image);
                $data->image = $image;
            }else{
                $data->image = $image;
            }
            $data->save();
        };


     return redirect('/admin/imagebanner')->with('status', 'Data Berhasil Di Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageBanner  $imageBanner
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImageBanner $imageBanner)
    {
        ImageBanner::destroy($imageBanner->id);
        return redirect('/admin/imagebanner')->with('status', 'Data Berhasil Di Di Ubah');
    }
}
