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

    public function delete_velo($id){
        $velo= velo::find($id);
        $velo->delete();

        return redirect()->back()->with('message','Velo Deleted Successfuly');

    }

    public function update_velo($id){

        $velo= velo::find($id);
        $category =category::all();

        return view('admin.update_velo', compact('velo','category'));
    }

    public function update_velo_confirm(Request $request , $id)
    {
        $velo= velo::find($id);

        $velo->velo_name =$request->velo_name;
        $velo->brand =$request->brand;
        $velo->description =$request->description;
        $velo->category =$request->category;
        $velo->quantity =$request->quantity;
        $velo->price =$request->price;
        $velo->discount_price =$request->discount_price;

        $image=$request->image;

        if ($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('velo',$imagename);
            $velo->image=$imagename;
        }


        $velo->save();
        return redirect('/show_velos')->with('message','Velo Updated Successfuly');



    }


};
