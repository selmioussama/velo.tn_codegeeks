<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Velo;

class AdminController extends Controller
{
    public function view_category(){
        $data =category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request){
        $data= new category();
        $data->category_name=$request->category;
        $data->save();
        return redirect()->back()->with('message','Category Added Successfuly');

    }
    public function delete_category($id){
        $data= category::find($id);
        $data->delete();

        return redirect()->back()->with('message','Category Deleted Successfuly');

    }
    public function view_velo(){
        $data =category::all();
        return view('admin.velo', compact('data'));
    }

    public function add_velo(Request $request){
        $velo= new velo();
        $velo->velo_name=$request->velo_name;
        $velo->brand=$request->brand;
        $velo->description=$request->description;
        $velo->category=$request->category;
        $velo->quantity=$request->quantity;
        $velo->price=$request->price;
        $velo->discount_price=$request->discount_price;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('velo',$imagename);

        $velo->image=$imagename;

        $velo->save();
        return redirect()->back()->with('message','Velo Added Successfuly');

    }

    public function show_velos(){
        $velos =velo::all();
        return view('admin.show_velos', compact('velos'));
    }


};
