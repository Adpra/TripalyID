<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
\Midtrans\Config::$serverKey = 'SB-Mid-server-cM0fuktoTGZL3M_XiL9Jsgxv'; 
\Midtrans\Config::$isProduction = false;

class PaymentController extends Controller
{
    public function tokenPaymentGopay(Request $request) {

        $request->name;
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            ),
            'payment_type' => 'gopay',
            'gopay' => array(
                'enable_callback' => true,  
                'callback_url' => '/home'  
            )
        );
        $response = \Midtrans\CoreApi::charge($params);
        $redirectLinkGopay = $response->actions[1]->url;;
        return Redirect::to($redirectLinkGopay);
    }


    public function tokenPaymentBCA(Request $request) {
        
        $params = array(
            'payment_type' => 'bank_transfer',
            'transaction_details' => array(
                'gross_amount' => 10000,
                'order_id' => rand(),
            ),
            'customer_details' => array(
                'email' => 'budi.utomo@Midtrans.com',
                'first_name' => 'budi',
                'last_name' => 'utomo',
                'phone' => '+6281 1234 1234'
            ),
           'bank_transfer' => array(
             'bank' => 'bca',
             'va_number' => '111111',
        )
        );
        $response = \Midtrans\CoreApi::charge($params);
        dd($response);
    }
}
