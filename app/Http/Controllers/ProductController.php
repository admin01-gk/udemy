<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;



use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = DB::table('products')->latest()->paginate(3);
        return view('product.index',compact('product'));
    }
    public function create()
    {
        return view('product.create');
    }
    public function Store(Request $request)
    {
        $data = array();
        $data['product_name']= $request->product_name;
        $data['product_code']= $request->product_code;
        $data['details']= $request->details;
        $images=$request->file('logo');
        if($images){
            $images_name = date('dmy_H_s_i');
            $ext = strtolower($images->getClientOriginalExtension());
            $images_full_name = $images_name.'.'.$ext;
            $upload_path = 'images/';
            $images_url = $upload_path.$images_full_name;
            $success = $images->move($upload_path,$images_full_name);
            $data['logo'] = $images_url;
            $product = DB::table('products')->insert($data);
            return redirect()->route('product.index')->with('success',"Product Create Successfully");
        }
    }
    public function Edit($id)
    {
            $product = DB::table('products')->where('id',$id)->first();
            return view ('product.edit',compact('product'));
    }

    public function update(Request $request,$id)
    {
        $oldlogo = $request->old_logo;
        $data = array();
        $data['product_name']= $request->product_name;
        $data['product_code']= $request->product_code;
        $data['details']= $request->details;
        $images=$request->file('logo');
        if($images){
            unlink($oldlogo);
            $images_name = date('dmy_H_s_i');
            $ext = strtolower($images->getClientOriginalExtension());
            $images_full_name = $images_name.'.'.$ext;
            $upload_path = 'images/';
            $images_url = $upload_path.$images_full_name;
            $success = $images->move($upload_path,$images_full_name);
            $data['logo'] = $images_url;
            $product = DB::table('products')->where('id',$id)->update($data);
            return redirect()->route('product.index')->with('success',"Product Update Successfully");
        }
    }

    public function Delete($id)
    {
        $data = DB::table('products')->where('id',$id)->first();
        $images=$data->logo;
        unlink($images);
        $product=DB::table('products')->where('id',$id)->delete();
        return redirect()->route('product.index')->with('success',"Product Delete Successfully");
    }
    public function Show($id)
    {
        $data= DB::table('products')->where('id',$id)->first();
        return view('product.show',compact('data'));
    }




}
