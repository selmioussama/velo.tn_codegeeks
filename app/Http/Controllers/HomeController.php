<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\User;
use App\Models\Velo;
use App\Models\Cart;

class HomeController extends Controller
{

    public function index (){
        $velo =velo::paginate(3);
        return view('home.userpage', compact('velo'));
    }
    public function redirect()
    {
     $role=Auth::user()->role;
     if ($role==='admin'){
         return view('admin.home');
     }else{
         $velo =velo::paginate(3);
         return view('home.userpage', compact('velo'));
     }

    }


    public function velo_details ($id){

        $velo= velo::find($id);

        return view('home.velo_details', compact('velo'));
    }

    public function add_cart (Request $request, $id){

        if (Auth::id())
        {
           $user=Auth::user();
            $velo= velo::find($id);

            $cart=new cart;
            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->adress=$user->adresse;
            $cart->user_id=$user->id;
            $cart->velo_name=$velo->velo_name;

            if ($velo->discount_price!=null)
            {
                $cart->price=$velo->discount_price * $request->quantity;
            }
            else{
                $cart->price=$velo->price * $request->quantity;
            }

            $cart->image=$velo->image;
            $cart->velo_id=$velo->id;
            $cart->quantity=$request->quantity;

            $cart->save();

            return redirect()->back();


        }
        else{
            return redirect('login');
        }
    }

    public function show_cart()
    {

        if (Auth::id()){
            $id =Auth::user()->id;
            $cart=cart::where('user_id','=',$id)->get();

            return view('home.showcart',compact('cart'));
        }else
        {
            return redirect('login');
        }

    }

    public function remove_cart($id){
        $cart =cart::find($id);
        $cart->delete();
        return redirect()->back();
    }



}
