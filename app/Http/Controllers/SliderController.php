<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    // Hiển thị
    public function show()
    {

        return view('pages.back_end.themslider');
    }
    // Show
    public function showslider(Request $request)
    {
        $slider = Slider::orderBy('id', 'DESC')->get();
        foreach ($slider as $value) {
            $output = "";
            $output .= '<div class="mt-2 text-decoration-none"style="width: 100%;display:flex; padding:5px 5px ; border: 2px dashed  #ccc; box-shadow: 2px 2px #2c2b2b22;box-sizing: content-box;">
            <a onClick="return load_single_slider('. $value->id .')" href="javascript:void(0)"> <img id="pic" src="http://127.0.0.1:8000/public/upload/product/' . $value->image_url . '" width="70px" height="50px" alt="card-img-top" ></a>
           <input type="hidden" id="path" name= "path" value="http://127.0.0.1:8000/public/upload/product/' . $value->image_url . '">
      
            <div class="col" style="padding-top:10px" >
           <p id="topic_image" class="text-center">' . $value->image_topic . '</p>
       </div>
     
      <a   onClick="return xoa(' . $value->id . ')" href="javascript:void(0)" ><i  class="fa-solid fa-trash text-danger p-3" ></i></a>
          </div>';
            echo $output;
        };
    }
    //  Thêm
    public function create(Request $request)
    {
        $topic = $request->topic;
        $get_image = $request->file('image');

        $get_name_image = $get_image->getClientOriginalName();

        $name_image = current(explode('.', $get_name_image));

        $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();

        $get_image->move('public/upload/product', $new_image);
        // save uploaded image filename here to your database
    
        $slider = new Slider();
        $slider->image_url = $new_image;
        $slider->image_topic = $topic;
        $slider->save();
        return response()->json($get_image);
    }
    //  Load slider theo id
    public function single_slider($id)
    {
        $slider = Slider::find($id);
        return response()->json($slider);
    }
    // Chỉnh sửa
    public function update(Request $request)
    {
        $id = $request->id;
        $topic = $request->topic;
        $slider = Slider::find($id);
        $get_image = $request->file('image');
        if ($get_image == null) {
            $slider->image_topic = $request->topic;
            $slider->save();
        } else {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/upload/product', $new_image);
            $slider->image_url = $new_image;
            $slider->image_topic = $topic;
            $slider->save();
        }
        return response()->json($get_image);
    }
    // Xóa
    public function delete($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return response()->json($slider);
    }
}
