<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Triplay;
use App\Models\Pulse;

class CheckoutController extends Controller
{
    public function index( $slug ) {
        $singleGameData = Triplay::where( 'slug' , $slug )->first();
        $dataGamePrices = $singleGameData->Price()->get();
        return view('checkout' , ['dataItem'   => $singleGameData,
                                  'dataPrices' => $dataGamePrices,
                                  'slug'       => $slug]);
    }
    public function pulse( $slug ) {
        $singleVoucherData = Pulse::where( 'slug' , $slug )->first();
        $dataVoucherPrices = $singleVoucherData->PricePulse()->get();
        return view('checkout' , ['dataItem'    => $singleVoucherData,
                                  'dataPrices'  => $dataVoucherPrices,
                                  'slug'        => $slug]);
    }
}