<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Triplay;
use App\Models\Pulse;
use App\Models\ImageBanner;
use App\Models\ImageSlide;
use App\Models\Video;

class HomeController extends Controller
{
    public function homeView() {
        $dataGame = Triplay::all();
        $dataVoucher = Pulse::all();
        $dataSingleBanner = ImageBanner::all();
        $dataSliderBanner = ImageSlide::all();
        $urlVideo = Video::all();
        return view('index' , ['dataGame'    => $dataGame,
                               'dataVoucher' => $dataVoucher,
                               'dataBanner'  => $dataSingleBanner,
                               'dataSlider'  => $dataSliderBanner,
                               'dataVideo'   => $urlVideo]);
    }
}
