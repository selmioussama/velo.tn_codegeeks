<?php

namespace App\Http\Controllers;

use App\Models\complaint;
use App\Models\reclamation;
use App\Models\User;
use App\Models\veloL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complaint= complaint::all();


        return view("complaint.allcomplaint",compact("complaint"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("complaint.addcomplaint");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => ['required' ],
            'description' => ['required' ],


        ]);
        complaint::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'user_id'=>Auth::id(),
            'veloL_id'=>$request->velo_id
        ]);



        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rec= complaint::findorFail($id);
        $user=User::where('id', $rec->user_id)->firstOrFail();
        $velo=veloL::where('id', $rec->veloL_id)->firstOrFail();
        return view("complaint.singleRec",compact("rec" , "user",'velo'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function edit(complaint $complaint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, complaint $complaint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        complaint::findorFail($id)->delete();
        return redirect()->back();
    }
}
