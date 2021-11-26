<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Triplay;

class HomeController extends Controller
{
    public function homeView() {
        $dataGame = Triplay::all();
        return view('index' , ['dataGame' => $dataGame]);
    }
}
