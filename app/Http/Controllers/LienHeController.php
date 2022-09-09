<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LienHe;
class LienHeController extends Controller
{
    public function index(){
        $lienhe = LienHe::all();
        return response()->json($lienhe);
    }
    public function update_logo(Request $request){
        $lienhe = LienHe::find(1);
        $get_image = $request->file('myfile');
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.', $get_name_image));
        $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
        $get_image->move('public/upload/product', $new_image);
        $lienhe->logo = $new_image;
        $lienhe->save();
        return response()->json($lienhe);
    }
    public function update_lienhe(Request $request){
        $lienhe = LienHe::find(1);

        $lienhe->phone = $request->phone;
        $lienhe->email = $request->email;
        $lienhe->diachi = $request->diachi;
        $lienhe->save();
        return response()->json($lienhe);
    }
}
