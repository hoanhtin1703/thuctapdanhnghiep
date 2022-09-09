<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Tintuc;
use App\Models\HoSoModel;
use App\Models\LienHe;
use Illuminate\Cache\RateLimiting\Limit;

class HomeController extends Controller
{
    public function index(){
      
        $slider = Slider::all();
        $tintuc = Tintuc::orderBy('id', 'DESC')->limit(3)->get();
        $hoso = HoSoModel::all();
        $lienhe = LienHe::find(1);
        return view("pages.home")->with(compact('slider', 'tintuc', 'hoso','lienhe'));
    }
    public function nlvakn(){
        $lienhe = LienHe::find(1);
        $slider = Slider::all();
        $tintuc = Tintuc::orderBy('id', 'DESC')->limit(3)->get();
        $hoso = HoSoModel::paginate(1);
        return view("pages.nlvakn")->with(compact('slider', 'tintuc', 'hoso','lienhe'));
    }
    public function tintuc(){
        $lienhe = LienHe::find(1);
        $slider = Slider::all();
        $tintuc = Tintuc::orderBy('id', 'DESC')->paginate(6);
        $hoso = HoSoModel::all();
        return view("pages.tintuc")->with(compact('slider', 'tintuc', 'hoso','lienhe'));
    }
}
