<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Triplay;

class CheckoutController extends Controller
{
    public function index( $slug ) {
        $singleGameData = Triplay::where( 'slug' , $slug )->first();
        return view('checkout' , ['dataGame' => $singleGameData]);
    }
}
