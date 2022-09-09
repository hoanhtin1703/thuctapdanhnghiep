<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Tintuc;
use DataTables;
use App\Models\LienHe;
class TinTuc_Controller extends Controller

{
   public function index(Request $request){
    if ($request->ajax()) {
        $data = Tintuc::latest()->orderBy('id', 'DESC')->get();
        return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){

                  

                       $btn = '<a class="btn btn btn-success btn-sm mr-1"  href="javascript:void(0)">Xem Chi Tiêt </a>';
                       $btn =  $btn.'<a class="btn btn-primary btn-sm " data-bs-toggle="modal" data-bs-target="#staticBackdrop" title="sua"onclick="return tintuc('.$row->id.')"  href="javascript:void(0)">Sửa</a>';
                       $btn = $btn.' <a onclick="return xoatintuc('.$row->id.')" href="javascript:void(0)" class="btn btn-danger btn-sm ">Xóa</a>';

                        return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
    }
  
    return view('pages.back_end.quanlytintuc');
 
   }
    // public function show(){
    //     $tintuc = Tintuc::orderBy('id', 'DESC')->get();

    //     $output='
    //     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    //     <thead>
    //     <tr>
    //         <th>Thumnail tin tuc</th>
    //         <th>Tieu De Bai Viet</th>
    //          <th>Noi Dung Ngan</th>
    //         <th></th>
    //         <th></th>
    //         <th></th>
    //     </tr>
    // </thead>
        
    //     <tbody>';
    //         foreach($tintuc  as $key => $value){
    //             $output.=' <tr>
    //                 <td><img src="http://127.0.0.1:8000/public/upload/product/'.$value->image_url.'" width="100%" height="100px" alt="card-img-top" ></td>
    //                 <td>'.$value->topic.'</td>
    //                  <td>'.$value->sub_content.'</td>
    //                 <td><i class="fa-solid fa-eye text-primary"  title="Xem chi tiet"></i></td>
    //                 <td><a onclick="return tintuc('.$value->id.')"  href="javascript:void(0)"><i class="fa-solid fa-pencil text-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop" title="sua"></i></a></td>
    //                 <td><i class="fa-solid fa-trash-can text-danger"  title="xoa"></i></td>
    //             </tr>';
    //         }
    //         $output.=' 
            
    //     </tbody>
    //     </table>
      
    //   </nav>';
    // echo $output;
    // }
       //  Load slider theo id
       public function single_tintuc($id)
       {
           $tintuc = Tintuc::find($id);
           return response()->json($tintuc);
       }
    public function create(Request $request){
        $topic = $request->topic;
        $sub_content = $request->sub_content;
        $content = $request->main_content;
       
        $get_image = $request->file('image');

        $get_name_image = $get_image->getClientOriginalName();

        $name_image = current(explode('.', $get_name_image));

        $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();

        $get_image->move('public/upload/product', $new_image);
        // save uploaded image filename here to your database
     
        $tintuc = new Tintuc();
        $tintuc->image_url = $new_image;
        $tintuc->topic = $topic;
        $tintuc->sub_content = $sub_content;
        $tintuc->content = $content;
        $tintuc->save();
        return response()->json($tintuc);
    }
    public function update(Request $request ){
        $id = $request->id;
        $topic = $request->topic;
        $sub_content = $request->sub_content;
        $content = $request->main_content;
        $tintuc = Tintuc::find($id);
        $get_image = $request->file('image');
        if ($get_image == null) {
            $tintuc->topic = $topic;
            $tintuc->sub_content = $sub_content;
            $tintuc->content =  $content ;
            $tintuc->save();
        } else {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/upload/product', $new_image);
            $tintuc->image_url = $new_image;
            $tintuc->topic = $topic;
            $tintuc->sub_content = $sub_content;
            $tintuc->content = $content;
            $tintuc->save();
        }
        return response()->json($tintuc);
    }
    public function delete($id){
        $tintuc = Tintuc::find($id);
        $tintuc->delete();
        return response()->json($tintuc);
    }
    public function detail($id){
        $tintuc = Tintuc::find($id);
                $lienhe= LienHe::find(1);
        return view("pages.front_end.detail-tintuc")->with(compact('lienhe','tintuc'));
    }
}
