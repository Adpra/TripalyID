<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Triplay;

class CheckoutController extends Controller
{
    public function index( $slug ) {
        $singleGameData = Triplay::where( 'slug' , $slug )->first();
        $dataPrices = $singleGameData->Price()->get();
        return view('checkout' , ['dataGame' => $singleGameData,
                                    'dataPrices' => $dataPrices]);
    }
}
