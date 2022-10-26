<?php

namespace App\Http\Controllers;

use App\Models\Reclamation;
use Illuminate\Http\Request;

class ReclamationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = Reclamation::latest()->paginate(5);

        return view('admin.reclamations.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reclamations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fullname'          =>  'required',
            'user_email'         =>  'required|email|unique:reclamations',
            'user_image'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $file_name = time() . '.' . request()->user_image->getClientOriginalExtension();

        request()->user_image->move(public_path('images'), $file_name);

        $reclamation = new Reclamation();

        $reclamation->fullname = $request->fullname;
        $reclamation->user_email = $request->user_email;
        $reclamation->user_gender = $request->user_gender;
        $reclamation->user_image = $file_name;

        $reclamation->save();

        return redirect()->route('reclamations.index')->with('success', 'Reclamation Added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function show(Reclamation $reclamation)
    {
        return view('admin.reclamations.show', compact('reclamation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reclamation $reclamation)
    {
        return view('admin.reclamations.edit', compact('reclamation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reclamation $reclamation)
    {
        $request->validate([
            'fullname'      =>  'required',
            'user_email'     =>  'required|email',
            'user_image'     =>  'image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $user_image = $request->hidden_user_image;

        if($request->user_image != '')
        {
            $user_image = time() . '.' . request()->suser_image->getClientOriginalExtension();

            request()->user_image->move(public_path('images'), $user_image);
        }

        $reclamation = Reclamation::find($request->hidden_id);

        $reclamation->fullname = $request->fullname;

        $reclamation->user_email = $request->user_email;

        $reclamation->user_gender = $request->user_gender;

        $reclamation->user_image = $user_image;

        $reclamation->save();

        return redirect()->route('reclamations.index')->with('success', 'Reclamation Data has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reclamation $reclamation)
    {
        $reclamation->delete();

        return redirect()->route('reclamations.index')->with('success', 'Reclamation Data deleted successfully');
    }
}
