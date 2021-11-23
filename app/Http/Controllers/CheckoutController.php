<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index() {
        $name = "Hello World";
        $age  = "24";
        $array = ["Kucing" , "Anjing" , "Babik"];
        $personal = ['name' => $name , 'age' => $age];
        return view('checkout' , ['hewan' => $array]);
    }
}
