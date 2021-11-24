<?php

namespace App\Http\Controllers;

use App\Models\Triplay;
use Illuminate\Http\Request;

class TriplayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('content-admin-part/adminTriplay/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content-admin-part/adminTriplay/table');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Triplay  $triplay
     * @return \Illuminate\Http\Response
     */
    public function destroy(Triplay $triplay)
    {
        //
    }
}
