<?php

namespace App\Http\Controllers;

use App\Models\Don;
use App\Models\Association;
use Illuminate\Http\Request;

class DonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Don::latest()->paginate(5);

        return view('admin.dons.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.dons.create', ['allAssociations' => Association::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $request->validate([
            'don_destination'          =>  'required',
            'don_amount'   => 'required',
            'don_description'  => 'required|min:25',
            'don_type'         =>  'required',
        ]);
        $don = new Don;
        $don->don_destination = $request->don_destination;
        $don->don_amount = $request->don_amount;
        $don->don_description = $request->don_description;
        $don->don_type = $request->don_type;
        $don->save();

        $ass = $request->associations;
        foreach ($ass as $val) 
        {
            //dd((int)$val);
            $don->associations()->attach((int)$val);
        }
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Don  $don
     * @return \Illuminate\Http\Response
     */
    public function show(Don $don)
    {
        //
        return view('admin.dons.show', compact('don'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Don  $don
     * @return \Illuminate\Http\Response
     */
    public function edit(Don $don)
    {
        //
        return view('admin.dons.edit',['allAssociations' => Association::all()], compact('don'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Don  $don
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Don $don)
    {
        //
        $request->validate([
            'don_destination'          =>  'required',
            'don_amount'   => 'required',
            'don_description'  => 'required|min:25',
            'don_type'         =>  'required',
        ]);



        $don = Don::find($request->hidden_id);

        $don->don_destination = $request->don_destination;
        $don->don_amount = $request->don_amount;
        $don->don_description = $request->don_description;
        $don->don_type = $request->don_type;
        $don->save();

        $ass = $request->associations;
        if($ass != null) {
            foreach ($ass as $val) 
        {
            //dd((int)$val);
            $don->associations()->attach((int)$val);
        }
        }

        $don->save();

        return redirect()->route('dons.index')->with('success', 'Association Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Don  $don
     * @return \Illuminate\Http\Response
     */
    public function destroy(Don $don)
    {
        //
        $don->delete();

        return redirect()->route('dons.index')->with('success', 'Association Data deleted successfully');
    }
}
