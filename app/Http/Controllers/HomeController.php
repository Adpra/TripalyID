<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Triplay;
use App\Models\Pulse;

class HomeController extends Controller
{
    public function homeView() {
        $dataGame = Triplay::all();
        $dataVoucher = Pulse::all();
        return view('index' , ['dataGame'    => $dataGame,
                               'dataVoucher' => $dataVoucher ]);
    }
}
