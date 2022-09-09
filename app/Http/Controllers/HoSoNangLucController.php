<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HoSoModel;
use DataTables;
class HoSoNangLucController extends Controller
{
    public function index(Request $request){
        
        if($request->hasfile('images'))
        {
            $get_image = $request->file('images');
            
        for ($i = 0; $i < count($get_image); $i++) {

            $image = $get_image[$i];
            $get_name_image = $image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image =  $name_image . rand(0, 99) . '.' . $image->getClientOriginalExtension();
            $image->move('public/upload/product', $new_image);
            $data[] = $new_image;
            }
        }
        $hoso = new HoSoModel();
        $hoso->mahopdong=$request->mahopdong;
        $hoso->tenhopdong=$request->tenhopdong;
        $hoso->ngayky=$request->ngayky;
        $hoso->ngayhoanthanh=$request->ngayhoanthanh;
        $hoso->vaitro=$request->vaitro;
        $hoso->total=$request->total;
        $hoso->tenchudautu=$request->tenchudautu;
        $hoso->diachi=$request->diachi;
        $hoso->dienthoai=$request->dienthoai;
        $hoso->fax=$request->fax;
        $hoso->email=$request->email;
        $hoso->mota=$request->mota;
        $hoso->image_url=json_encode($data);
        $hoso->save();
        return response()->json($image);
    }
    public function show(Request $request){
        if ($request->ajax()) {
            $data = HoSoModel::latest()->orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        //    $btn = '<a class="btn btn btn-success btn-sm mr-1"  href="javascript:void(0)">Xem Chi Tiêt </a>';
                           $btn =  '<a class="btn btn btn-success btn-sm mr-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop" title="sua"onclick="return hoso('.$row->id.')"  href="javascript:void(0)">Xem Chi Tiết</a>';
                           $btn = $btn.' <a onclick="return xoahoso('.$row->id.')" href="javascript:void(0)" class="btn btn-danger btn-sm ">Xóa</a>';
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
                    dd($data);
        }

        return view('pages.back_end.quanlyhosonangluc');
    }
    public function single_hoso($id)
       {
           $hoso = HoSoModel::find($id);
           return response()->json($hoso);
       }
       public function update(Request $request ){
        $id = $request->id;
        $hoso = HoSoModel::find($id);
        $get_image = $request->file('images');
        if ($get_image == null) {
            $hoso->mahopdong=$request->mahopdong;
            $hoso->tenhopdong=$request->tenhopdong;
            $hoso->ngayky=$request->ngayky;
            $hoso->ngayhoanthanh=$request->ngayhoanthanh;
            $hoso->vaitro=$request->vaitro;
            $hoso->total=$request->total;
            $hoso->tenchudautu=$request->tenchudautu;
            $hoso->diachi=$request->diachi;
            $hoso->dienthoai=$request->dienthoai;
            $hoso->fax=$request->fax;
            $hoso->email=$request->email;
            $hoso->mota=$request->mota;
            $hoso->save();
        } else {
            if($request->hasfile('images'))
            {
                $get_image = $request->file('images');
                
            for ($i = 0; $i < count($get_image); $i++) {
    
                $image = $get_image[$i];
                $get_name_image = $image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image =  $name_image . rand(0, 99) . '.' . $image->getClientOriginalExtension();
                $image->move('public/upload/product', $new_image);
                $data[] = $new_image;
                }
            }
            $hoso->image_url=json_encode($data);
            $hoso->mahopdong=$request->mahopdong;
            $hoso->tenhopdong=$request->tenhopdong;
            $hoso->ngayky=$request->ngayky;
            $hoso->ngayhoanthanh=$request->ngayhoanthanh;
            $hoso->vaitro=$request->vaitro;
            $hoso->total=$request->total;
            $hoso->tenchudautu=$request->tenchudautu;
            $hoso->diachi=$request->diachi;
            $hoso->dienthoai=$request->dienthoai;
            $hoso->fax=$request->fax;
            $hoso->email=$request->email;
            $hoso->mota=$request->mota;
            $hoso->save();
        }
        return response()->json($hoso);
    }
    public function delete($id){
        $hoso = HoSoModel::find($id);
        $hoso->delete();
        return response()->json($hoso);
    }
}

